@extends('layouts.landing')


@section('content')


    <!-- banner section start start-->
    <div class="index1-listing-slider-wrapper float_left" style="background-image: url({{asset('assets/images/banners/services.jpg')}}) !important;">
        <div class="container">
           <div class="slider-text text-center">
              <h4>Nuestros servicios</h4>
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

     <div class="inner-page-main-wrapper float_left">
        <div class="container">
            <div class="row">

                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="develop_main_wrapper">
                        <div class="develop-cont">
                        <h3>
                            Android & IOS Developer
                            <a href="jobs-details.html"><small>Softtech Pvt Ltd &nbsp; <i class="fas fa-check-square"></i></small></a>
                        </h3>
                        <ul>
                            <li>
                                <span><i class="fa fa-suitcase" aria-hidden="true"></i></span>
                                Project Manager
                            </li>
                            <li>
                                <span><i class="fas fa-dollar-sign"></i></span>
                                Expensive
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                Brisbane
                            </li>
                            <li>
                                <span><i class="far fa-clock"></i></span>
                                8 months ago
                            </li>
                        </ul>
                        </div>
                        <div class="bid_button">
                        <!-- <button class="apply-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span>Apply Now</span></button> -->
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <span>Apply Now</span> </a>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="descript_main_wrapper">
                        <h4>RMB Consultores Asociados</h4>
                        <p>
                            Es una firma conformada por contadores públicos especializados, con el propósito de prestar sus servicios en el campo contable, administrativo, Revisoría Fiscal, Control y Auditoria en sus diferentes modalidades.
                            Es una empresa especialista en Revisoría Fiscal, administración tributaria, con amplia experiencia en administración contable, tributaria y financiera.
                            Nuestro servicio se enmarca en los principios de responsabilidad, cumplimiento, diligencia, transparencia, lealtad y honestidad. Somos un grupo de profesionales interdisciplinarios que presta servicios contables, financieros y tributarios para personas naturales y jurídicas.
                        </p>
                        
                        <h4>Nuestros Servicios</h4>
                        
                        <ul class="mt-4">


                            <li><span><i class="fas fa-check"></i></span> <p> ASESORÍA CONTABLE </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> ASESORÍA INTEGRAL EN IMPUESTOS </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> ASESORÍA FINANCIERAS </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> IMPLEMENTACIÓN Y ASESORÍAS EN NORMAS INTERNACIONALES DE INFORMACION </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> FINANCIERA </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> REVISORIA FISCAL </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> AUDITORÍA EXTERNA </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> AUDITORÍA DE GESTIÓN Y CALIDAD </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> GESTIÓN Y ADMINISTRACIÓN DE IMPUESTOS NACIONALES, DEPARTAMENTALES Y MUNICIPALES </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> CAPACITACIONES CONTABLES, FINANCIERAS & TRIBUTARIAS </p> </li>

                            <li><span><i class="fas fa-check"></i></span> <p> SISTEMATIZACIÓN ORGANIZACIONAL DE GESTIÓN CONTABLE, FINANCIERA Y FISCAL CON PROCESOS DE FACTURACIÓN POS Y FACTURACIÓN ELECTRÓNICA DIAGNÓSTICO DE SITUACIÓN FISCAL Y FINANCIERA. </p> </li>

                            <li><span><i class="fas fa-check"></i></span> <p> SOPORTE WORLD OFICCE PARTNER </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> CAPACITACIONES PRESENCIALES Y PERSONALIZADAS EN SOFTWARE CONTABLE WORLD OFICCE </p> </li>
                            <li><span><i class="fas fa-check"></i></span> <p> INSTLACIÓN Y CONFIGURACIÓN PERSONALIZADAS DE SOFTWARE CONTABLE WORLD OFICCE ASESORÍA JURÍDICAS  </p> </li>
                                
                        </ul>
                    
                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    
                    <div class="descript_main_wrapper pb-0">
                        <h4>Job Overview</h4>
                        <ul class="job-overview">
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Date Posted</p>
                                <span>May 3, 2022</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Location</p>
                                <span>New York</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Offered Salary:</p>
                                <span>$520 - $650 / month</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Expiration date</p>
                                <span>May 5, 2026</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Experience</p>
                                <span>2 Year</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Gender</p>
                                <span>Both</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Qualification</p>
                                <span>Bachelor Degree</span>
                            </div>
                        </li>
                        <li>
                            <div class="job-icon">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </div>
                            <div class="job-text">
                                <p>Career Level</p>
                                <span>Executive</span>
                            </div>
                        </li>

                        </ul>
                    </div>

                    <div class="inner-page-main-wrapper mt-0 mb-0 float_left">
                        <div class="side-bar-social blog-social float_left">
                            <ul>
                                <li>
                                    Follow:
                                </li>

                                <li>
                                    <a href="https://web.facebook.com/profile.php?id=61551742844411" target="_blanck"> 
                                        <span> 
                                            <svg viewBox="0 0 25 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="Page-1" stroke="none">
                                                    <g id="Social-Icons---Isolated" transform="translate(-176.000000, -55.000000)">
                                                    <path d="M200.78439,55.3395122 L200.78439,62.9141463 L196.28878,62.9258537 C192.764878,62.9258537 192.085854,64.6 192.085854,67.0468293 L192.085854,72.4673171 L200.48,72.4673171 L199.39122,80.9434146 L192.085854,80.9434146 L192.085854,103 L183.329951,103 L183.329951,80.9434146 L176,80.9434146 L176,72.4673171 L183.329951,72.4673171 L183.329951,66.2156098 C183.329951,58.9570732 187.754146,55 194.24,55 C197.331902,55 200,55.2341463 200.78439,55.3395122 Z" id="Facebook2"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span> 
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/rmbconsultoresasocidos/" target="_blank"> 
                                        <span>
                                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0"></path>
                                                <path d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0"></path>
                                                <path d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    rmbconsultoresasociadosgmail.com
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection


