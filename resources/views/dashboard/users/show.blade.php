<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ __('GESTION DE ESTUDIANTE') }}
        </h2>
    </x-slot>

    <div class="container px-4">

        <div class="row">

            @if (session('success'))
                <div class="col-md-12 mt-1">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Estudiantes</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            style="color: #000,"></button>
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

        </div>


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
                <button type="button" class="btn btn-info mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    style="color: #000;">
                    <i class="fa fa-file" style="margin-right: 4px;"></i>
                    <span span> Nuevo documento </span>
                </button>
                <br>
                <form action="{{route('students.destroy', $student)}}" method="POST" style="margin-bottom: -15px;">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="btn btn-danger mt-2" style="color: #000;">
                        <i class="fa fa-pencil" style="margin-right: 4px;"></i>
                        <span span> Eliminar </span>
                    </button>
                </form>
                <br>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditStudent"
                    style="color: #000;">
                    <i class="fa fa-trash" style="margin-right: 4px;"></i>
                    <span span> Editar </span>
                </button>
                <br>
                <a href="{{route('students.index')}}" class="btn btn-secondary mt-2" style="color: #000;">
                    <i class="fa fa-arrow-left" style="margin-right: 4px;"></i>
                </a>
                

                <!-- Modal -->
                <div class="modal fade" id="EditStudent" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form action="{{ route('students.update', $student) }}" method="POST">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nuevo estudiante</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="color: #000;"></button>
                                </div>

                                <div class="modal-body">

                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <div class="mb-3">
                                            <label for="Name" class="form-label">Nombre Completo</label>
                                            <input value="{{ old('name', $student->name) }}" name="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="Name">
                                            @error('name')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="Email" class="form-label">Email</label>
                                            <input value="{{ old('email', $student->email) }}" name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="Email"
                                                aria-describedby="emailHelp">
                                            @error('email')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="Phone" class="form-label">Telefono</label>
                                            <input value="{{ old('phone', $student->phone) }}" name="phone" type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                id="Phone">
                                            @error('phone')
                                                <div id="Phonefeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="Phone" class="form-label">Dirección</label>
                                            <input value="{{ old('address', $student->address) }}" name="address" type="text"
                                                class="form-control @error('address') is-invalid @enderror"
                                                id="Phone">
                                            @error('address')
                                                <div id="Addressfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="TypeDni" class="form-label">Tipo de documento</label>
                                            <select name="type_dni" id="TypeDni" class="form-select">
                                                <option value="1" @selected('1' == $student->type_dni)>Cedula de ciudadania</option>
                                                <option value="2" @selected('2' == $student->type_dni)>Targeta de identidad</option>
                                                <option value="3" @selected('3' == $student->type_dni)>Pasaporte</option>
                                                <option value="4" @selected('4' == $student->type_dni)>Cedula extrangera</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="Dni" class="form-label">Numero Documento</label>
                                            <input value="{{ old('dni', $student->dni) }}" name="dni" type="number"
                                                class="form-control @error('dni') is-invalid @enderror"
                                                id="Dni">
                                            @error('dni')
                                                <div id="Dnifeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                        {{-- <button type="submit" class="btn btn-primary" style="color: #000;">Guardar</button> --}}

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        style="color: #000;">Cerrar</button>
                                    <button type="submit" class="btn btn-primary"
                                        style="color: #000;">Guardar</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nuevo documento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="color: #000;"></button>
                                </div>

                                <div class="modal-body">

                                    @csrf

                                    <div class="row">

                                        <div class="mb-3">
                                            <label for="Name" class="form-label">Nombre del curso</label>
                                            <input value="{{ old('title') }}" name="title" type="text"
                                                class="form-control @error('title') is-invalid @enderror" id="Name">
                                            @error('title')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- <div class="mb-3">
                                            <label for="formFile" class="form-label">Documento (PDF)</label>
                                            <input class="form-control" type="file" accept="application/pdf" name="file" id="formFile">
                                            @error('file')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }} 
                                                </div>
                                            @enderror
                                        </div> --}}

                                        <div class="mb-3 col-lg-4>
                                            <label for="Name" class="form-label">Dia</label>
                                            <input value="{{ old('day') }}" name="day" type="number"
                                                class="form-control @error('day') is-invalid @enderror" id="Name">
                                            @error('day')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="TypeDni" class="form-label">Mes</label>
                                            <select name="month" id="TypeDni" class="form-select" >
                                              <option value="1" selected>Enero</option>
                                              <option value="2">Febrero</option>
                                              <option value="3">Marzo</option>
                                              <option value="4">Abril</option>
                                              <option value="5">Mayo</option>
                                              <option value="6">Junio</option>
                                              <option value="7">Julio</option>
                                              <option value="8">Agosto</option>
                                              <option value="9">Sectiembre</option>
                                              <option value="10">Octubre</option>
                                              <option value="11">Noviembre</option>
                                              <option value="12">Diciembre</option>
                                            </select>
                                          </div>

                                        <div class="mb-3 col-lg-4>
                                            <label for="Name" class="form-label">Year</label>
                                            <input value="{{ old('year') }}" name="year" type="number"
                                                class="form-control @error('year') is-invalid @enderror" id="Name">
                                            @error('year')
                                                <div id="Emailfeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <input type="hidden" name="dni" value="{{$student->dni}}">
                                        <input type="hidden" name="student_id" value="{{$student->id}}">

                                        
                                        
                                        {{-- 
                                        <div class="col-md-6 mb-3">
                                            <label for="Dni" class="form-label">Numero Documento</label>
                                            <input value="{{ old('dni') }}" name="dni" type="number"
                                                class="form-control @error('dni') is-invalid @enderror"
                                                id="Dni">
                                            @error('dni')
                                                <div id="Dnifeedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div> --}}


                                        {{-- <button type="submit" class="btn btn-primary" style="color: #000;">Guardar</button> --}}

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        style="color: #000;">Cerrar</button>
                                    <button type="submit" class="btn btn-primary"
                                        style="color: #000;">Guardar</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </x-slot>

            <x-slot name="aside">

                <style>
                    * {
                        margin: 0;
                        padding: 0
                    }

                    body {
                        background-color: #000
                    }

                    .card {
                        width: 350px;
                        background-color: #efefef;
                        border: none;
                        cursor: pointer;
                        transition: all 0.5s;
                    }

                    .image img {
                        transition: all 0.5s
                    }

                    .card:hover .image img {
                        transform: scale(1.5)
                    }

                    .name {
                        font-size: 22px;
                        font-weight: bold
                    }

                    .idd {
                        font-size: 14px;
                        font-weight: 600
                    }

                    .idd1 {
                        font-size: 12px
                    }

                    .number {
                        font-size: 22px;
                        font-weight: bold
                    }

                    .follow {
                        font-size: 12px;
                        font-weight: 500;
                        color: #444444
                    }

                    .btn1 {
                        height: 40px;
                        width: 150px;
                        border: none;
                        background-color: #000;
                        color: #aeaeae;
                        font-size: 15px
                    }

                    .text span {
                        font-size: 13px;
                        color: #545454;
                        font-weight: 500
                    }

                    .icons i {
                        font-size: 19px
                    }

                    hr .new1 {
                        border: 1px solid
                    }

                    .join {
                        font-size: 14px;
                        color: #a0a0a0;
                        font-weight: bold
                    }

                    .date {
                        background-color: #ccc
                    }
                </style>

                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center"> 

                            <span class="name mt-3">{{$student->name}}</span> 

                            <span class="idd">{{$student->email}}</span>

                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1">{{$student->address}}</span>
                            </div>

                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1">{{$student->phone}}</span>
                            </div>

                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1">{{$student->dni}}</span>
                            </div>

                        </div>
                    </div>
                </div>

            </x-slot>


        </x-section-title>

        <div class="flex py-6">

            <table class="table-fixed w-full">

                <thead>
                    <tr>
                        <th class="w-1/4 px-4 py-2">Cursos realizados</th>
                        <th class="w-1/4 px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($student->files as $file)
                
                        <tr>
                        <td class="border px-4 py-2">{{$file->title}}</td>
                        {{-- <td class="border px-4 py-2 text-center"></td> --}}
                        <td class="border px-4 py-2">
                            <a href="{{route('generate', $file->id)}}" target="_blanck" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fa fa-eye" style="margin-right: 4px;"></i>
                                <span> Ver </span>
                            </a>

                            <a href="{{ Request::root() . '/public' . $file->path}} " target="_blanck" class="bg-gray-300 hover:bg-gray-400 text-gray-800 text-warning font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fa fa-pen" style="margin-right: 4px;"></i>
                                <span> Actualizar </span>
                            </a>

                            <a href="{{ Request::root() . '/public' . $file->path}} " target="_blanck" class="bg-gray-300 hover:bg-gray-400 text-gray-800 text-danger  font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fa fa-trash" style="margin-right: 4px;"></i>
                                <span> Eliminar </span>
                            </a>

                            <a href="{{ Request::root() . '/public' . $file->path}} " target="_blanck" class="bg-blue-300 hover:bg-gray-400 text-gray-800 text-danger  font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fa fa-download" style="margin-right: 4px;"></i>
                                <span> Descargar </span>
                            </a>
                        </td>
                        </tr>
        
                    @endforeach
                </tbody>

            </table>

        </div>


    </div>

    {{-- <form id="DELSTUDENTSHOW#{{ $student->id }}" action="{{route('students.destroy', $student->id)}}" method="POST">
        @csrf
        @method('DELETE')
    </form> --}}

</x-app-layout>
