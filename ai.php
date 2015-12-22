<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CGI-2048 -- 65536</title>

  <link href="style/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="meta/apple-touch-icon.png">
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone 5+ -->
  <link rel="apple-touch-startup-image" href="meta/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone, retina -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
  <link href="meta/apple-touch-icon.png" rel="image_src" type="image/jpeg">
  	<meta property="og:title" content="CGI-2048 -- 65536"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="http://2048.aigames.nctu.edu.tw/replay.php"/>
	<meta property="og:image" content="http://2048.aigames.nctu.edu.tw/meta/apple-touch-icon.png"/>
	<meta property="og:site_name" content="CGI-2048 -- 65536"/>
	<meta property="og:description" content="These games are the one reaching 65536 among 10000 games played by CGI-2048. CGI-2048 is a 2048 AI program developed by the team in CGI lab. The authors include  Kun-Hao Yeh (葉騉豪), Chao-Chin Liang (梁朝欽) and I-Chen Wu (吳毅成)."/>
 
  <script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
  <div class="container">
    <div class="heading">
      <h1 class="title">2048</h1>
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>
    </div>
    <div class="above-game">
      <!--<p class="game-intro">Replay the games to the 65536 tile by <strong>CGI-2048</strong>.</p>-->
	  <a class="restart-button" style="display:none;">New Game</a>
    </div>

	<p> This page shows the game reaching <strong>65536</strong>, the 9189'th game among 10000 games played by <strong>CGI-2048</strong>.</p>
	<div class="ai-select-32768-record" style="display:none;">
		<label class="select-record-label">Select:&nbsp;&nbsp;</label>
			<select id="select-32768-record">
				<option value="65536" selected="selected">Record-9189&nbsp;&nbsp;&nbsp;Score:&nbsp;1031392</option>
			</select>
		<p class="select-record-intro"><strong>Note</strong>: This game (9189'th game) is the one reaching <strong>65536</strong> among 10000 games tried played by CGI-2048.</p>
    </div>
	<div class="ai-controller">
      <a id="ai-play-button" class="control-button ai-button">Start</a>
      <a id="slower-button" class="speed-button ai-button">Slower</a>
      <a id="faster-button" class="speed-button ai-button">Faster</a>
    </div>
	
    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
	  <div id="loading-img">
		<img src="loading.gif">
		<p>Loading</p>
	  </div>
    </div>

    <hr>
    <p>
	<strong>CGI-2048</strong> is developed by the team in <a href="http://www.aigames.nctu.edu.tw/" target="_BLANK">CGI lab</a>.
	Source codes can be found at:
        <a href="https://github.com/tnmichael309/2048AI" target="_BLANK" >Github(Kun-Hao Yeh)</a>
        <a href="https://github.com/CGI-LAB/Taiwan_Bot_Tournament_2048" target="_BLANK">Github(CGI-LAB)</a>
	.The authors include <a onclick="return false;">Kun-Hao Yeh</a> (葉騉豪), <a onclick="return false;">Chao-Chin Liang</a> (梁朝欽) and <a href="http://aigames.nctu.edu.tw/~icwu/" target="_BLANK">I-Chen Wu</a> (吳毅成).<br /><br />
	To play by CGI-2048, click <a href="http://2048.aigames.nctu.edu.tw/" target="_blank" style="font-size:24px;">the CGI-2048 page</a>.<br />
	</p>
	<hr>
	<p>
	The end of the game should look like this:<br>
	</p>
	<p style="text-align:center;margin:0;">
		<img src="65536.png" style="width: 390px; height: 621px; border:1px solid black;">
	</p>
	<hr>
    <p>
    The 2048 game is created by <a href="http://gabrielecirulli.com" target="_blank">Gabriele Cirulli.</a> Based on <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> and conceptually similar to <a href="http://asherv.com/threes/" target="_blank">Threes by Asher Vollmer.</a>
    </p>
	<hr>
	<div class="fb-like" data-href="http://2048.aigames.nctu.edu.tw/replay.php" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
  </div>

  <script src="js_ai/bind_polyfill.js"></script>
  <script src="js_ai/classlist_polyfill.js"></script>
  <script src="js_ai/animframe_polyfill.js"></script>
  <script src="js_ai/keyboard_input_manager_replay.js"></script>
  <script src="js_ai/html_actuator.js"></script>
  <script src="js_ai/grid.js"></script>
  <script src="js_ai/tile.js"></script>
  <script src="js_ai/local_storage_manager.js"></script>
  <script src="js_ai/game_manager_replay.js"></script>
  <script src="js_ai/application.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52597915-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>