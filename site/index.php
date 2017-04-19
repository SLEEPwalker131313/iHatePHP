<html>
 <head>
  <title>Сайтик</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
  <style>
   .btn{
    height: 80px;
   }
  </style>
  <br>
  <div class="container">
   <div class="row">
    <div class="btn-group col-md-12">
     <div class="col-md-3 btn btn-danger" id="runtime">
      На каком языке <br> мы написали сайтик?
     </div>
     <div class="col-md-2 btn btn-primary" id="hardLevel">
      Сложный ли он <br> получился?
     </div>
     <div class="col-md-2 btn btn-primary" id="github">
      Почему у такого <br>плохого сайта так много<br> комитов?
     </div>
     <div class="col-md-2 btn btn-primary" id="DB">
      Почему мы берём эти <br>строки не из базы?
     </div>
     <div class="col-md-3 btn btn-success" id="date">
      Ну и дату давайте вернём,<br> что уж мы
     </div>
    </div>
   </div>
   <div class="row" style="height: 100px">
    <div class="btn-group col-md-12">
     <div class="col-md-3" id="runtimeText"></div>
     <div class="col-md-2" id="hardLevelText"></div>
     <div class="col-md-2" id="githubText"></div>
     <div class="col-md-2" id="DBText"></div>
     <div class="col-md-3" id="dateText"></div>
    </div>
   </div>
  </div>
  <script>
   $('#runtime').click(function(){
    $('#runtimeText').html('\
     <?php echo 'ПХП!!!<br>Хотя и его тут мало. Для красивых\
      кнопочек прикручен bootstrap. Для удобной обработки событий \
      (хотя и для бустрапа он нужен) JQuery' ?>\
    ');
   });
   $('#hardLevel').click(function(){
    $('#hardLevelText').html('\
     <?php echo '<H1>Увы</H1>' ?>\
    ');
   });
   $('#github').click(function(){
    $('#githubText').html('\
     <?php echo 'К сожеланию, кроме WEBbrowser-а не было ничего и пришлось \
     кодить и сразу комитить даже малейшие изменения сразу в гит' ?>\
    ');
   });
   $('#DB').click(function(){
    $('#DBText').html('\
     <?php echo '<img src="img.jpg" height="250" onclick="changeSizeImage(this)">' ?>\
    ');
   });
   $('#date').click(function(){
    $('#dateText').html('\
    <?php
      date_default_timezone_set('UTC');
      $today = date("F j, Y, g:i a");
      echo $today;
    ?>
    ');
   });
  </script>
  <script language = "JavaScript">
    var bigsize = "500";
    var smallsize = "250";
    function changeSizeImage(im) {
      if(im.height == bigsize) im.height = smallsize;
      else im.height = bigsize;
    }
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
