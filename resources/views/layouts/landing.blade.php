<!DOCTYPE html>
<!-- 
   Template Name: Tabula HTML Template
   Version: 1.0.0
   Author: Webstrot 
   
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
      <!--[if !IE]><!-->
      <html lang="zxx" dir="ltr">
         <!--[endif]-->
         <head>
            <meta charset="utf-8" />
            <title>Tabula</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <!--Template style -->
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fonts.css')}}" />
             <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/normalize.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper.min.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />
            <!--favicon-->
            <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
         </head>


         <body>


            <div id="preloader">
               <div id="status">
                  <img src="{{asset('assets/images/preloader.svg')}}" id="preloader_image" alt="loader">
               </div>
            </div>

            <!-- top to return -->
            <a href="javascript:;" id="return-to-top" class=""> <i class="fas fa-angle-double-up"></i></a>
            <!-- header start -->

            <div class="main-header-wrapper1 index3-header float_left">
               <div class="sb-main-header1">
                  
                  <div class="menu-items-wrapper menu-item-wrapper3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                     <div class="container custom-container">
                        <div class="row">
                           <div class="col-lg-2 col-md-6">
                              <div class="index1-logo">
                                 <a href="index.html">
                                 <img src="{{asset('assets/images/index3/blue-logo.png')}}" alt="logo">
                                 </a>
                              </div>
                           </div>
                           
                           <div class="col-lg-10 col-md-6 custom-header">

                              <nav class="navbar navbar-expand-lg">
                                 <ul class="navbar-nav">
                                    
                                    <li class="nav-item menu-click5 ps-rel">
                                       <a class="nav-link" href="/">Inicio </a>
                                    </li>

                                    <li class="nav-item menu-click5 ps-rel">
                                       <a class="nav-link" href="{{route('services')}}">Servicios </a>
                                    </li>

                                    <li class="nav-item menu-click5 ps-rel">
                                       <a class="nav-link" href="{{route('contact')}}">Contacto </a>
                                    </li>

                                 </ul>
                              </nav>

                              {{-- <ul class="d-xl-flex d-lg-flex d-md-none d-sm-none d-none social-media-icons">

                                 <li>
                                    <div class="search_bar hidden-xs">
                                       <div class="lv_search_bar" id="search_button">
                                          <a href="javascript:;">
                                             <span>
                                                <svg version="1.1" id="Capa_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                   <g>
                                                      <g>
                                                         <path d="M225.474,0C101.151,0,0,101.151,0,225.474c0,124.33,101.151,225.474,225.474,225.474
                                                            c124.33,0,225.474-101.144,225.474-225.474C450.948,101.151,349.804,0,225.474,0z M225.474,409.323
                                                            c-101.373,0-183.848-82.475-183.848-183.848S124.101,41.626,225.474,41.626s183.848,82.475,183.848,183.848
                                                            S326.847,409.323,225.474,409.323z"></path>
                                                      </g>
                                                   </g>
                                                   <g>
                                                      <g>
                                                         <path d="M505.902,476.472L386.574,357.144c-8.131-8.131-21.299-8.131-29.43,0c-8.131,8.124-8.131,21.306,0,29.43l119.328,119.328
                                                            c4.065,4.065,9.387,6.098,14.715,6.098c5.321,0,10.649-2.033,14.715-6.098C514.033,497.778,514.033,484.596,505.902,476.472z"></path>
                                                      </g>
                                                   </g>
                                                </svg>
                                             </span>
                                          </a>
                                       </div>
                                       <div id="search_open" class="lv_search_box" style="display: none;">
                                          <input type="text" placeholder="Search here">
                                          <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                       </div>
                                    </div>
                                 </li>

                                 <li class="post-drop">
                                    <a class="post-btn" href="javascript:;">
                                       <span>
                                          <!-- <i class="fas fa-plus-circle"></i>   --> Post Now &nbsp; <i class="fas fa-chevron-down"></i>
                                       </span>
                                    </a>
                                    <div class="post-page-wrapper">
                                       <a href="post-jobs.html">Post a Job</a>
                                       <a href="post-project.html">Post a Project</a>
                                    </div>
                                 </li>

                              </ul> --}}

                           </div>

                        </div>
                     </div>
                  </div>

                  <!-- responsive menu bar start -->
                  <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
                     <div class="container">
                        <div class="row">
                           <div class=" col-md-4 col-sm-4 col-4">
                              <div class="mobile-logo">
                                 <a href="">
                                 <img src="{{asset('assets/images/index1-logo.png')}}" alt="logo">
                                 </a>
                              </div>
                           </div>
                           <div class="col-md-8 col-sm-8 col-8">
                              <div class="d-flex  justify-content-end">
                                 <div class="social-media-icons">
                                    <ul>
                                       <li class="login-btn">
                                          <a href="javascript:;"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                                          <div class="user-text">
                                             <a href="login.html">
                                                <span>
                                                   <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                      <path d="M10.95 15.84h-11V.17h11v3.88h-1V1.17h-9v13.67h9v-2.83h1v3.83z"></path>
                                                      <path d="M5 8h6v1H5zM11 5.96l4.4 2.54-4.4 2.54V5.96z"></path>
                                                   </svg>
                                                </span>
                                                Login
                                             </a>
                                             <a href="sign-up.html">
                                                <span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32" xml:space="preserve">
                                                      <path d="M16 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm0-12c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zM23.942 32H8.058A4.062 4.062 0 0 1 4 27.942c0-6.616 5.383-12 12-12s12 5.384 12 12A4.062 4.062 0 0 1 23.942 32zM16 17.942c-5.514 0-10 4.486-10 10A2.06 2.06 0 0 0 8.058 30h15.884A2.06 2.06 0 0 0 26 27.942c0-5.514-4.486-10-10-10z"></path>
                                                   </svg>
                                                </span>
                                                Sing Up
                                             </a>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="search_bar hidden-xs">
                                             <div class="lv_search_bar" id="search_button1">
                                                <a href="javascript:;">
                                                   <span>
                                                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                         <g>
                                                            <g>
                                                               <path d="M225.474,0C101.151,0,0,101.151,0,225.474c0,124.33,101.151,225.474,225.474,225.474
                                                                  c124.33,0,225.474-101.144,225.474-225.474C450.948,101.151,349.804,0,225.474,0z M225.474,409.323
                                                                  c-101.373,0-183.848-82.475-183.848-183.848S124.101,41.626,225.474,41.626s183.848,82.475,183.848,183.848
                                                                  S326.847,409.323,225.474,409.323z"></path>
                                                            </g>
                                                         </g>
                                                         <g>
                                                            <g>
                                                               <path d="M505.902,476.472L386.574,357.144c-8.131-8.131-21.299-8.131-29.43,0c-8.131,8.124-8.131,21.306,0,29.43l119.328,119.328
                                                                  c4.065,4.065,9.387,6.098,14.715,6.098c5.321,0,10.649-2.033,14.715-6.098C514.033,497.778,514.033,484.596,505.902,476.472z"></path>
                                                            </g>
                                                         </g>
                                                      </svg>
                                                   </span>
                                                </a>
                                             </div>
                                             <div id="search_open1" class="lv_search_box" style="display: none;">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="d-flex">
                                    <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                                       <span class="line"></span>
                                       <span class="line"></span>
                                       <span class="line"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div id="sidebar">
                     <div class="sidebar_logo">
                        <a href="index.html"><img src="{{asset('assets/images/index1-logo.png')}}" alt="logo"></a>
                     </div>
                     <div id="toggle_close">&times;</div>
                     <div id='cssmenu'>
                        <ul class="float_left">
                            
                            
                            <li class="has-sub">
                                <a href="">Home</a>
                                <ul>
                                    <li><a href="index.html">Index 01</a></li>
                                    
                                    <li><a href="index2.html"> Index 02</a></li>

                                    <li><a href="index3.html"> Index 03</a></li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="">Job</a>
                                <ul>
                                    <li><a href="jobs-listing-right-sidebar.html">Job Listing Right Sidebar</a></li>
                                    <li><a href="jobs-listing-left-sidebar.html"> Job Listing Left Sidebar</a></li>
                                    <li><a href="jobs-listing-3-column.html"> Job Listing 3 Colum</a></li>
                                    <li><a href="jobs-listing-4-column.html">  Job Listing 4 Colum</a></li>
                                    <li><a href="jobs-details.html">  Job Details</a></li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="javascript:;">Service</a>
                                <ul>
                                    <li class="has-sub">
                                        <a class="sub-icon">Freelancer</a>
                                        <ul class="m-sub-dropdown">
                                        <li><a href="freelancer-listing-right-sidebar.html">Freelancer Listing Right Sidebar</a></li>
                                        <li><a href="freelancer-listing-left-sidebar.html">Freelancer Listing Left Sidebar</a></li>
                                        <li><a href="freelancer-listing-3-column.html">Freelancer 3 Colum</a></li>
                                        <li><a href="freelancer-listing-4-column.html">Freelancer 4 Colum</a></li>
                                        <li><a href="freelacing-details.html">Freelancer Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="sub-icon">Employers</a>
                                        <ul class="m-sub-dropdown">
                                        <li><a href="company-listing-right-sidebar.html">Company Listing Right Sidebar</a></li>
                                        <li><a href="company-listing-left-sidebar.html">Company Listing Left Sidebar</a></li>
                                        <li><a href="company-listing-3-column.html">Company Listing 3 Colum</a></li>
                                        <li><a href="company-listing-4-column.html">Company Listing 4 Colum</a></li>
                                        <li><a href="company-details.html">Company Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="sub-icon">Project</a>
                                        <ul class="m-sub-dropdown">
                                        <li><a href="project-listing-right-sidebar.html">Project Listing Right Sidebar</a></li>
                                        <li><a href="project-listing-left-sidebar.html">Project Listing Left Sidebar</a></li>
                                        <li><a href="project-listing-3-column.html">Project Listing 3 Colum</a></li>
                                        <li><a href="project-listing-4-column.html">Project Listing 4 Colum</a></li>
                                        <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="post-jobs.html">Post A Job</a></li>
                                    <li><a href="post-project.html">Post A Project</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="support.html">Get Support</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    
                                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-service.html">Terms Of Service</a></li>
                                </ul>
                            </li>

                            <li class="has-sub">
                                <a href="javascript:;">Blog</a>
                                <ul>
                                    <li class="has-sub">
                                        <a class="sub-icon">Blog Category</a>
                                        <ul class="m-sub-dropdown">
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="sub-icon">Blog Single</a>
                                        <ul class="m-sub-dropdown">
                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-without-sidebar.html">Blog Single Without Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="contact-us.html">Contact Us</a></li>


                        </ul>
                     </div>
                  </div>
                  <!-- responsive menu End -->


               </div>
            </div>
            <!-- header end -->

            @yield('content')

            <!-- footer section start -->
            <div class="footer-main-wrapper index3-footer-wrapper ">
               <div class="container">
                  <div class="row">

                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="sb-footer-section">
                           <div class="footer-logo">
                              <a href="index.html"><img src="images/index2/logo.png" alt=""></a>
                           </div>
                           <p>Trabajamos para ti.</p>
                           <ul>
                              <li><a href="javascript:;"><i class="fas fa-map-marker-alt"></i>
                                 Carrera 19 # 11 05 Av Simon Bolivar</a>
                              </li>
                              <li><a href="javascript:;"><i class="fas fa-envelope"></i>
                                 rmbconsultoresasociados@gmail.com</a>
                              </li>
                              <li>
                                 <h4>+57 (305) 266 05-25 </h4>
                              </li>
                           </ul>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="links">
                           <h4>Menu</h4>
                           <ul>
                              <li><a href="freelancer-listing-right-sidebar.html"><i class="fas fa-angle-right"></i>Servicios</a></li>
                              <li><a href="company-listing-right-sidebar.html"><i class="fas fa-angle-right"></i>Cursos</a></li>
                              <li><a href="project-listing-right-sidebar.html"><i class="fas fa-angle-right"></i>Nosotros</a></li>
                              <li><a href="post-jobs.html"><i class="fas fa-angle-right"></i>Contactanos</a></li>
                              @auth
                                 <li><a href="{{ url('/admin') }}"><i class="fas fa-angle-right"></i>Panel</a></li>
                                 @else
                                 <li><a href="{{ route('login') }}"><i class="fas fa-angle-right"></i>Log in</a></li>

                                 {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                 @endif --}}
                              @endauth
                           </ul>
                        </div>
                     </div>

                     {{-- <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="links">
                           <h4>Our Company</h4>
                           <ul>
                              <li><a href="javascript:;"><i class="fas fa-angle-right"></i>About Us</a></li>
                              <li><a href="blog-right-sidebar.html"><i class="fas fa-angle-right"></i>Our Blog</a></li>
                              <li><a href="javascript:;"><i class="fas fa-angle-right"></i>Careers</a></li>
                              <li><a href="terms-service.html"><i class="fas fa-angle-right"></i>Terms of Service</a></li>
                              <li><a href="privacy_policy.html"><i class="fas fa-angle-right"></i>Privacy Policy</a></li>
                              <li><a href="support.html"><i class="fas fa-angle-right"></i>Contact & Support</a></li>
                           </ul>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="links">
                           <h4>News Letter</h4>
                           <p>Wants to get latest updates! Sign up a for free, get started with store.</p>
                           <div class="input-box ps-rel">
                              <input type="text" placeholder="Your mail Address">
                              <button>Subscribe</button>
                           </div>
                           <div class="app-btn">
                              <a href="javascript:;">
                              <img src="images/index2/app-btn.png" alt="app">
                              </a>
                              <a href="javascript:;">
                              <img src="images/index2/app-btn1.png" alt="app">
                              </a>
                           </div>
                        </div>
                     </div> --}}

                  </div>
               </div>
               <div class="bottom-footer float_left">
                  <div class="container">
                     <div class="row">
                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                           <p>© Copyright 2020. All Rights Reserved by Webstrot</p>
                        </div> --}}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                           <ul>
                              
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

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer section end -->


            <!-- Side Panel -->
            <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
            <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
             <script src="{{asset('assets/js/swiper.min.js')}}"></script>
             <script src="{{asset('assets/js/swiper.js')}}"></script>
            <script src="{{asset('assets/js/wow.js')}}"></script>
            
            <script src="{{asset('assets/js/custom.js')}}"></script>
            <!-- custom js-->
            <!-- heart icon -->
            <script>
               $('.heart a').click( function(){
                if ( $(this).hasClass('current') ) {
                    $(this).removeClass('current');
                } else {
                    $('.top_icon span.current').removeClass('current');
                    $(this).addClass('current');    
                }
               });
            </script>
            <script>
               $('#search_button').on("click", function(e) {
                $('#search_open').slideToggle();
                e.stopPropagation(); 
               });
               
               $(document).on("click", function(e){
                if(!(e.target.closest('#search_open'))){  
                   $("#search_open").slideUp();        
                }
               });
            </script>
            <script>
               $('#search_button1').on("click", function(e) {
                $('#search_open1').slideToggle();
                e.stopPropagation(); 
               });
               
               $(document).on("click", function(e){
                if(!(e.target.closest('#search_open1'))){  
                   $("#search_open1").slideUp();        
                }
               });
            </script>
         </body>


      </html>