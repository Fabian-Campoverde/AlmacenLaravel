@extends('admin.index-datatable')


@section('header-new')
<div class="bg-indigo-500 bg-opacity-60 p-4 text-center rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold text-white uppercase">Clientes</h1>
  </div>
    
@endsection
@section('css-new')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endsection
@section('container-new')

<div class="py-120">
<!-- component -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <button id="defaultModalButton" data-toggle="modal" data-target="#addModal"
class="inline-flex items-center px-4 py-2 
    bg-gray-800 border border-transparent rounded-md font-semibold text-xs 
    text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 
    active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 
    focus:ring-offset-2 transition ease-in-out duration-150 ml-4"
>{{ __('Agregar nuevo cliente') }}</button>
        
</div>
<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
style="margin-left: 40px; ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="p-4 md:p-5" method="POST" id="formAdd" action="{{ route('admin.buyers.store') }}">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-id-card mr-1 my-text-color"></i> Documento:</label>
                            <select id="documento" name="documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value=""> Elige un documento</option>
                                <option value="RUC">RUC</option>
                                <option value="DNI">DNI</option>
                                <option value="Carnet">Carnet de extranjeria</option>
                                <option value="Ninguno">No cuenta</option>
                              </select>
                    </div>
                   
                    <div>
                        <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-file"></i> N° de documento:</label>
    <div class="relative">
        
        <input type="text" name="nro_doc"  id="nro_doc" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123456789" >
    </div>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-user-plus"></i> Nombre:</label>
                        <input type="text" name="nombre"  id="nombre" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pepsi" >
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-envelope mr-1 my-text-color"></i> Correo:</label>
                          <input type="text" name="correo"  id="correo" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10734677071 " >
                    </div>
                   
                    <div>
                        <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-phone-alt"></i> Telefono:</label>
    <div class="relative">
        
        <input type="text" name="telefono"  id="telefono" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123456789" >
    </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-map-marker-alt mr-1 my-text-color"></i> Direccion:</label>
                        <input type="text" name="direccion"   id="direccion"  
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Av. Balta 123" >                   
                    </div>
                </div>
                <button id="submitButton" type="submit" style="display: none;"></button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">                    
                Cancelar
            </button>
          <label for="btnSubmit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="cursor: pointer;">
            <input id="btnSubmit" type="button" onclick="validarForm()" class="hidden">
            Añadir
            <i class="fas fa-plus-circle ml-2 mr-1 my-text-color"></i>
        </label>
        
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
style="margin-left: 40px; ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
          <button type="button" id="close-edit" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="p-4 md:p-5" method="POST" id="editForm">
                {{ method_field('PUT') }}
                @csrf
                <input type="hidden" name="id" id="id">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-id-card mr-1 my-text-color"></i> Documento:</label>
                            <select id="documentoEdit" name="documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value=""> Elige un documento</option>
                                <option value="RUC">RUC</option>
                                <option value="DNI">DNI</option>
                                <option value="Carnet">Carnet de extranjeria</option>
                                <option value="Ninguno">No cuenta</option>
                              </select>
                    </div>
                   
                    <div>
                        <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-file"></i> N° de documento:</label>
    <div class="relative">
        
        <input type="text" name="nro_doc"  id="nro_docEdit" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123456789" >
    </div>
                    </div>
                    
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-user-plus"></i> Nombre:</label>
                        <input type="text" name="nombre"  id="nombreEdit" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pepsi" >
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-envelope mr-1 my-text-color"></i> Correo:</label>
                          <input type="text" name="correo"  id="correoEdit" 
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="10734677071 " >
                    </div>
                   
                    <div>
                        <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-phone-alt"></i> Telefono:</label>
    <div class="relative">
        
        <input type="text" name="telefono"  id="telefonoEdit" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="123456789" >
    </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <i class="fas fa-map-marker-alt mr-1 my-text-color"></i> Direccion:</label>
                        <input type="text" name="direccion"   id="direccionEdit"  
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Av. Balta 123" >                   
                    </div>
                </div>
                <button id="submitButtonEdit" type="submit" style="display: none;"></button>
            </form>
        </div>
        <div class="modal-footer">
            
            <button type="button" data-dismiss="modal" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">                    
                Cancelar
            </button>
          <label for="btnSubmitEdit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="cursor: pointer;">
            <input id="btnSubmitEdit" type="button" onclick="validarFormEdit()" class="hidden">
            Actualizar
                    <i class="fas fa-edit ml-2"></i>
        </label>
        
        </div>
      </div>
    </div>
