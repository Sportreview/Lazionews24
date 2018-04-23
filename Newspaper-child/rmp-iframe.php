<?php
/*
Template Name: Radiant Media Player Iframe
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Radiant Media Player - Iframe</title>
    <style>
      /* This CSS is required to avoid layout issues */
      html,
      body {
        height: 100%;
        width: 100%;
        background-color: #000;
        overflow: hidden;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <script src="//cdn.sportreview.it/radiantmp/latest/js/rmp.min.js"></script>
    <div id="rmpPlayer"></div>
    <script>
      // Set up player settings
      var bitrates = {
        hls: 'https://streamingrmp-1479.kxcdn.com/vod/smil:bbb.smil/playlist.m3u8'
      };
      var settings = {
        licenseKey: 'Kl8lYz0xc2VrdjQwMnllaT9yb201ZGFzaXMzMGRiMEElXyo=',
        delayToFade: 3000,
        iframeMode: true,
        skin: 's1',
        bitrates: bitrates,
        poster: 'https://www.radiantmediaplayer.com/images/poster-rmp-showcase.jpg'
      };
      // Reference to the player container (id)
      var elementID = 'rmpPlayer';
      // New Radiant Media Player object
      var rmp = new RadiantMP(elementID);
      // Initialize player ... and done!
      rmp.init(settings);
    </script>
  </body>
</html>