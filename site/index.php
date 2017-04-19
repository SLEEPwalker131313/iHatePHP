<html>
 <head>
  <title>Тестируем PHP</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 </head>
 <body>
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
 </body>
</html>
