<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
<div class="container">
  <div class="d-flex mb-3">
    <div class="me-auto p-2 mt-2 color-blue"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="p-2">
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-5">
    <div class="col-lg-12">
        <h1 class="mb-0 pb-0 color-blue">
          Registeeri
        </h1>
        <small class="color-blue">Täida väljad registeerimiseks</small>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-3">
    <div class="col-lg-12">
      <form method="POST" id="registerForm" action="javascript:void(0)">
        <input type="hidden" name="registerForm" value="1">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="fname" id="fnameInput" placeholder="Sinu nimi">
          <label for="fnameInput">Eesnimi</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="lname" id="lnameInput" placeholder="Sinu nimi">
          <label for="lnameInput">Perenimi</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="emailInput" placeholder="Sinu nimi">
          <label for="emailInput">E-mail</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="Sinu nimi">
          <label for="phoneInput">Telefon</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Salasõna</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password2" id="floatingPassword2" placeholder="Password">
          <label for="floatingPassword">Korda salasõna</label>
        </div>
        <div class="form-group mb-3">
          <div class="d-grid gap-2">
            <button class="btn btn-blue btn-lg" type="submit">Registeeri</button>
          </div>            
        </div>
      </form>
      <div class="text-center">
      <small>Juba on kasutaja? <a href="#">Logi sisse</a></small>
      </div>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/user.js"></script>
  </body>
</html>
