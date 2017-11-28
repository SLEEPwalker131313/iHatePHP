<html>
 <head>
  <title>Сайтик</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/action.js"></script>
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
   <div class="row">
     <form role="form" class="form-inline row" method="post">
       <div class="form-group col-md-9">
        <label for="commits" class="col-md-4">Посмотрим чего мы там нашкодили?</label>
        <input type="commitsInput" class="form-control col-md-8" name="commitsInput" id="commitsInput" placeholder="Колличество выводимых commit-ов (1-30)" style="width: 75%;">
       </div>
       <div type="submit" class="btn btn-success btn-large col-md-3 btn-default" id="gitBtn">Показать</div>
      </form>
     <!-- <div class="btn btn-default" id="gitBtn">Git</div> -->
     <div id="gitBoxWrapper">some text</div>
   </div>
  </div>
  <script>
  //Обработка кликов по кнопкам
   $('#runtime').click(function(){
    $('#runtimeText').html('\
     <?php echo 'ПХП!!!<br>Хотя и его тут мало. Для красивых\
      кнопочек прикручен <mark>bootstrap</mark>. Для удобной обработки событий \
      (хотя и для бустрапа он нужен) <mark>JQuery</mark>' ?>\
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
     <?php echo '<img src="img/img.jpg" height="250" onclick="changeSizeImage(this)" style="cursor: pointer">' ?>\
    ');
   });
   $('#date').click(function(){
    $('#dateText').html('\
    <?php
      date_default_timezone_set('UTC');
      $today = date("F j, Y, g:i a");
      echo $today;
    ?>\
    ');
   });

   $('#gitBtn').on("click", function(){

     var formInputValue = $('#commitsInput').val();
     if(!isNaN(formInputValue) && isFinite(formInputValue) && Math.floor(formInputValue) > 0 && Math.floor(formInputValue) < 31) {
    <?php
        function github_request($url)
    {
      $ch = curl_init();
      $access = 'tenminutesgit:10minutesgitpassword';

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_USERPWD, $access);
      curl_setopt($ch, CURLOPT_TIMEOUT, 300);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      $output = curl_exec($ch);
      curl_close($ch);
      $result = json_decode(trim($output), true);
      return $result;
    } ?>
    $('#gitBoxWrapper').html('<div id="gitBox" style="list-group list-unstyled"></div>');
    $('#gitBox').append('\
    <?php
    $commits = github_request('https://api.github.com/repos/SLEEPwalker131313/iHatePHP/commits');
    $i = 0;
    $author = 0;
    $authorLink = 0;
    $avatar_url = 0;
    $commitDate = 0;
    $message = 0;
    $commitLink = 0;
    foreach($commits as $commitLocalNumber => $commitContent)
      {
        $commitNumber = $commitLocalNumber;
          foreach($commitContent as $commitLocalKey => $commitLocalValue) {
            if(strcasecmp($commitLocalKey, 'html_url') == 0) {
              $commitLink = $commitLocalValue;
          }
          if(strcasecmp($commitLocalKey, 'author') == 0) {
            foreach($commitLocalValue as $authorLocalKey => $authorLocalValue) {
              if(strcasecmp($authorLocalKey, 'login') == 0) {
                $author = $authorLocalValue;
              }
              if(strcasecmp($authorLocalKey, 'avatar_url') == 0) {
                $avatar_url = $authorLocalValue;
              }
              if(strcasecmp($authorLocalKey, 'html_url') == 0){
                    $authorLink = $authorLocalValue;
                }
            }
          }
          if(strcasecmp($commitLocalKey, 'commit') == 0) {
            foreach($commitLocalValue as $commitLocalKey2 => $commitLocalValue2) {
              if(strcasecmp($commitLocalKey2, 'message') == 0) {
                $message = $commitLocalValue2;
              }
              if(strcasecmp($commitLocalKey2, 'committer') == 0) {
                foreach($commitLocalValue2 as $committerLocalKey => $committerLocalValue) {
                if(strcasecmp($committerLocalKey, 'date') == 0) {
                    $commitDate = $committerLocalValue;
                  }
                }
              }
            }
          }

        }
        echo '<div class="row commit list-group-item" id="commit'.$i.'">';
          echo '<div class="col-md-2 avatar"><a href="'.$authorLink.'"><img src="'.$avatar_url.'" width="36" height="36"></a></div>';
          echo '<div class="col-md-10 content">';
            echo '<div class="row message"><a href="'.$commitLink.'">'.$message.'</a></div>';
            echo '<div class="row date">';
              echo '<div class="col-md-8 commitAuthor"><a href="'.$authorLink.'"><small>'.$author.'</small></a></div>';
              echo '<div class="col-md-4 commitDate">'.$commitDate.'</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      $i = $i + 1;
    }

    ?>');
  } else if(formInputValue.length == 0) {
    $('#gitBoxWrapper').html('Тут мог быть alert, но я пожалел пользователей этого прекрасного сервиса. Эта штука выглядит как пустая строка.');
  }
  else if(isNaN(parseFloat(formInputValue))){
    $('#gitBoxWrapper').html('Тут мог быть alert, но я пожалел пользователей этого прекрасного сервиса. Ну вот прям совсем не похоже на число. А на несколько чисел или просто строку чутка похоже.');
  }
  else if(!isFinite(formInputValue)){
    $('#gitBoxWrapper').html('Тут мог быть alert, но я пожалел пользователей этого прекрасного сервиса. Вроде и похоже на число... Или на несколько чисел... Или Вы из тех, кто флоаты с запятой пишет, а не с точкой... Откуда мне знать');
  } else if(Math.floor(formInputValue) < 0 || Math.floor(formInputValue) > 31) {
    $('#gitBoxWrapper').html('Тут мог быть alert, но я пожалел пользователей этого прекрасного сервиса. Да да, число, но вот с диапазоном проблемы. Мы и так вам дробную часть выкидываем. (1-30)');
  }

  $( "#gitBox").children().each( function( index, element) {
	var tmp = $( element).attr( "id");
  var tmpp = tmp.split('t')[1];
  if(parseFloat(tmpp) >= parseFloat(formInputValue)){
    $( element ).remove();
  }
  });

   });
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
