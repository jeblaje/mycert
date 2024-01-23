<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ __('ESTUDIANTES') }}
        </h2>
    </x-slot>

    <div class="container px-4">

      <div class="row">

        @if (session('success'))
          <div class="col-md-12 mt-1">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Estudiantes</strong> {{ session('success') }} 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="color: #000,"></button>
            </div>
          </div>
        @endif

        @error('name')
          <div class="col-md-12 mt-1 ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('phone')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('dni')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('address')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('email')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('type_dni')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror

        @error('locate_expe_dni')
          <div class="col-md-12 mt-1">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Cuidado!</strong> {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
        @enderror


        {{-- <div class="col-md-12 mt-6 p-6">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div> --}}

      <x-section-title class="flex px-2 mb-4 py-6">


          <x-slot name="title">
              Gestion de usuarios
          </x-slot>

          <x-slot name="description">

            {{-- <button class="bg-gray-300 hover:bg-blue-400 text-blue-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <i class="fa fa-plus" style="margin-right: 4px;"></i>
                <span> Nuevo estudiante</span>
            </button> --}}

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000;">
              <i class="fa fa-plus" style="margin-right: 4px;"></i>
              <span span> Nuevo estudiante</span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <form action="{{route('students.store')}}" method="POST">
                    
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Nuevo estudiante</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #000;"></button>
                    </div>

                    <div class="modal-body">
                        
                        @csrf

                        <div class="row">

                          <div class="mb-3">
                            <label for="Name" class="form-label">Nombre Completo</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="Name" >
                            @error('name')
                            <div id="Emailfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                            
                          <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input value="{{old('email')}}" name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                            @error('email')
                            <div id="Emailfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>

                          <div class="col-md-142 mb-3">
                            <label for="expedition" class="form-label">Lugar de expedición</label>
                            <input value="{{old('locate_expe_dni')}}" name="locate_expe_dni" type="text" class="form-control @error('locate_expe_dni') is-invalid @enderror" id="expedition" >
                            @error('locate_expe_dni')
                            <div id="Phonefeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="TypeDni" class="form-label">Tipo de documento</label>
                            <select name="type_dni" id="TypeDni" class="form-select" >
                              <option value="1" selected>Cedula de ciudadania</option>
                              <option value="2">Targeta de identidad</option>
                              <option value="3">Pasaporte</option>
                              <option value="4">Cedula extrangera</option>
                            </select>
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="Dni" class="form-label">Numero Documento</label>
                            <input value="{{old('dni')}}" name="dni" type="number" class="form-control @error('dni') is-invalid @enderror" id="Dni" >
                            @error('dni')
                            <div id="Dnifeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label for="Phone" class="form-label">Telefono</label>
                            <input value="{{old('phone')}}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="Phone" >
                            @error('phone')
                            <div id="Phonefeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="Address" class="form-label">Dirección</label>
                            <input value="{{old('address')}}" name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="Address" >
                            @error('address')
                            <div id="Addressfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                          
                          
                          {{-- <button type="submit" class="btn btn-primary" style="color: #000;">Guardar</button> --}}
                        
                        </div>

                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: #000;">Cerrar</button>
                      <button type="submit" class="btn btn-primary" style="color: #000;">Guardar</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
              
          </x-slot>

          <x-slot name="aside">
              Desde aqui podras crear nuevos estudiantes con sus datos personales para tenerlos en base de datos, una vez creado podras añadirles cursos que hallan realizado y el sistema le creara un certificado de acuerdo a la informacion especificada del documento como fecha de expedicion del certificado, nombre completo del estudiante etc.
              <br><br>
              La lista de estudiantes esta en orden creciente de acuerdo al numero del documento de estudiante.
          </x-slot>


      </x-section-title>

      <div class="flex py-6">

        <table class="table-fixed w-full">

          <thead>
            <tr>
              <th class="w-1/2 px-4 py-2">Documento</th>
              <th class="w-1/2 px-4 py-2">Estudiantes</th>
              <th class="w-1/4 px-4 py-2">Cursos realizados</th>
              <th class="w-1/4 px-4 py-2"></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($students as $student)
                
              <tr>
                <td class="border px-4 py-2">{{$student->dni}}</td>
                <td class="border px-4 py-2">{{$student->name}}</td>
                <td class="border px-4 py-2 text-center"> {{count($student->certificates ?? [])}}</td>
                <td class="border px-4 py-2">
                    <a href="{{route('students.show', $student)}}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                        <i class="fa fa-eye" style="margin-right: 4px;"></i>
                        <span> Ver </span>
                    </a>
                </td>
              </tr>

            @endforeach
          </tbody>

        </table>

      </div>


    </div>
    {{$students->links()}}
    <br>
      
</x-app-layout>