{{-- 
NUESTRA FIRMA
RMB Consultores Asociados Sas., es una firma conformada por contadores públicos especializados, con el propósito de prestar sus servicios en el campo contable, administrativo, Revisoría Fiscal, Control y Auditoria en sus diferentes modalidades.
Es una empresa especialista en Revisoría Fiscal, administración tributaria, con amplia experiencia en administración contable, tributaria y financiera.
Nuestro servicio se enmarca en los principios de responsabilidad, cumplimiento, diligencia, transparencia, lealtad y honestidad. Somos un grupo de profesionales interdisciplinarios que presta servicios contables, financieros y tributarios para personas naturales y jurídicas. --}}

{{-- 
Nuestros Servicios
ASESORÍA CONTABLE
ASESORÍA INTEGRAL EN IMPUESTOS
ASESORÍA FINANCIERAS
IMPLEMENTACIÓN Y ASESORÍAS EN NORMAS INTERNACIONALES DE INFORMACION
FINANCIERA
REVISORIA FISCAL
• AUDITORÍA EXTERNA
• AUDITORÍA DE GESTIÓN Y CALIDAD
• GESTIÓN Y ADMINISTRACIÓN DE IMPUESTOS NACIONALES, DEPARTAMENTALES Y • MUNICIPALES
CAPACITACIONES CONTABLES, FINANCIERAS & TRIBUTARIAS
SISTEMATIZACIÓN ORGANIZACIONAL DE GESTIÓN CONTABLE, FINANCIERA Y FISCAL CON PROCESOS DE FACTURACIÓN POS Y FACTURACIÓN ELECTRÓNICA DIAGNÓSTICO DE SITUACIÓN FISCAL Y FINANCIERA.
. SOPORTE WORLD OFICCE PARTNER
consultoría & asesorías empresariales
CAPACITACIONES PRESENCIALES Y PERSONALIZADAS EN SOFTWARE CONTABLE WORLD
OFICCE
INSTLACIÓN Y CONFIGURACIÓN PERSONALIZADAS DE SOFTWARE CONTABLE WORLD OFICCE • ASESORÍA JURÍDICAS --}}