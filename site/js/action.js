$('#runtime').click(function(){
 $('#runtimeText').html('\
  <?php echo 'ПХП!!!<br>Хотя и его тут мало. Для красивых\
   кнопочек прикручен bootstrap. Для удобной обработки событий \
   (хотя и для бустрапа он нужен) JQuery' ?>\
 ');
});
$('#secondBTN').click(function(){
 $('#secondText').html('\
  <?php echo '<p>Снова из пхп!' ?>\
 ');
});
