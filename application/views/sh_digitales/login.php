<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Login </title>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/logos/logo_size.jpg" />
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  
  <link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet" />
</head>



<style type="text/css">
  .chargePage {
    display: none;
    position: fixed;
    z-index: 10000;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(255, 255, 255, .8) url('<?php echo base_url(); ?>assets/img/loading.svg') 50% 50% no-repeat
  }

  body.loading .chargePage {
    overflow: hidden;
    display: block
  }

  .box {
    margin-top: 50px;
    padding: 15px
  }
</style>
<script>
  const host_url = "<?php echo base_url(); ?>";
</script>

<body>
<div class="container px-4 py-5 mx-auto">
    
            <div class="card card1 mx-auto">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img style ="height:180px; width:210px" id="logo" src="<?php echo base_url(); ?>assets/img/pngegg2.png"> </div>
                        <h3 class="mb-5 text-center heading">SH-Digitales</h3>
                        <h6 class="msg-info text-center">Ingrese sus credenciales de acceso </h6>
                        <div class="form-group"> <label class="form-control-label text-muted">Usuario</label> <input type="text" id="rut" name="rut" placeholder="Ingrese rut " class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Contraseña</label> <input type="password" id="passwd" name="passwd" placeholder="Ingrese contraseña" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Acceder</button> </div>
                       
                    </div>
                </div>
           
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">¿Quieres ser parte del equipo?<button class="btn btn-white ml-2">Registrarse</button></p>
                </div>
            </div>
            
        
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
<script src="<?php echo base_url(); ?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/mail/contact_me.js"></script>

        <!-- Core theme JS-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

  <!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery.rut.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils_js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/login.js"></script>
</body>

</html>