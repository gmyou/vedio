
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <script type="text/javascript" src="//s0.2mdn.net/instream/html5/ima3.js"></script>
    <script type="text/javascript" src="application.js"></script>
    <script type="text/javascript" src="ads.js"></script>
    <script type="text/javascript" src="video_player.js"></script>

    <!-- GPT Companion Code -->
    <!-- Initialize the tagging library -->
     <script type='text/javascript'>
       var googletag = googletag || {};
       googletag.cmd = googletag.cmd || [];
       (function() {
         var gads = document.createElement('script');
         gads.async = true;
         gads.type = 'text/javascript';
         gads.src = '//www.googletagservices.com/tag/js/gpt.js';
         var node = document.getElementsByTagName('script')[0];
         node.parentNode.insertBefore(gads, node);
       })();
     </script>

     <!-- Register your companion slots -->
     <script type='text/javascript'>
       googletag.cmd.push(function() {
         // Supply YOUR_NETWORK/YOUR_UNIT_PATH in place of 6062/iab_vast_samples.
         googletag.defineSlot('/6062/iab_vast_samples', [728, 90], 'companionDiv')
             .addService(googletag.companionAds())
             .addService(googletag.pubads());
         googletag.companionAds().setRefreshUnfilledSlots(true);
         googletag.pubads().enableVideoAds();
         googletag.enableServices();
       });
     </script>

    <title>Sample javascript VPAID ads</title>
  </head>
  <body>
  <div id="container">
    <header>Sample javascript VPAID ads</header>

    <div id="videoplayer">
      <video id="content">
        <source src="http://rmcdn.2mdn.net/Demo/vast_inspector/android.webm"></source>
        <source src="http://rmcdn.2mdn.net/Demo/vast_inspector/android.mp4"></source>
      </video>
      <div id="adcontainer">
      </div>
      <button id="playpause">&#9654;</button>
      <button id="playtime">00:00:00</button>
      <button id="fullscreen">[&nbsp;&nbsp;]</button>
    </div>

    <center>
      <label for="tag">Video (<span id="videoLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <label for="tag">Non Linear (<span id="nonLinearLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <label for="tag">Testers Vpaid Ad (<span id="sampleLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <!-- <label for="tag">Game (<span id="gameLink" class="fakeLink">Sample</span>):&nbsp;</label> -->
      <textarea id="requestXMLInput" style="width:600px; height:200px;">&lt;VAST/&gt;</textarea>
    </center>

    <!-- Declare a div where you want the companion to appear. Use
          googletag.display() to make sure the ad is displayed. -->
    <div id="companionDiv">
      <script type="text/javascript">
        // Using the command queue to enable asynchronous loading.
        // The unit will not actually display now - it will display when
        // the video player is displaying the ads.
        googletag.cmd.push(function() { googletag.display('companionDiv'); });
      </script>
    </div>

    <div id="console">
    Try some of these sample javascript VPAID ads.  Click refresh to try a new one.
    </div>
  </div>
  <script type="text/javascript">
  var application = null;

  window.onload = function() {
    application = new Application();
  };
  </script>
  </body>
</html>
