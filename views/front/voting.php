
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voting MISS STIKOM Bali</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="miss stikom, stikom bali, it">
    <link rel="stylesheet" href="<?=base_url('assets/bs')?>/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  	<link rel="stylesheet" href="<?=base_url('assets/frontend/vegas/vegas.min.css')?>">
  	<link rel="stylesheet" href="<?=base_url('assets/frontend/')?>css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/frontend/')?>css/custom.css">
    <link rel="shortcut icon" href="<?=base_url('assets/frontend/miss.png')?>">
  </head>
  <body>
    <div class="main">
      <div class="overlay"></div>
      <div class="container">
        <img src="<?=base_url('assets/frontend/miss.png')?>" alt="misslogo" class="img-responsive" width="200px" style="margin-top:40px">
        <h1 class="cursive">Voting MISS STIKOM Bali</h1>
        <div class="mailing-list" style="margin-top : 50px">
          <h3 class="mailing-list-heading">Masukan kode unik tiket anda untuk melakukan voting.</h3>
          <div class="row">
            <div class="form-inline">
              <form class="" action="<?=base_url('voting/ticket')?>" method="post">
                <div class="form-group">
                  <label for="unique" class="sr-only"></label>
                  <input type="text" name="unique" class="form-control transparent" style="text-transform : uppercase" id="unique">
                  <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
                </div>
                <button class="btn btn-danger" type="submit">Cek ticket </button>
                <?=$alert?>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p> HIMAPRODI SI |Panitia Pelaksana MISS STIKOM Bali</p>
            </div>
            <div class="col-md-6">
              <p class="credit">&copy; 2017 <a href="https://himaprodisi.or.id">HIMAPRODI SISTEM INFORMASI</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src="<?=base_url('assets/bs/js/')?>jquery-3.1.1.min.js"></script>
    <script src="<?=base_url('assets/bs/')?>js/bootstrap.min.js"></script>
  	<script src="<?=base_url('assets/frontend/vegas/vegas.min.js')?>"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
    var base_url = window.location.protocol+'//'+window.location.host+'/';
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    $(document).ready(function() {
      $('#unique').val().toUpperCase();
      var rand = getRandomInt(1,15);
      $('body').vegas({
        firstTransition: 'fade',
        overlay: base_url+'/assets/frontend/vegas/overlays/07.png',
        slides :[
          {src : base_url+'/assets/frontend/photos/'+rand+'.jpg'}
        ]
      });
    });


    </script>
  </body>
</html>
