<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="SH digitales - El poder de innovar" />
        <meta name="author" content="" />
        <title>SH digitales</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>/assets/css/styles.css" rel="stylesheet" />
    </head>

    <style>

     .conteiner-login {
        margin-top: 4em;
        margin-left: 20em;
        margin-right: 20em;
        background: white;
        border-radius: 25px;
        border: 2px solid blue;
        background-size: cover;
     }

     .conteiner-login .form-group .form-control {
        border: 1px solid blue;
    }
  </style>

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

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-info fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">SH-DIGITALES</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link " href="<?php echo base_url();?>login">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">El poder de innvovar</div>
                <div class="masthead-heading text-uppercase">SH-Digitales</div>
                <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="#services">Enterate de todo</a>
            </div>
        </header>