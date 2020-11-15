
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Entérate de todo </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-success"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Implementaciones para la apertura de tu emprendimiento al comercio electrónico. </p>
                    </div>
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-info"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Diseño a medida </h4>
                        <p class="text-muted"> Realizamos implementaciones seguras a medida de tus necesidades, procesos o modelo de negocio.</p>
                    </div>
                </div>
            </div>
        </section>
       
        
        <!-- Team-->
       
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">nuestro equipo</h2>
                    <h3 class="section-subheading text-muted">Somos un equipo de ingeniería especializados en asesoría de desarrollo web y soluciones informáticas. </h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/member1.jpg" alt="" />
                            <h4>Sebastián Cabello </h4>
                            <p class="text-muted">Ingeniero Civil en Computación e Informática</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/member2.jpg" alt="" />
                            <h4>Hugo Carvajal </h4>
                            <p class="text-muted">Ingeniero Civil en Computación e Informática</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
                </div>
            </div>
        </section>
        <div>
     
        <!-- Contact-->
        <style> section#contact{  background: linear-gradient(to bottom right, #003366 25%, #009999 100%);}</style>
        
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contáctanos</h2>
                    <h3 class="section-subheading text-white">Tambien por nuestras redes sociales</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-strench mb-5">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

        <!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
<script src="<?php echo base_url(); ?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/mail/contact_me.js"></script>

        <!-- Core theme JS-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery.rut.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils_js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/registerPeticion.js"></script>
<script src="<?php echo base_url(); ?>assets/js/registerUser.js"></script>