</div> 

    <!-- component -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
       
   
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
       <!--Card-->
        <div  class="p-8 mt-6  lg:mt-0 rounded shadow bg-white">
           
                        <table id="example" class="stripe hover " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead class="text-xs text-gray-700 uppercase bg-emerald-100 ">
                        <tr>
                            
                            <th scope="col" class="px-6 py-3 text-center">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Documento
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Nro
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Nombre 
                            </th>
                            <th scope="col" class="px-6 py-3 text-center"  >
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Direccion
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                               Correo
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($buyers as $b)
                            
                        
                        <tr class=" border-b border-gray-200  hover:bg-gray-50 ">
                            
                        
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{$b->id}}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{$b->documento}}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{$b->nro_doc}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{$b->nombre}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{$b->telefono}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{$b->direccion}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{$b->correo}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex item-center justify-center">
                                
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <button class="inline-flex items-center editar-buyer" id="readProductButton"
                                                            data-buyer-id="{{ $b->id }}"
                                                            data-buyer-nombre="{{ $b->nombre }}" 
                                                            data-buyer-documento="{{ $b->documento }}"  
                                                            data-buyer-nro_doc="{{ $b->nro_doc }}" 
                                                            data-buyer-correo="{{ $b->correo }}" 
                                                            data-buyer-direccion="{{ $b->direccion }}" 
                                                            data-buyer-telefono="{{ $b->telefono }}"         
                                                            data-toggle="modal" data-target="#editModal">
                                                                <svg class="w-5 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </button>
                                </div>
                                
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    
                                    <form class="form-delete" action="{{route('admin.buyers.destroy',['buyer'=>$b->id])}}" method="post" x-data>
                                        @csrf
                                        {{method_field("DELETE")}}
                                        <input type="hidden" name="buyer_name" value="{{ $b->nombre }}">
                                        <button type="submit" class="inline-flex items-center" >
                                            <svg class="w-5 h-4"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        </form>
                                    
                                    
                                </div>
                                </div>
                            </td>
                    



                        </tr>

                        
                        @endforeach
                    </tbody>
                </table>
                
            

        </div>
    </div>
    
    </div>
    
   
    
@endsection

