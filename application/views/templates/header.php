<html>
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter Tutorial</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/create.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/footer.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/corrossel.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/tabela.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url(). "js/header.js" ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light " style="background-color: rgba(0, 0, 0, 0.5)!important;height:11%;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " style="text-align:center!important;"id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto" style="margin-left: 20%;">
          <img src="<?php echo base_url('img/logo.png'); ?>" width="50" height="30"  class="d-inline-block align-top" alt="">
          <li class="nav-item">
            <a class="nav-link text-warning" href="http://localhost/guiapratico17/index.php">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning" id="tabela" href="/CodeIgniter-ponchaAdvisor/index.php/pages/view_tabela/?.<?php echo $email?>.">AS MELHORES <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="">AVALIAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="#">MAPA</a>
          </li>
          <li class="nav-item" style="border-style: solid;border-color: #ffc107!important;">
            <a class="nav-link text-warning" href="#"><?php echo $email?></a>
          </li>
        </ul>
        <span class="navbar-text"style="margin-right: 25%;">
          <div class="dropdown">
            <?php if ($email=="") {
              ?>
              <button class="btn btn-secondary dropdown-toggle text-warning" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                LOGIN
              </button><?php
            }else{
              ?>
                <!-- <button class="btn btn-secondary text-warning" type="button" id="logout"  aria-haspopup="true" aria-expanded="false" > -->
                <input class="btn btn-secondary text-warning" id="logout" type="button" value="LOGOUT" onclick="window.location.href='http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/logout'" />
                </button>
              <?php
            } ?>
            <div class="dropdown-menu">
              <form class="px-4 py-3" method="post" action="/CodeIgniter-ponchaAdvisor/index.php/login/verifica_login">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="user" value="">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password" value="">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck" name="lembrar" checked>
                  <label class="form-check-label" for="dropdownCheck">
                    Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item dropdown-toggle" data-toggle="dropdown">If you dont have account clike here!</a>
              <div class="dropdown-menu">
                <form class="px-4 py-3" method="post" action="/CodeIgniter-ponchaAdvisor/index.php/login/registo">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="telmo ruben" name="name" >
                </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email" >
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1">User name</label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="user_name" name="user" >
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Phone</label>
                    <input type="text" class="form-control" id="exampleDropdownFormPassword1" placeholder="920000000" name="phone">
                  </div>

                  <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
              <a class="dropdown-item" href="#">Forgot password?</a>
            </div>
          </div>
        </span>
      </div>
    </nav>
