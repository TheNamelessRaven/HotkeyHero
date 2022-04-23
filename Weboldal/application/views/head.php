<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotkey Hero</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <?php if (isset($oldal) ) : ?>
    <script>
        
        
         src="Scripts.js";

    </script>
    <?php endif;?>
    

</head>
<body>

<video playsinline="/media/playsinline" autoplay="autoplay" muted="muted" loop="loop" id="bgvideo">
        <source src="media/background.mp4" type="video/mp4">
</video>
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <img src="/media/logo.png" class="img-circle"width="150" height="50">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
       
        <?php if($this->session->userdata('user')!==NULL):?>
           
            <li class="nav-item" id="download">
            <a class="nav-link" href="<?php base_url()?>download">Letöltés <span class="sr-only"></span></a>
            <li class="nav-item" id="ranglista">
            <a class="nav-link" href="<?php base_url()?>ranglista">Ranglista <span class="sr-only"></span></a>
            <li class="nav-item" id="profile">
            <a class="nav-link" href="<?php base_url()?>profile">Profil <span class="sr-only"></span></a>
            <li class="nav-item" id="logout">
            <a class="nav-link" href="<?php base_url()?>logout" onclick="logout()">Kijelentkezes <span class="sr-only"></span></a>
            
            <?php else:?>

            <li class="nav-item" id="belepes">
            <a class="nav-link" href="<?php base_url();?>belepes">Bejelentkezés <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" id="regisztracio">
            <a class="nav-link" href="<?php base_url();?>regisztracio">Regisztráció</a>
            </li>
            <li class="nav-item" id="informacio">
            <a class="nav-link" href="<?php base_url();?>information">Információk</a>
            <?php endif; ?>
            </li>
            </ul>
            </nav>
            </div> 
        <?php if($this->session->flashdata('success')!==NULL): ?> 
        <div class="container">
            <div class="alert alert-success">
        </div>
    </div>

    <?php endif; ?>
    
<!-- debub Sikertelen regisztráció
    <?php if($this->session->flashdata('success')!==NULL): ?> 
        <div class="container">
            <div class="alert alert-danger">
          <?php echo $this->session->flashdata('success',);?>
        </div>
    </div>
    <?php endif; ?>
    -->
    
