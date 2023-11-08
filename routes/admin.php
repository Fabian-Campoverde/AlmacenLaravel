<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MeasureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProviderController;
use Illuminate\Support\Facades\Route;

Route::get("",[HomeController::class,"index"])->name("admin.home");

Route::resource("/categories", CategoryController::class)->names("admin.categories");

Route::resource("/providers",ProviderController::class)->names("admin.providers");

Route::resource("/products",ProductController::class)->names("admin.products");

Route::resource("/measures",MeasureController::class)->names("admin.measures");