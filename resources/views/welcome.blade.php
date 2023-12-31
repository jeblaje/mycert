@extends('layouts.landing')

@section('content')
    <!-- banner section start start-->
    <div class="index3-slider-wrapper ps-rel" >
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12" >
                    <div class="slider-caption">
                        <h2>Su mejor opción en consultorías & asesorías empresariales</p>
                    </div>

                    {{-- <div class="slider-form float_left">
                        <form>

                        <div class="form-group mb-4 row">
                            <div class="col-md-12 col-12 field-icon">
                                <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 col-12 field-icon">
                                <div class="select-field">
                                    <select>
                                    <option selected="selected" value="">For Location</option>
                                    <option value="5-6">Bhopal</option>
                                    <option value="7-9">Delhi</option>
                                    <option value="10-13">Maharashtra </option>
                                    <option value="10-13">Chennai </option>
                                    </select>
                                </div>
                                <span><i class="fa fa-dot-circle-o" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        </form>
                        <button class="search-btn"> <span><i class="fa fa-search" aria-hidden="true"></i> &nbsp; Search Job</span> </button>
                        
                    </div> --}}
                </div>

                {{-- <div class="col-lg-6 col-12" >
                    <div class="index2-slider-img d-lg-block d-none ">
                        <img src="{{asset('assets/images/index3/slider-img.png')}}" alt="img">
                    </div>
                </div> --}}

            </div>
        </div>
        
        {{-- <div class="project-pipe-wrapper float_left">
        <div class="container">
            <div class="pro-pipe-main">
                <h5>Servicios: <span>2,500</span></h5>
                <h5>Estudiantes: <span>1,200</span></h5>
                <h5>Clientes: <span>1,950</span></h5>
            </div>
        </div>
        </div> --}}

    </div>
    <!-- banner section start end-->


    <div class="how-it-work-wrapper float_left ptb-100">
        <div class="container">
        <div class="home1-section-heading1">
            <h4>Nuestros Objetivos</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="working-box-wrapper float_left">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
                            </svg></span>
                    <h4>Mision</h4>
                    <p>
                    RMB CONSULTORES ASOCIADOS S.A.S, es una empresa privada que presta servicios profesionales en las áreas contables, jurídicas y organizacionales, conformado por un equipo humano multidisciplinario con altos estándares de calidad, utilizando tecnología de alto nivel, brindando soluciones integrales, teniendo como objetivo satisfacer todas las necesidades y expectativas de nuestros clientes a nivel nacional.
                    </p>
                <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="working-box-wrapper float_left">
                    <span><svg version="1.1" id="Capa_21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                <g>
                                <path d="M52.179,39.929l-5.596,8.04l-3.949-3.241c-0.426-0.351-1.057-0.287-1.407,0.138c-0.351,0.427-0.289,1.058,0.139,1.407
                                    l4.786,3.929c0.18,0.148,0.404,0.228,0.634,0.228c0.045,0,0.091-0.003,0.137-0.01c0.276-0.038,0.524-0.19,0.684-0.419l6.214-8.929
                                    c0.315-0.453,0.204-1.076-0.25-1.392C53.117,39.36,52.495,39.475,52.179,39.929z"></path>
                                <path d="M47,32.5c-0.728,0-1.438,0.075-2.133,0.191c1.168-1.693,2.115-3.561,2.806-5.573C49.084,26.47,50,25.075,50,23.5v-4
                                    c0-0.963-0.36-1.896-1-2.625v-5.319c0.056-0.55,0.276-3.824-2.092-6.525C44.854,2.688,41.521,1.5,37,1.5s-7.854,1.188-9.908,3.53
                                    c-1.435,1.637-1.918,3.481-2.064,4.805C23.314,8.949,21.294,8.5,19,8.5c-10.389,0-10.994,8.855-11,9v4.579
                                    c-0.648,0.706-1,1.521-1,2.33v3.454c0,1.079,0.483,2.085,1.311,2.765c0.825,3.11,2.854,5.46,3.644,6.285v2.743
                                    c0,0.787-0.428,1.509-1.171,1.915l-6.653,4.173C1.583,47.134,0,49.801,0,52.703V56.5h14h2h24.104c2.002,1.26,4.362,2,6.896,2
                                    c7.168,0,13-5.832,13-13S54.168,32.5,47,32.5z M14,52.262V54.5H2v-1.797c0-2.17,1.184-4.164,3.141-5.233l6.652-4.173
                                    c1.333-0.727,2.161-2.121,2.161-3.641v-3.591l-0.318-0.297c-0.026-0.024-2.683-2.534-3.468-5.955l-0.091-0.396l-0.342-0.22
                                    C9.275,28.899,9,28.4,9,27.863v-3.454c0-0.36,0.245-0.788,0.671-1.174L10,22.938l-0.002-5.38C10.016,17.271,10.537,10.5,19,10.5
                                    c2.393,0,4.408,0.553,6,1.644v4.731c-0.64,0.729-1,1.662-1,2.625v4c0,0.304,0.035,0.603,0.101,0.893
                                    c0.027,0.116,0.081,0.222,0.118,0.334c0.055,0.168,0.099,0.341,0.176,0.5c0.001,0.002,0.002,0.003,0.003,0.005
                                    c0.256,0.528,0.629,1,1.099,1.377c0.005,0.019,0.011,0.036,0.016,0.054c0.06,0.229,0.123,0.457,0.191,0.68l0.081,0.261
                                    c0.014,0.046,0.031,0.093,0.046,0.139c0.035,0.108,0.069,0.216,0.105,0.322c0.06,0.175,0.123,0.355,0.196,0.553
                                    c0.031,0.083,0.065,0.156,0.097,0.237c0.082,0.209,0.164,0.411,0.25,0.611c0.021,0.048,0.039,0.1,0.06,0.147l0.056,0.126
                                    c0.026,0.058,0.053,0.11,0.079,0.167c0.098,0.214,0.194,0.421,0.294,0.622c0.016,0.032,0.031,0.067,0.047,0.099
                                    c0.063,0.125,0.126,0.243,0.189,0.363c0.108,0.206,0.214,0.4,0.32,0.588c0.052,0.092,0.103,0.182,0.154,0.269
                                    c0.144,0.246,0.281,0.472,0.414,0.682c0.029,0.045,0.057,0.092,0.085,0.135c0.242,0.375,0.452,0.679,0.626,0.916
                                    c0.046,0.063,0.086,0.117,0.125,0.17c0.022,0.029,0.052,0.071,0.071,0.097v3.309c0,0.968-0.528,1.856-1.377,2.32l-2.646,1.443
                                    l-0.649,0.354l-5.626,3.069C15.801,45.924,14,48.958,14,52.262z M16,54.5v-2.238c0-2.571,1.402-4.934,3.659-6.164l8.921-4.866
                                    C30.073,40.417,31,38.854,31,37.155v-4.018v-0.001l-0.194-0.232l-0.038-0.045c-0.002-0.003-0.064-0.078-0.165-0.21
                                    c-0.006-0.008-0.012-0.016-0.019-0.024c-0.053-0.069-0.115-0.153-0.186-0.251c-0.001-0.002-0.002-0.003-0.003-0.005
                                    c-0.149-0.207-0.336-0.476-0.544-0.8c-0.005-0.007-0.009-0.015-0.014-0.022c-0.098-0.154-0.202-0.32-0.308-0.497
                                    c-0.008-0.013-0.016-0.026-0.024-0.04c-0.226-0.379-0.466-0.808-0.705-1.283l-0.001-0.002c-0.127-0.254-0.254-0.523-0.378-0.802
                                    l0,0c-0.017-0.039-0.035-0.077-0.052-0.116h0c-0.055-0.125-0.11-0.256-0.166-0.391c-0.02-0.049-0.04-0.1-0.06-0.15
                                    c-0.052-0.131-0.105-0.263-0.161-0.414c-0.102-0.272-0.198-0.556-0.29-0.849l-0.055-0.178c-0.006-0.02-0.013-0.04-0.019-0.061
                                    c-0.094-0.316-0.184-0.639-0.26-0.971l-0.091-0.396l-0.341-0.22C26.346,24.803,26,24.176,26,23.5v-4
                                    c0-0.561,0.238-1.084,0.67-1.475L27,17.728V11.5v-0.354l-0.027-0.021c-0.034-0.722,0.009-2.935,1.623-4.776
                                    C30.253,4.458,33.081,3.5,37,3.5c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L47,17.728l0.33,0.298
                                    C47.762,18.416,48,18.939,48,19.5v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495
                                    c-0.669,2.081-1.622,4.003-2.834,5.713c-0.297,0.421-0.586,0.794-0.837,1.079L42,33.123v0.38c-0.252,0.105-0.494,0.229-0.737,0.349
                                    c-0.062,0.031-0.125,0.059-0.186,0.09c-0.219,0.113-0.432,0.233-0.643,0.357c-0.111,0.065-0.22,0.132-0.328,0.199
                                    c-0.192,0.121-0.383,0.243-0.568,0.374c-0.12,0.084-0.235,0.175-0.352,0.264c-0.289,0.218-0.568,0.448-0.837,0.689
                                    c-0.129,0.116-0.26,0.229-0.385,0.35c-0.143,0.139-0.28,0.284-0.416,0.429c-0.115,0.122-0.228,0.245-0.338,0.372
                                    c-0.132,0.152-0.263,0.305-0.388,0.462c-0.103,0.13-0.199,0.264-0.297,0.397c-0.208,0.284-0.404,0.576-0.59,0.877
                                    c-0.087,0.141-0.177,0.28-0.258,0.424c-0.101,0.178-0.192,0.361-0.284,0.544c-0.075,0.148-0.147,0.297-0.217,0.449
                                    c-0.083,0.182-0.164,0.364-0.238,0.55c-0.074,0.183-0.139,0.37-0.204,0.556c-0.076,0.217-0.149,0.435-0.213,0.658
                                    c-0.08,0.276-0.153,0.554-0.215,0.836c-0.031,0.143-0.056,0.288-0.082,0.433c-0.047,0.255-0.086,0.512-0.118,0.771
                                    c-0.016,0.129-0.032,0.258-0.044,0.389C34.024,44.712,34,45.104,34,45.5c0,0.435,0.023,0.867,0.066,1.294
                                    c0.016,0.162,0.048,0.319,0.07,0.479c0.036,0.263,0.068,0.526,0.12,0.785c0.035,0.175,0.085,0.345,0.127,0.518
                                    c0.058,0.239,0.112,0.479,0.184,0.714c0.049,0.159,0.11,0.313,0.165,0.47c0.084,0.243,0.167,0.487,0.266,0.724
                                    c0.055,0.133,0.12,0.26,0.18,0.39c0.115,0.254,0.232,0.507,0.363,0.753c0.058,0.107,0.123,0.21,0.184,0.316
                                    c0.148,0.259,0.298,0.515,0.464,0.763c0.061,0.091,0.128,0.177,0.191,0.267c0.176,0.25,0.356,0.498,0.551,0.736
                                    c0.072,0.088,0.15,0.17,0.224,0.256c0.155,0.18,0.303,0.364,0.468,0.536H16z M47,56.5c-2.258,0-4.359-0.686-6.107-1.858
                                    c-0.341-0.228-0.663-0.476-0.972-0.736c-0.108-0.092-0.21-0.19-0.314-0.286c-0.197-0.179-0.388-0.363-0.57-0.554
                                    c-0.117-0.123-0.23-0.248-0.341-0.375c-0.164-0.189-0.318-0.384-0.468-0.583c-0.096-0.127-0.195-0.25-0.286-0.381
                                    c-0.221-0.321-0.429-0.651-0.615-0.993c-0.043-0.08-0.077-0.164-0.118-0.245c-0.146-0.286-0.282-0.576-0.403-0.874
                                    c-0.052-0.13-0.097-0.263-0.145-0.395c-0.094-0.262-0.18-0.528-0.255-0.797c-0.038-0.138-0.075-0.277-0.108-0.417
                                    c-0.067-0.285-0.119-0.574-0.163-0.865c-0.019-0.125-0.043-0.248-0.057-0.374C36.031,46.348,36,45.926,36,45.5
                                    c0-0.339,0.021-0.674,0.051-1.005c0.011-0.118,0.027-0.235,0.042-0.352c0.026-0.21,0.058-0.417,0.095-0.624
                                    c0.026-0.139,0.052-0.278,0.083-0.416c0.04-0.18,0.088-0.356,0.137-0.532c0.041-0.146,0.077-0.294,0.124-0.439
                                    c0.086-0.267,0.183-0.53,0.289-0.788c0.072-0.175,0.154-0.345,0.235-0.515c0.053-0.113,0.105-0.225,0.162-0.336
                                    c0.087-0.17,0.18-0.337,0.276-0.502c0.06-0.103,0.122-0.204,0.185-0.304c0.103-0.165,0.207-0.33,0.319-0.489
                                    c0.057-0.081,0.119-0.158,0.178-0.238c0.234-0.315,0.484-0.617,0.75-0.905c0.061-0.066,0.119-0.135,0.182-0.2
                                    c0.137-0.141,0.281-0.276,0.426-0.41c0.083-0.077,0.167-0.155,0.253-0.23c0.15-0.131,0.304-0.258,0.461-0.381
                                    c0.08-0.062,0.162-0.122,0.243-0.182c0.174-0.128,0.349-0.256,0.532-0.374c0.013-0.008,0.026-0.016,0.039-0.024
                                    c0.685-0.44,1.426-0.808,2.214-1.092c0.066-0.024,0.131-0.05,0.198-0.073l0.295-0.104C44.791,34.671,45.876,34.5,47,34.5
                                    c6.065,0,11,4.935,11,11S53.065,56.5,47,56.5z"></path>
                                </g>
                            </svg></span>
                    <h4>Vision</h4>
                    <p>
                    RMB CONSULTORES ASOCIADOS S.A.S se proyecta como una empresa líder en brindar servicios profesionales en las áreas contables, jurídicas y organizacionales, respaldadas en la más alta confidencialidad y calidad técnica de nuestros profesionales, basados en principios y valores corporativos, logrando ser el apoyo idóneo de nuestros clientes en la toma de decisiones empresariales.
                    </p>
                <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
            </div>

        </div>
        </div>
    </div>


    <div class="explore-category-wrapper float_left">

        <div class="container">
            <div class="home1-section-heading1">
                <h4>Cursos</h4>
            </div>
        </div>

        <div class="category-main-slider-wrapper float_left">
            <div class="container-fluid">

                <div class="swiper-container slider-two">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        @foreach ($courses as $course)
                        
                            <div class="swiper-slide">
                                <span><i class="fa fa-code" aria-hidden="true"></i></span>
                                <h4>{{$course->name}}</h4>
                                <p>
                                    {{$course->description}}
                                </p>
                                {{-- <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>

                        @endforeach
                        {{-- 
                        <div class="swiper-slide">
                            <span><i class="fa fa-laptop" aria-hidden="true"></i></span>
                            <h4>Facturación y caja</h4>
                            <p>Curso rapido de facturación y cajaaprende con profesionales certificados por wolrd office, el proceso completo de facturación</p>
                            <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div> --}}

                        {{-- <div class="swiper-slide">
                            <span><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                            <h4>Accounting</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry unknown printer took a galley of type.</p>
                            <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>

                        <div class="swiper-slide">
                            <span><i class="fa fa-medkit" aria-hidden="true"></i></span>
                            <h4>Medical</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry unknown printer took a galley of type.</p>
                            <a href="javascript:;">Explore &nbsp; <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div> --}}

                    </div>
                    <!-- If we need pagination -->
                    
                </div>

                <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>

                <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

                <div class="swiper-pagination"></div>

            </div>
            
        </div>
        
    </div>




    <div class="explore-category-wrapper float_left ptb-100">
     
        <div class="container">
            <div class="home1-section-heading1">
                <h4>Grupo de trabajo</h4>
            </div>
        </div>

        <div class="category-main-slider-wrapper float_left">
            <div class="container-fluid">
                <div class="swiper-container slider-two">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="100" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/ccv.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/alcaldia.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/gobernacion.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/rues.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/contraloria.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/procuraduria.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/policia.png')}}" width="200" alt="img">
                            </div>
                        </div>

                        <div class="swiper-slide custom-card">
                            <div class="custom-card-header">
                                {{-- <span> <img src="{{asset('assets/images/patrocinadores/dian.png')}}" width="200" alt="img"> </span> --}}
                                <img src="{{asset('assets/images/patrocinadores/fiscalia.png')}}" width="200" alt="img">
                            </div>
                        </div>

                    </div>
                    <!-- If we need pagination -->
                    
                </div>
                <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                <div class="swiper-pagination"></div>
            </div>
            
        </div>
        
    </div>




    <div class="download-mobile-wrapper double-exp float_left">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="home1-section-heading1">
                    <h4>RMB Glow Up</h4>
                </div>
                <div class="mobile-text float_left">
                    <h4>Estamos trabajando para ti y subiendo el nivel a la experiencia con nosotros. Ahora podras:</h4>
                    <ul>
                    <li> > &nbsp; Descargar tu certificado desde <a href="{{route('certf')}}">aqui</a></li>
                    <li> > &nbsp; Ver nuestros servicios en un solo lugar</li>
                    <li> > &nbsp; Estar atento a los cursos viejos y nuevos que tenemos para ti</li>
                    <li> > &nbsp; Nuestra informacion de contacto a la mano</li>
                    </ul>
                </div>
                <div class="app-btn">
                    {{-- <a href="javascript:;"> <img src="{{asset('assets/images/index3/app-btn.png"')}}' alt="btn"> </a> --}}
                    {{-- <a href="javascript:;"> <img src="{{asset('assets/images/index3/app-btn1.png"')}}' alt="btn"> </a> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="mobile-img float_left">
                    {{-- <img class="img-fluid" src="{{asset('assets/images/index3/mobile.png')}}" alt="img"> --}}
                </div>
            </div>
        </div>
        </div>
    </div>



    {{-- <div class="started-pipe-wrapper float_left ptb-100">
        <div class="container">
        <div class="started-box">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="ready-text">
                    <h4>Ready To Get Started ?</h4>
                    <p>Create An Account And Refer Your Friend</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="see-job">
                    <a href="javascript:;"> <span>See All Jobs</span> </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> --}}

@endsection