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
     <div class="btn btn-default" id="gitBtn">Git</div>
     <div id="gitBox">some text</div>
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

   $('#gitBtn').click(function(){

    // console.log(
//     function github_request($url)
// {
  // echo "test";
//   $ch = curl_init();
//
//   // Basic Authentication with token
//   // https://developer.github.com/v3/auth/
//   // https://github.com/blog/1509-personal-api-tokens
//   // https://github.com/settings/tokens
//   $access = 'username:token';
//
//   curl_setopt($ch, CURLOPT_URL, $url);
//   //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
//   curl_setopt($ch, CURLOPT_USERAGENT, 'Agent smith');
//   curl_setopt($ch, CURLOPT_HEADER, 0);
//   curl_setopt($ch, CURLOPT_USERPWD, $access);
//   curl_setopt($ch, CURLOPT_TIMEOUT, 30);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//   $output = curl_exec($ch);
//   curl_close($ch);
//   $result = json_decode(trim($output), true);
//   return $result;
// }
// $repos = github_request('https://api.github.com/user/repos?page=1&per_page=100');
// print_r($response);
// //$events = github_request('https://api.github.com/users/:username/events?page=1&per_page=5');
// $events = github_request('https://api.github.com/users/:username/events/public?page=1&per_page=5');
// print_r($events);
// $feeds = github_request('https://api.github.com/feeds/:username?page=1&per_page=5');
// print_r($feeds);
    //console.log("test");
    //console.log();
    <?php
        function github_request($url)
    {
      // echo "test";
      $ch = curl_init();

      // Basic Authentication with token
      // https://developer.github.com/v3/auth/
      // https://github.com/blog/1509-personal-api-tokens
      // https://github.com/settings/tokens
      $access = 'tenminutesgit:10minutesgitpassword';

      curl_setopt($ch, CURLOPT_URL, $url);
      //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
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
    // $repos = github_request('https://api.github.com/user/repos?page=1&per_page=100');
    // echo $repos;
    //
    // $events = github_request('https://api.github.com/users/:username/events/public?page=1&per_page=5');
    // echo $events;
    $('#gitBox').append('\
    <?php
    $commits = github_request('https://api.github.com/repos/SLEEPwalker131313/iHatePHP/commits');
    // echo gettype($commits(1));
    // foreach ($commits as &$value) {
    //   foreach ($value as &$tmp) {
    //     echo $tmp;
    //     echo ' ';
    //   }
    //   echo '\n';
    // }
    $i = 0;
    foreach($commits as $commitLocalNumber => $commitContent)
      // if(strcasecmp($key, 'commit')) {
      {
        echo '<div class="row commit" id="commit'.$i.'">';
        // foreach($valuev as $keyvv => $valuevv) {
          foreach($commitContent as $commitLocalKey => $commitLocalValue) {
            if(strcasecmp($commitLocalKey, 'html_url') == 0) {
              // echo $commitLocalKey." has the value ". $commitLocalValue." ";
          }
          if(strcasecmp($commitLocalKey, 'commit') == 0) {
            // echo '\ncommitstart\n';
            echo '<div class="col-md-10 commitContent">';
            foreach($commitLocalValue as $commitLocalKey2 => $commitLocalValue2) {
              if(strcasecmp($commitLocalKey2, 'message') == 0) {
                echo '<div class="row message">'.$commitLocalValue2.'</div>';
                // echo $commitLocalKey2." has the value ". $commitLocalValue2." ";
              }
              if(strcasecmp($commitLocalKey2, 'committer') == 0) {
                // echo '\ncommitterstart\n';
                foreach($commitLocalValue2 as $committerLocalKey => $committerLocalValue) {
                  // if(strcasecmp($commitLocalKey2, 'message') == 0)
                  // if(strcasecmp($committerLocalKey, 'login') == 0
                // || strcasecmp($committerLocalKey, 'avatar_url') == 0
                // || strcasecmp($committerLocalKey, 'html_url') == 0
                // || strcasecmp($committerLocalKey, 'date') == 0 ) {
                if(strcasecmp($committerLocalKey, 'date') == 0) {
                    // echo $committerLocalKey." has the value ". $committerLocalValue." ";
                    echo '<div class="row date"><div class="col-md-3">'.$committerLocalValue.'</div><div class="col-md-9">'.$author.'</div></div>';
                  }
                }
                // echo '\ncommitterend\n';
              }
            }
            echo '</div>';
            // echo '\ncommitend\n';

          }
          if(strcasecmp($commitLocalKey, 'author') == 0) {
            // echo '\nauthorstart\n';
            foreach($commitLocalValue as $authorLocalKey => $authorLocalValue) {
              // if(strcasecmp($authorLocalKey, 'login') == 0
              // || strcasecmp($authorLocalKey, 'html_url') == 0
              // || strcasecmp($authorLocalKey, 'avatar_url') == 0)
              if(strcasecmp($authorLocalKey, 'login') == 0) {
                $author = $authorLocalValue;
              }
              if(strcasecmp($authorLocalKey, 'avatar_url') == 0) {
                echo '<div class="col-md-2 avatar"><img src="'.$authorLocalValue.'" width="36" height="36"></div>';
              }
            }
            // echo '\nauthorerend\n';
          }

        }
        echo '</div>';

        // }
      // }
      // foreach($value as $keyv => $valuev) {
      //   if(strcasecmp($keyv, 'commit')) {
      //     foreach($valuev as $keyvv => $valuevv) {
      //       echo $keyvv." has the value ". $valuevv." ";
      //     }
      //   }
        // if(strcasecmp($key, 'html_url') || strcasecmp($key, 'login')
        // || strcasecmp($key, 'avatar_url') || strcasecmp($key, 'avatar_url'))
          // echo $key." has the value ". $value." ";
          // }
      $i = $i + 1;
      // echo '\n'.$i.'\n';
    }

    // $feeds = github_request('https://api.github.com/feeds/:username?page=1&per_page=5');
    // echo $feeds;
    ?>');
   });
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
