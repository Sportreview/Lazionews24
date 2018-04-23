<?php
/*
Template Name: Radiant Media Player Iframe Embed
*/
?>
<!DOCTYPE html>
<html amp lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello, AMPs</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
  <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
  <link rel="canonical" href="https://www.radiantmediaplayer.com/documentation.html">
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
<?php 
	//codice per recuperare video id

?>
<?php $video_id = "https://streamingrmp-1479.kxcdn.com/vod/smil:bbb.smil/playlist.m3u8"; ?>
  <amp-iframe sandbox="allow-scripts allow-same-origin allow-popups" width="640" height="360" layout="responsive" allowfullscreen frameborder="0" src="https://www.lazionews24.com/engine-iframe-delivery/?video_id=<?php echo $video_id; ?>">
    <amp-img layout="fill" src="https://www.radiantmediaplayer.com/images/poster-rmp-showcase.jpg" placeholder></amp-img>
  </amp-iframe>
</body>
</html>