@section('js-new')
<script>
    $(document).ready(function() {
            
                var table = $('#example').DataTable({
        responsive:true,
        stateSave:true,
        language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
        decimal: ',',
        thousands: '.'
    },
    dom: 'Bfrtip',
    lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "Mostrar Todo"] ],
    buttons: [
     
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                title:'Listado de Proveedores',
                titleAttr: 'Excel',
                exportOptions: {
                columns: [0,1,2,3,4]
            }
            },
            
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                title:'Listado de Proveedores',
                titleAttr: 'PDF',
                exportOptions: {
                columns: [0,1,2,3,4]
            }
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print"></i>',
                title:'Listado de Proveedores',
                titleAttr: 'Imprimir',
                
                exportOptions: {
                columns: [0,1,2,3,4]
            }
            },
            'pageLength',
            'colvis'
        ],
    });
    
    $('#example tbody').on('click', '.editar-buyer', function() {
            
            const buyerId = $(this).data('buyer-id');
            const buyerNombre = $(this).data('buyer-nombre');
            const buyerDoc = $(this).data('buyer-documento');
            const buyerNro = $(this).data('buyer-nro_doc');
            const buyerCorreo = $(this).data('buyer-correo');
            const buyerDireccion = $(this).data('buyer-direccion');
            const buyerTelefono = $(this).data('buyer-telefono');

            
            // Rellenar el formulario en el modal con los datos obtenidos
            $('#id').val(buyerId);
            $('#nombreEdit').val(buyerNombre);
            $('#documentoEdit').val(buyerDoc);
            $('#nro_docEdit').val(buyerNro);
            $('#correoEdit').val(buyerCorreo);
            $('#direccionEdit').val(buyerDireccion);
            $('#telefonoEdit').val(buyerTelefono);
            

            // Establecer la acción del formulario para editar la categoría
            const editForm = $('#editForm');
            const actionUrl = "{{ route('admin.buyers.update', ['buyer' => ':buyer']) }}";
            const updatedActionUrl = actionUrl.replace(':buyer', buyerId);
            editForm.attr('action', updatedActionUrl);
            
            
            // Mostrar el modal
            $('#editModal').removeClass('hidden');
    });

    $('.form-delete').submit(function (e) {
        e.preventDefault();
        const buyerName = e.target.querySelector("input[name='buyer_name']").value;
        Swal.fire({
  title: `¿Estás seguro de que deseas eliminar el cliente "${buyerName}"?`,
  text: "No hay vuelta atrás!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, hazlo!',
  cancelButtonText:'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    
    this.submit();
  }
});
    });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if (session('status'))
            <script>
                
                Toastify({
            text: '{{ session('message') }}', // Mensaje del toast desde la sesión
            duration: 1500, // Duración del toast en milisegundos (en este caso, 1.5 segundos)
            close: false, // Mostrar botón de cierre
            gravity: 'top', // Posición del toast 
            position: 'right', // Alineación del toast 
            offset: {
    x: 10, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
    y: 50 // vertical axis - can be a number or a string indicating unity. eg: '2em'
  },
            backgroundColor: '#{{ session('color') }}', // Color de fondo del toast
        }).showToast();
            </script>
        @endif



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/libretranslate@2.1.0/dist/libretranslate.js"></script>
<script>
     function validarForm() {
        // Obtener los valores de los campos
        const documento = document.getElementById('documento').value.trim();
        const nro_doc = document.getElementById('nro_doc').value.trim();
        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const telefono = document.getElementById('telefono').value.trim();
        const direccion = document.getElementById('direccion').value.trim();
        

        // Verificar si algún campo está vacío o tiene valor 0
        if (documento === '' || nombre === '' || correo === '' || direccion === '' || telefono === '' || nro_doc === '' ) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, completa todos los campos antes de continuar.',
            });
        } else {
            $.ajax({
            type: 'POST',
            url: '/admin/buyers', // Reemplaza esto con la URL de tu controlador y método
            data: {
                _token: '{{ csrf_token() }}', // Agrega el token CSRF de Laravel si es necesario
                documento: documento,
                nro_doc: nro_doc,
                nombre: nombre,
                correo:correo,
                telefono: telefono,
                direccion: direccion
            },
            success: function(response) {
                
                    const submitButton = document.getElementById('submitButton');
                        if (submitButton) {
                            submitButton.click();
                        }
                        
                
            },
            error: function(xhr) {
                if (xhr.status === 422) {
            const response = xhr.responseJSON;
            if (response && response.errors) {
                let errorMessage = '';

                if (Array.isArray(response.errors)) {
                    errorMessage = response.errors.join('\n');
                } else if (typeof response.errors === 'object') {
                    errorMessage = Object.values(response.errors).join('\n');
                } else {
                    errorMessage = response.errors.toString();
                }

                // Manejar los errores de validación
                Swal.fire({
                    icon: 'error',
                    title: 'Error de validación',
                    text: errorMessage,
                });
            } else {
                console.error('Respuesta inválida:', response);
            }
        } else {
            console.error('Error en la petición AJAX:', xhr);
        }
    }
        });
            
        }
     }
</script>

<script>
    function validarFormEdit() {
        // Obtener los valores de los campos
        const id = document.getElementById('id').value.trim();
        const documento = document.getElementById('documentoEdit').value.trim();
        const nro_doc = document.getElementById('nro_docEdit').value.trim();
        const nombre = document.getElementById('nombreEdit').value.trim();
        const correo = document.getElementById('correoEdit').value.trim();
        const telefono = document.getElementById('telefonoEdit').value.trim();
        const direccion = document.getElementById('direccionEdit').value.trim();
        
        

        // Verificar si algún campo está vacío o tiene valor 0
        if (id === '' || documento === '' || nombre === '' || correo === '' || direccion === '' || telefono === '' || nro_doc === '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Por favor, completa todos los campos antes de continuar.',
            });
        } else {
            $.ajax({
            type: 'POST',
            url: '/admin/buyers/'+id, 
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'PUT', 
                documento: documento,
                nro_doc: nro_doc,
                nombre: nombre,
                correo:correo,
                telefono: telefono,
                direccion: direccion
            },
            success: function(response) {
                
                    const submitButton = document.getElementById('submitButtonEdit');
                        if (submitButton) {
                            submitButton.click();
                        }
                
            },
            error: function(xhr) {
                if (xhr.status === 422) {
            const response = xhr.responseJSON;
            if (response && response.errors) {
                let errorMessage = '';

                if (Array.isArray(response.errors)) {
                    errorMessage = response.errors.join('\n');
                } else if (typeof response.errors === 'object') {
                    errorMessage = Object.values(response.errors).join('\n');
                } else {
                    errorMessage = response.errors.toString();
                }

                // Manejar los errores de validación
                Swal.fire({
                    icon: 'error',
                    title: 'Error de validación',
                    text: errorMessage,
                });
            } else {
                console.error('Respuesta inválida:', response);
            }
        } else {
            console.error('Error en la petición AJAX:', xhr);
        }
    }
        });
            
        }
    }
</script>
@endsection