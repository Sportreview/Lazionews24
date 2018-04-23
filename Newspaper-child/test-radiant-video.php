<?php
/*
Template Name: Test radiant video singolo
*/
get_header(); ?>
<div class="td-container">
<div class="playerHolder"><div id="SportreviewPlayer"></div></div>
</div>
            <script>
            var bitrates = {
              mp4: ["https://player.vimeo.com/external/184516630.sd.mp4?s=e765f4b44a8bca57012361e5fea27d5f8c305c3b&profile_id=165"] // url video
            };

            var Fourw = '';
  
            var fallbacks = [
              Fourw
            ];

            var settings = {
              logo: 'http://www.lazionews24.com/wp-content/themes/Newspaper-child/images/logo-laz24-video.png', // eventuale logo
              logoLoc:'http://www.lazionews24.com/', // eventuale url
              licenseKey: 'dG54dHd4aXh6aEAxNTA5NDU3', //chiave presa dal sito (cambia da sito a sito)
              bitrates: bitrates,
              skin:'s5', // da s1 a s5
              delayToFade: 3000,
              autoplay: false,
              //width: 400, // volendo c'è anche la mod responsive
              //height: 300,  // volendo c'è anche la mod responsive
              autoHeightMode: true, //Attiva la modalità responsive, attiva qui e leva width ed height
              muted: true,
              loop: false,
              mutedAutoplayOnMobile:true,
              sharing: true,
              ads: true,
              adCountDown:true,
              labels: {
                ads: {
                  controlBarCustomMessage: 'Messaggio pubblicitario'
                },
                error: {
                  customErrorMessage: 'Il contenuto video non è al momento disponibile.',
                  noSupportMessage: 'Manca il supporto per la riproduzione dei video.',
                  noSupportDownload: 'Puoi scaricare il video qui.',
                  noSupportInstallChrome: 'E\' necessario aggiornare Google Chrome per visualizzare questo contenuto.'
                }
              },
              adTagUrl: Fourw, //tag firstcall
              adTagWaterfall: fallbacks, // array fallbacks
              poster: 'http://www.calcionews24.com/wp-content/uploads/2016/12/juventus-dinamo-zagabria-champions-league-2016-696x385.jpg' // eventuale immagine poster
            };
           
            var elementID = 'SportreviewPlayer';
            var rmpContainer = document.getElementById(elementID);
            var rmp = new RadiantMP(elementID);
            rmp.init(settings);

      //esempio di api al click
        rmpContainer.addEventListener('adclick', function () {
              rmp.play();
              console.log('Sportreview VIDEO ENGINE by Riccardo Mel: adclick e play');
             });
            </script>

<?php
get_footer();