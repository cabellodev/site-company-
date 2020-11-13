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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                        <div class="form-group"> <label class="form-control-label text-muted">Usuario</label> <input type="text" id="rut" name="rut" placeholder="Ingrese rut " class="form-control"></div>
                        <div class="form-group"> <label class="form-control-label text-muted">Contraseña</label> <input type="password" id="passwd" name="passwd" placeholder="Ingrese contraseña" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Acceder</button> </div>
                       
                    </div>
                </div>
           
                <div class="bottom text-center mb-5">
                   <button class="btn btn-white ml-2" type="button" data-toggle="modal" data-target="#agregarUser">Suscribir</button>
                </div>
            </div>
            
</div>

<div class="modal fade bd-example-modal-lg" id="agregarUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: linear-gradient(to bottom right, #003366 25%, #009999 100%);">
        <h5 class="modal-title text-white" id="titulo">Suscripción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm">
            <p id="UserModalInfo"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Rut</label>
              <input type="text" class="form-control" id="registerRut" name="rut">
              <div class="invalid-feedback rut" style="display: none;  color:red">
                Ingrese un Rut porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Nombre completo</label>
              <input type="text" class="form-control" name="name" id="name">
              <div class="invalid-feedback name" style="display: none;  color:red">
                Ingrese su Nombre completo porfavor.
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Email</label>
              <input type="text" class="form-control" name="email" id="email">
              <div class="invalid-feedback email" style="display: none;  color:red">
                Ingrese un Email porfavor.
              </div>
            </div>
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Rango</label>
              <select class="custom-select d-block w-100" id="rango" required="">
                <option value="0">Opciones...</option>
                <option value="Administrador">Administrador</option>
                <option value="Invitado">Invitado</option>
                
              </select>
              <div class="invalid-feedback rango" style="display: none;  color:red">
                Seleccione un rango porfavor.
              </div>
            </div>
          </div>
          <div class="row" id="passdiv">
            <div class="col-md-12 col-lg-6 control-label">
              <label for="actividad">Contraseña</label>
              <input type="password" class="form-control" name="passwd" id="registerPass">
              <div class="invalid-feedback passwd" style="display: none;  color:red">
                Ingrese una Contraseña porfavor.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="addUser" class="btn btn-primary">Guardar</button>
      </div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery.rut.js"></script>
<script src="<?php echo base_url(); ?>assets/js/utils_js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/login.js"></script>
<script src="<?php echo base_url(); ?>assets/js/registerUser.js"></script>
</body>

</html>

