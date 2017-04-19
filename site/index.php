<html>
 <head>
  <title>Тестируем PHP</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
  <div class="container">
   <div class="row">
    <div class="col-md-4 btn btn-primary">
     Сложное ли получилось приложение?
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
