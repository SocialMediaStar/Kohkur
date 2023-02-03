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
          Loo grupp või liitu grupiga 
        </h1>
        <small class="color-blue">Siin saad luua või liituda juba olemasoleva grupiga.</small>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-3">
    <div class="col-lg-12">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGroupModal"><i class="fa-solid fa-plus"></i> Loo uus grupp</button>
        <button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#joinGroupModal"><i class="fa-light fa-object-subtract"></i> Liitu grupiga</button>
    </div>
  </div>
</div>

<div class="modal fade" id="addGroupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        <div><a href="javascript:void(0)" data-bs-dismiss="modal"><i class="fa-solid fa-chevron-left"></i></a></div>
        <form method="POST" action="javascript:void(0)" id="createGroupForm">
          <input type="hidden" name="createGroupForm" value="1" >
        <div class="row mt-5">
          <div class="col-lg-12">
            <h1 class="mb-0 pb-0 color-blue">
             Loo uus grupp
             </h1>
            <small class="color-blue">Siin saad luua uue grupi.</small>
          </div>
          <div class="col-lg-12 mt-3">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" id="groupNameInput" placeholder="Grupi nimi">
              <label for="groupNameInput">Grupi nimi</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" style="height: 100px" name="desc" rows="10" placeholder="Grupi kirjeldus" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Grupi kirjeldus</label>
            </div>
            <div class="image-area"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" name="groupPicture" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Vali grupi pilt arvutist</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <small class="text-uppercase font-weight-bold text-muted"><i class="fa-solid fa-upload"></i></small></label>
                </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-blue">Salvesta</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/group.js"></script>
  </body>
</html>
