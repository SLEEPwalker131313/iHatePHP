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
    console.log('\
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
    }
    // $repos = github_request('https://api.github.com/user/repos?page=1&per_page=100');
    // echo $repos;
    //
    // $events = github_request('https://api.github.com/users/:username/events/public?page=1&per_page=5');
    // echo $events;
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
    {
      $i = $i + 1;
      // if(strcasecmp($key, 'commit')) {
        // foreach($valuev as $keyvv => $valuevv) {
          foreach($commitContent as $commitLocalKey => $commitLocalValue) {
            if(strcasecmp($commitLocalKey, 'html_url'))
              echo $commitLocalKey." has the value ". $commitLocalValue." ";
          }
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
      echo '\n'.$i.'\n';
    }

    // $feeds = github_request('https://api.github.com/feeds/:username?page=1&per_page=5');
    // echo $feeds;
    ?>');
   });
  </script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>
