<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InputController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\MeasureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get("",[HomeController::class,"index"])->middleware('can:admin.home')->name("admin.home");

Route::resource("/categories", CategoryController::class)->names("admin.categories");
Route::put('admin/categories/{category}/status', [CategoryController::class,'status'])->name('admin.categories.status');

Route::resource("/providers",ProviderController::class)->names("admin.providers");


Route::resource("/products",ProductController::class)->names("admin.products");
Route::put('admin/products/{product}/status', [ProductController::class,'status'])->name('admin.products.status');

Route::resource("/measures",MeasureController::class)->names("admin.measures");
Route::put('admin/measures/{measure}/status', [MeasureController::class,'status'])->name('admin.measures.status');

Route::resource("/brands",BrandController::class)->names("admin.brands");
Route::put('admin/brands/{brand}/status', [BrandController::class,'status'])->name('admin.brands.status');

Route::resource("/stores",StoreController::class)->names("admin.stores");
Route::put('admin/stores/{store}/status', [StoreController::class,'status'])->name('admin.stores.status');

Route::resource("/buyers",BuyerController::class)->names("admin.buyers");


Route::resource("/invoices",InvoiceController::class)->names("admin.invoices");

Route::resource("/users",UserController::class)->names("admin.users");

Route::resource("/roles",RoleController::class)->names("admin.roles");

Route::resource("/inputs",InputController::class)->names("admin.inputs");

Route::get('/api/proveedores', [ProviderController::class, 'obtenerProveedores'])->name('api.proveedores.index');



