@extends('layouts.landing')


@section('content')


    <!-- banner section start start-->
    <div class="index1-listing-slider-wrapper float_left" style="background-image: url({{asset('assets/images/banners/services.jpg')}}) !important;">
        <div class="container">
           <div class="slider-text text-center">
              <h4>Certificados</h4>
              {{-- <ul>
                 <li>
                    <a href="javascript:;">Home</a>
                 </li>
                 <li>/ Jobs Details</li>
              </ul> --}}
           </div>
        </div>
    </div>
     <!-- banner section start end-->

    <div class="row">
      <div class="col-md-12 mt-4 p-4">
        <p>
          En este espacio podras descargar con documento, el certificado de los cursos que has echo ingresa tu documento debajo y veras una tabla con los curos que has realizado y tendras a la derecha un boton de descarga.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 mt-3">
        
        <form action="{{route('searchFile')}}" method="POST">
          @csrf

          <div class="col-md-3 mx-auto lv_search_box" >
            <select name="" id="">
              <option value="">Cedula</option>
            </select>
          </div>

          <div class="col-md-3 mx-auto lv_search_box" >
            <input type="text" name="dni" placeholder="Numero de documento">
            <button><i class="fa fa-search"></i></button>
          </div>
          
        </form>

      </div>
    </div>

     <div class="inner-page-main-wrapper float_left">
        <div class="container">
            <div class="row">

              @if (isset($student))
                <div class="col-md-12 text-center ">
                  <h2>{{$student->name}}</h2>
                </div>

                <div class="col-md-12 mt-4">

                    <table class="table table-info table-bordered border-primarytable-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Curso</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($student->certificates as $file)
                            <tr>
                              <th scope="row">1</th>
                              <td>{{$file->course->name}}</td>
                              <td>
                                {{-- <a href="{{ Request::root() . $file->path}} " target="_blanck"  class="btn btn-info"><i class="fa fa-eye" style="margin-right: 4px;"></i>Descargar</a> --}}
                                <a href="{{route('generate', $file)}}" target="_blanck"  class="btn btn-info"><i class="fa fa-eye" style="margin-right: 4px;"></i>Descargar</a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
              @endif

            </div>
        </div>
    </div>

    
@endsection
