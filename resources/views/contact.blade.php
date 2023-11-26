@extends('layouts.landing')

@section('content')


    <!-- banner section start start-->
    <div class="index1-listing-slider-wrapper float_left" style="background-image: url({{asset('assets/images/banners/services.jpg')}}) !important;">
        <div class="container">
           <div class="slider-text text-center">
              <h4>Contact Us</h4>
              <ul>
                 <li>
                    <a href="javascript:;">Home</a>
                 </li>
                 <li>/ Contact Us</li>
              </ul>
           </div>
        </div>
     </div>
     <!-- banner section start end-->

     <div class="inner-page-main-wrapper float_left">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="contact-main-wrapper float_left">

                    <div class="row">
                       
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="contact-box float_left">
                             <div class="contact-icon">
                                <a href="javascript:;"> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> </a>
                             </div>
                             <h4>Dirección</h4>
                             <p>Simon Bolivar</p>
                             <p>Carrera 19 # 11 05 Av  </p>
                          </div>
                       </div>

                       <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="contact-box float_left">
                             <div class="contact-icon">
                                <a href="javascript:;"> <span><i class="fa fa-phone" aria-hidden="true"></i></span> </a>
                             </div>
                             <h4>Telefonos</h4>
                             <p>+57 (305) 266 05-25</p>
                             <p>+57 (316) 238 15-47</p>
                          </div>
                       </div>

                       <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="contact-box float_left">
                             <div class="contact-icon">
                                <a href="javascript:;"> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> </a>
                             </div>
                             <h4>Email</h4>
                             <p>rmbconsultoresasociados@gmail.com</p>
                          </div>
                       </div>


                    </div>

                 </div>
                 <!--  -->
                 <div class="locate-main-wrapper float_left">
                    <div class="row">

                       <div class="col-lg-6 col-md-6 col-12">
                          <iframe width="100" height="500" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                       </div>

                       <div class="col-lg-6 col-md-6 col-12">
                          <div class="leave-form float_left">

                            <div class="row">
                                <h4>RMB CONSULTORES ASOCIADOS</h4>
                                <p>
                                    Es una firma conformada por contadores públicos especializados, con el propósito de prestar sus servicios en el campo contable, administrativo, Revisoría Fiscal, Control y Auditoria en sus diferentes modalidades.
                                </p>
                            </div>

                             {{-- <h4>Leave A Message</h4>

                             <form>
                                <div class="form-group row">
                                   <div class="col-md-12 col-12">
                                      <input type="text" class="form-control require" name="first_name" required="" placeholder="Full Name">
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <div class="col-md-12 col-12">
                                      <input type="email" class="form-control require" name="email" required="" data-valid="email" data-error="Email should be valid." placeholder="Email Address">
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <div class="col-md-12 col-12">
                                      <input type="number" class="form-control require" name="contact_no" placeholder="Mobile no.">
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <div class="col-md-12 col-12">
                                      <input type="text" class="form-control require" name="message" placeholder="Message">
                                   </div>
                                </div>
                                <button class="submitForm custom-btn"> <span>Send Now</span> </button>
                             </form> --}}

                          </div>
                       </div>
                       
                    </div>
                 </div>
              </div>
             
           </div>
        </div>
     </div>


@endsection