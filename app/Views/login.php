<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="icon" href="<?= base_url('assets2/img/LOGO MC.png') ?>" type="image/x-icon"/>

    <link rel="stylesheet" href="<?= base_url('assets3/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?= base_url('assets3/css/owl.carousel.min.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets3/css/bootstrap.min.css')?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('assets3/css/style.css')?>">

  <title><?= esc($title) ?></title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url('assets3/images/bg-login.jpg') ?>');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>MC Admin</strong></h3>
            <p class="mb-4">Silakan login menggunakan email</p>
<?= form_open(base_url('login')); ?>
<div class="form-group first">
    <label for="username">Email</label>
    <input type="text" class="form-control" placeholder="" id="username" name="username"> <!-- Add name attribute -->
</div>
<div class="form-group last mb-3">
    <label for="password">Password</label>
    <input type="password" class="form-control" placeholder="" id="password" name="password"> <!-- Add name attribute -->
</div>

<div class="d-flex mb-5 align-items-center">
    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
        <input type="checkbox" checked="checked" name="remember"> <!-- Add name attribute for checkbox -->
        <div class="control__indicator"></div>
    </label>
</div>

<a href="<?= base_url('admin/dashboard')?>" class="btn btn-block btn-primary" value="Log In"><span>Log In</span></a>
<!-- <input type="submit" value="Log In" class="btn btn-block btn-primary"> -->
<?= form_close(); ?>

          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?= base_url('assets3/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?= base_url('assets3/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets3/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets3/js/main.js')?>"></script>
  </body>
</html>