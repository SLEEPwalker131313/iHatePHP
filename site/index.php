<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
 <?php echo '<p>Привет, мир!</p>'; ?>
  <?php
   $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
   if (!$link) {
       die('Ошибка соединения: ' . mysql_error());
   }

   $sql = 'CREATE DATABASE my_db';
   if (mysql_query($sql, $link)) {
       echo "База my_db успешно создана\n";
   } else {
       echo 'Ошибка при создании базы данных: ' . mysql_error() . "\n";
   }
 ?>
 </body>
</html>
