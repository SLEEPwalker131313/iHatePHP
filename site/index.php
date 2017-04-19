<html>
 <head>
  <title>Тестируем PHP</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
  <br>
  <div class="container">
   <div class="row">
    <div class="btn-group">
     <div class="col-md-2 btn btn-danger" id="runtime">
      На каком языке мы написали сайтик?
     </div>
     <div class="col-md-2 btn btn-primary" id="hardLevel">
      Сложный ли он получился?
     </div>
     <div class="col-md-2 btn btn-primary" id="github">
      Почему у такого плохого плохого сайта так много комитов?
     </div>
     <div class="col-md-2 btn btn-primary" id="DB">
      Почему мы берём эти строки не из базы?
     </div>
     <div class="col-md-2 btn btn-danger" id="date">
      Ну и дату давайте вернём, что уж мы
     </div>
    </div>
   </div>
  </div>
 <?php echo '<p>Привет, мир!</p>'; ?>
 <div style="color: red" id="firstBTN">
  Click it 1
 </div> <div style="color: red" id="secondBTN">
  Click it 2
 </div>
  <div id="firstText">
   Default text
  </div>
  <div id="secondText">
   Default text
  </div>
  <script>
   $('#firstBTN').click(function(){
    $('#firstText').html('\
     <?php echo 'Текст из пхп!' ?>\
    ');
   });
   $('#secondBTN').click(function(){
    $('#secondText').html('\
     <?php echo '<p>Снова из пхп!' ?>\
    ');
   });
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
