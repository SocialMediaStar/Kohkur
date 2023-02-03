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
    <input type="hidden" name="group_id" value="<?=$checkGroup["id"];?>">
  <section class="groupCover" style="min-height: 200px;background-image: url(https://i.err.ee/smartcrop?type=optimize&width=970&aspectratio=16%3A10&url=https%3A%2F%2Fs.err.ee%2Fphoto%2Fcrop%2F2015%2F09%2F01%2F87937hed04.jpg);background-size: cover;background-repeat: no-repeat;background-position: center center;">
  <div class="container">
  <div class="row">
    <div class="col-lg-12">
    </div>
  </div>
  </div>
</section>
<section>
<div class="container pt-2 shadow-5 rounded-bottom">
  <div class="row">
    <div class="col-lg-12">
        <h4><?=$checkGroup["name"];?></h4>
        <p><?=$checkGroup["description"];?></p>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Üritused</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-members-tab" data-bs-toggle="pill" data-bs-target="#pills-members" role="tab" aria-controls="pills-members" aria-selected="false">Liikmed</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Seaded</a>
          </li>
        </ul>        
      </div>
    </div>
  </div>
  </div>
</section>
<section class="content mt-3 mb-5">
<div class="tab-content mb-5" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex mb-3">
                    <div class="me-auto p-2">
                      <strong>Kokku sündmusi:</strong> 3210
                    </div>
                    <div class="p-2"><button class="btn btn-blue btn-sm" data-bs-toggle="modal" data-bs-target="#addEventModal">Lisa uus sündmus</button></div>
                  </div>
                  <p>Sul on <strong>4</strong> maksmata sündmust</p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-end">
            <button class="btn btn-light"><i class="fa-solid fa-bars-filter"></i> Filtreeri</button>
          </div>
        </div>
        <div class="col-lg-12 mt-2 eventArea">
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab" tabindex="0">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex mb-3">
              <div class="me-auto p-2"><h4><strong>Liikmeid: 3210</strong></h4></div>
              <div class="p-2"><button class="btn btn-blue btn-sm" data-bs-toggle="modal" data-bs-target="#addMemberModal">Lisa uus liige</button></div>
            </div>
          </div>
          <div class="col-lg-12">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>
                    <div class="d-flex mb-3">
                      <div class="me-auto p-2">
                        <h4><strong>Olavi Allik</strong></h4>
                        <i class="fa-solid fa-child-reaching"></i> Karl Allik
                      </div>
                      <div class="p-2"><i class="fa-solid fa-ellipsis-vertical"></i></div>
                    </div>
                  </th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>

</section>

<div id="bottom-toolbar" class="bottom-toolbar fixed-bottom">
  <div class="bottom-navigation">
    <div class="swiper-container-toolbar swiper-toolbar">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <ul class="bottom-navigation__icons">
            <li><a href="index.html"><img src="assets/img/icons/home.png" alt="" title="" /></a></li>
            <li><a href="#" class="open-panel" data-panel="right" data-arrow="left"><img src="assets/img/icons/user.png" alt="" title="" /></a></li>
            <li><a href="main.html"><img src="assets/img/icons/blocks.png" alt="" title="" /></a></li>
            <li><a href="contact.html"><img src="assets/img/icons/contact.png" alt="" title="" /></a></li>
            <li><a href="blog.html"><img src="assets/img/icons/news.png" alt="" title="" /></a></li>
            <li><a href="chat.html"><img src="assets/img/icons/chat.png" alt="" title="" /></a></li>
            <li><a href="#" data-popup="social" class="open-popup"><img src="assets/img/icons/love.png" alt="" title="" /></a></li>
          </ul>
        </div> 
      </div>
      </div>
  </div>	  
</div>
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        <div><a href="javascript:void(0)" data-bs-dismiss="modal"><i class="fa-solid fa-chevron-left"></i></a></div>
        <form method="POST" action="javascript:void(0)" id="createEventForm">
          <input type="hidden" name="createEventForm" value="1" >
        <div class="row mt-5">
          <div class="col-lg-12">
            <h1 class="mb-0 pb-0 color-blue">
             Loo uus sündmud
             </h1>
            <small class="color-blue">Siin saad luua uue sündmuse.</small>
          </div>
          <div class="col-lg-12 mt-3">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" id="eventNameInput" placeholder="Sündmuse nimi">
              <label for="eventNameInput">Sündmuse nimi</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" style="height: 100px" name="desc" rows="10" placeholder="Sündmuse kirjeldus" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Sündmuse kirjeldus</label>
            </div>
            <div class="form-floating mb-3 mt-3">
              <input type="text" class="form-control" name="sum" id="eventNameInput" placeholder="Summa">
              <label for="eventNameInput">Summa (per laps)</label>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control" name="date" id="eventNameInput" placeholder="Maksetähtaeg">
              <label for="floatingTextarea">Maksetähtaeg</label>
            </div>
            <div class="image-area"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" name="eventPicture" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Vali sündmuse pilt arvutist</label>
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
<div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-slideout modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body">
        <div><a href="javascript:void(0)" data-bs-dismiss="modal"><i class="fa-solid fa-chevron-left"></i></a></div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <h1 class="mb-0 pb-0 color-blue">
             Lisa uus liige
             </h1>
            <small class="color-blue">Siin saad lisada uue liikme.</small>
          </div>
          <div class="col-lg-12 mt-3">
            <label>Jaga grupi linki</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="" id="groupURL" disabled value="http://localhost/Kohkur/group.php?hash=<?=$hash;?>" aria-label="" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2" onClick="copyGroupURL()">Kopeeri link</button>
            </div>
            <a href="fb-messenger://share/?link=http://localhost/Kohkur/group.php?hash=<?=$hash;?>&app_id=123456789"><i class="fa-brands fa-facebook-messenger"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js" integrity="sha512-RNLkV3d+aLtfcpEyFG8jRbnWHxUqVZozacROI4J2F1sTaDqo1dPQYs01OMi1t1w9Y2FdbSCDSQ2ZVdAC8bzgAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/just-handlebars-helpers@1.0.19/dist/h.min.js"></script>
    <script src="templates/templates.js"></script>
    <script type="text/javascript">H.registerHelpers(Handlebars);</script>
    <script src="assets/js/user.js"></script>
    <script src="assets/js/group.js"></script>
    <script src="assets/js/event.js"></script>
  </body>
</html>
