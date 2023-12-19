<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ __('CURSOS') }}
        </h2>
    </x-slot>

    <div class="container px-4">


      <div class="row">

        @if (session('success'))
          <div class="col-md-12 mt-1">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Cursos</strong> {{ session('success') }} 
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


        {{-- <div class="col-md-12 mt-6 p-6">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
      </div> --}}

      <x-section-title class="flex px-2 mb-4 py-6">


          <x-slot name="title">
              Gestion de cursos
          </x-slot>

          <x-slot name="description">

            {{-- <button class="bg-gray-300 hover:bg-blue-400 text-blue-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <i class="fa fa-plus" style="margin-right: 4px;"></i>
                <span> Nuevo estudiante</span>
            </button> --}}

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000;">
              <i class="fa fa-plus" style="margin-right: 4px;"></i>
              <span span> Nuevo curso</span>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <form action="{{route('courses.store')}}" method="POST">
                    
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Nuevo curso</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #000;"></button>
                    </div>

                    <div class="modal-body">
                        
                        @csrf

                        <div class="row">

                          <div class="mb-3">
                            <label for="Name" class="form-label">Nombre del curso</label>
                            <input value="{{old('name')}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="Name" >
                            @error('name')
                            <div id="Emailfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>
                            
                          <div class="mb-3">
                            <label for="Email" class="form-label">Precio</label>
                            <input value="{{old('value')}}" name="value" type="number" class="form-control @error('value') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                            @error('value')
                            <div id="Emailfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="Email" class="form-label">Horas</label>
                            <input value="{{old('hours')}}" name="hours" type="number" class="form-control @error('hours') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                            @error('hours')
                            <div id="Emailfeedback" class="invalid-feedback">
                              {{$message}}
                            </div>
                            @enderror
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="Description" class="form-label">Decripción</label>
                            {{-- <input value="{{old('description')}}" name="description" type="number" class="form-control @error('description') is-invalid @enderror" id="Description" > --}}
                            <textarea name="description" id="Description" cols="50"  rows="10"></textarea>
                            @error('description')
                            <div id="Dnifeedback" class="invalid-feedback">
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
          </x-slot>


      </x-section-title>

      <div class="flex py-6">

        <table class="table-fixed w-full">

          <thead>
            <tr>
              <th class="w-1/2 px-4 py-2">Cursos</th>
              <th class="w-1/4 px-4 py-2">Precio</th>
              <th class="w-1/4 px-4 py-2"></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($courses as $course)
                
              <tr>
                <td class="border px-4 py-2">{{$course->name}}</td>
                <td class="border px-4 py-2 text-center">${{number_format($course->value, 0)}}</td>
                <td class="border px-4 py-2 text-center">{{$course->description}}</td>
                <td class="border px-4 py-2">
                   
                    <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" data-bs-toggle="modal" data-bs-target="#exampleEditModal-{{$course->id}}" style="color: #000;">
                      <i class="fa fa-plus" style="margin-right: 4px;"></i>
                      <span span> Editar curso</span>
                    </button>

                    <form action="{{route('courses.destroy', $course)}}" method="POST" style="margin-bottom: -15px; display: inline;">
                      @csrf
                      @method('DELETE')
                      <button  type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 text-danger  font-bold py-2 px-4 rounded inline-flex items-center" style="color: #000;">
                          <i class="fa fa-trash" style="margin-right: 4px;"></i>
                          <span span> Eliminar </span>
                      </button>
                  </form>

                </td>
              </tr>

              <div class="modal fade" id="exampleEditModal-{{$course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
  
                    <form action="{{route('courses.update', $course)}}" method="POST">
                      
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #000;"></button>
                      </div>
  
                      <div class="modal-body">
                          
                        @csrf
                        @method('PUT')
  
                          <div class="row">
  
                            <div class="mb-3">
                              <label for="Name" class="form-label">Nombre del curso</label>
                              <input value="{{old('name', $course->name)}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="Name" >
                              @error('name')
                              <div id="Emailfeedback" class="invalid-feedback">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
                              
                            <div class="mb-3">
                              <label for="Email" class="form-label">Precio</label>
                              <input value="{{old('value', $course->value)}}" name="value" type="number" class="form-control @error('value') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                              @error('value')
                              <div id="Emailfeedback" class="invalid-feedback">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
  
                            <div class="mb-3">
                              <label for="Email" class="form-label">Horas</label>
                              <input value="{{old('hours', $course->hours)}}" name="hours" type="number" class="form-control @error('hours') is-invalid @enderror" id="Email" aria-describedby="emailHelp" >
                              @error('hours')
                              <div id="Emailfeedback" class="invalid-feedback">
                                {{$message}}
                              </div>
                              @enderror
                            </div>
  
                            <div class="col-md-6 mb-3">
                              <label for="Description" class="form-label">Decripción</label>
                              {{-- <input value="{{old('description')}}" name="description" type="number" class="form-control @error('description') is-invalid @enderror" id="Description" > --}}
                              <textarea name="description" id="Description" cols="50"  rows="10">{{$course->description}}</textarea>
                              @error('description')
                              <div id="Dnifeedback" class="invalid-feedback">
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
            @endforeach
          </tbody>
          
        </table>
        
      </div>
      
      
    </div>
    
    {{$courses->links()}}
    <br>
      
</x-app-layout>


