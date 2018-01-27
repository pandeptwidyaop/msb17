
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
    <link rel="stylesheet" href="<?=base_url('assets/frontend/css/form-voting.css')?>">
    <link rel="shortcut icon" href="<?=base_url('assets/frontend/miss.png')?>">
  </head>
  <body>
    <div class="main">
      <div class="overlay"></div>
      <div class="container">
        <img src="<?=base_url('assets/frontend/miss.png')?>" alt="misslogo" class="img-responsive" width="200px" style="margin-top:40px">
        <h1 class="cursive">Voting MISS STIKOM Bali</h1>
        <div class="mailing-list" style="margin-top : 50px">
          <h3 class="mailing-list-heading">Kode Tiket : <?=$ticket?></h3>
          <h3 class="mailing-list-heading">Pilih kandidat favorit anda.</h3>
          <div class="row">
          <form class="" action="<?=base_url('voting/submit')?>" method="post">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash()?>">
            <input type="hidden" name="unique" value="<?=$ticket?>">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c1" style="display : none">
                    <label for="c1" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                    <div class="candidate-name">
                      <h3>Pande Putu Widya</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c2" style="display : none">
                    <label for="c2" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c3" style="display : none">
                    <label for="c3" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c4" style="display : none">
                    <label for="c4" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c5" style="display : none">
                    <label for="c5" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="boxes">
                  <div class="cc-selector">
                    <input type="radio" name="missstikombali" value="1" id="c6" style="display : none">
                    <label for="c6" style="background-image:url(<?=base_url('assets/frontend/a.png')?>)" class="drinkcard-cc img-responsive"></label>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <button class="btn btn-danger" type="submit" style="padding:25px"><i class="fa fa-check"></i>VOTE KANDIDAT SAYA !</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src="<?=base_url('assets/bs/js/')?>jquery-3.1.1.min.js"></script>
    <script src="<?=base_url('assets/bs/')?>js/bootstrap.min.js"></script>
  	<script src="<?=base_url('assets/frontend/vegas/vegas.min.js')?>"></script>
    <script src="<?=base_url('assets/frontend/js/image-picker.min.js')?>"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
    var base_url = window.location.protocol+'//'+window.location.host+'/missstikombali';
    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    $(document).ready(function() {
      var rand = getRandomInt(1,15);
      $('body').vegas({
        firstTransition: 'fade',
        overlay: base_url+'/assets/frontend/vegas/overlays/07.png',
        slides :[
          {src : base_url+'/assets/frontend/photos/'+rand+'.jpg'}
        ]
      });
    });
    $(".vote").imagepicker({
          hide_select : true,
          show_label  : true
    })
    </script>
  </body>
</html>
