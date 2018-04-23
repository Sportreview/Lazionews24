<?php
/*
Template Name: Test Player Radiant
*/
?>
<?php get_header(); ?>

<div class="playerHolder" style="width:960px; margin: 0 auto; padding:0; "><div id="SportreviewSlidePlayer"></div></div>
<script>
   var bitrates2 = {
     mp4: ["https://player.vimeo.com/external/208814536.sd.mp4?s=dbcbed50675948e5a11c50589948aff6b98cf362&profile_id=165"] // url video
   };

   if (!isMobileNewtek && homepageURL=="http://www.lazionews24.com/") {
     var tagpreroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/hp/preroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpostroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/hp/postroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpreroll2repeat = tagpreroll2;
   } else if (!isMobileNewtek) {
     var tagpreroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/altro/preroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpostroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/altro/postroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpreroll2repeat = tagpreroll2;
   } else {
     var tagpreroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/mobile/preroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpostroll2 = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/5196/lazionews24/mobile/postroll&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&url=lazionews24.com&description_url=lazionews24.com&correlator='+Math.round(Math.random()*10000000000)+'';
     var tagpreroll2repeat = tagpreroll2;
   }

   console.log("Tag preroll2: "+tagpreroll2);
   console.log("Tag preroll2 REP: "+tagpreroll2repeat);
   console.log("Tag postroll2: "+tagpostroll2);

   var settings2 = {
     logo: 'http://www.lazionews24.com/wp-content/themes/Newspaper-child/images/logo-laz24-video.png',
     logoLoc:'http://www.lazionews24.com/',
     pathToRmpFiles: '//cdn.sportreview.it/radiantmp/4.0.11/',
     licenseKey: 'dG54dHd4aXh6aEAxNTA5NDU3',
     hasGa:true,
     trackingId:'UA-11488352-6',
     gaCategory:'Video Test',
     bitrates: bitrates2,
     skin: 's5', // da s1 a s5
     delayToFade: 3000,
     debug: true,
     autoplay: true,
     autoHeightMode: true,
     muted: true,
     loop: false,
     mutedAutoplayOnMobile: true,
     sharing: true,
     ads: true,
     adTagUrl: tagpreroll2,
     adCountDown: true,
     labels: {
       ads: {
         controlBarCustomMessage: 'Messaggio promozionale'
       },
       hint: {
         sharing: 'Condividi',
         quality: 'Qualità',
         speed: 'Velocità',
         captions: 'Sottotitoli',
         audio: 'Audio',
         cast: 'Cast',
         playlist: 'Playlist'
       },
       error: {
         customErrorMessage: 'Il contenuto video non è al momento disponibile.',
         noSupportMessage: 'Manca il supporto per la riproduzione dei video.',
         noSupportDownload: 'Puoi scaricare il video qui.',
         noSupportInstallChrome: 'E\' necessario aggiornare Google Chrome per visualizzare questo contenuto.'
       }
     },
     poster: '' // eventuale immagine poster
   };

   var elementID2 = 'SportreviewSlidePlayer';
   var rmpContainer2 = document.getElementById(elementID2);
   var rmp2 = new RadiantMP(elementID2);


   //Inizio Engine by Riccardo Mel
   //Set up Variabili

   //trigger Events
   rmpContainer2.addEventListener('adcontentresumerequested', function () {
   console.log("Engine by Riccardo Mel: resume request");
   });
   rmpContainer2.addEventListener('adcontentpauserequested', function () {
   console.log("Engine by Riccardo Mel: pause request");
   });

   rmpContainer2.addEventListener('ready', function () {
   console.log("Engine by Riccardo Mel: ready");
   });

   rmpContainer2.addEventListener('pause', function () {
   console.log("Engine by Riccardo Mel: pause");
   });

   rmpContainer2.addEventListener('adclick', function () {
   console.log("Engine by Riccardo Mel: adclick");
   rmp2.play();
   });

   //fix fullscreen bug
   function FullScreenOnFix() {
     document.getElementById("at4-share").style.display = "none !important";
   }
   rmpContainer2.addEventListener('enterfullscreen', FullScreenOnFix);

   function FullScreenOffFix() {
     document.getElementById("at4-share").style.display = "inherit";
   }
   rmpContainer2.addEventListener('exitfullscreen', FullScreenOffFix);
   //fix fullscreen bug

   //Init Player
   rmp2.init(settings2);

 </script>

<?php get_footer(); ?>
