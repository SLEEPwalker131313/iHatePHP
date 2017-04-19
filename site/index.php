<html>
 <head>
  <title>Тестируем PHP</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 </head>
 <body>
 <?php echo '<p>Привет, мир!</p>'; ?>
 <div style="color: red" id="firstBTN">
  CLick it 1
 </div>
  <div id="firstText">
   Default text
  </div>
  <script>
   $('#firstBTN').click(function(){
    $('#firstText').html(
     "dsdasdsa"
    );
   });
  </script>
 </body>
</html>
