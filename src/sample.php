
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <script type="text/javascript" src="//s0.2mdn.net/instream/html5/ima3.js"></script>
    <script type="text/javascript" src="application.js"></script>
    <script type="text/javascript" src="ads.js"></script>
    <script type="text/javascript" src="video_player.js"></script>

    <title>Sample javascript VPAID ads</title>
  </head>
  <body>
  <div id="container">
    <header>Sample javascript VPAID ads</header>

    <div id="videoplayer">
      <video id="content">
        <source src="android.webm"></source>
        <source src="android.mp4"></source>
      </video>
      <div id="adcontainer">
      </div>
      <button id="playpause">&#9654;</button>
      <button id="playtime">0</button>
      <button id="fullscreen">[&nbsp;&nbsp;]</button>
    </div>

    <center>
      <label for="tag">Video (<span id="videoLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <label for="tag">Non Linear (<span id="nonLinearLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <label for="tag">Testers Vpaid Ad (<span id="sampleLink" class="fakeLink">Sample</span>):&nbsp;</label>
      <textarea id="requestXMLInput" style="width:600px; height:200px;">&lt;VAST/&gt;</textarea>
    </center>

    <div id="console">
    Try some of these sample javascript VPAID ads.  Click refresh to try a new one.
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(function() {
    const t = document.getElementById('playtime');
    let isReached = false;
    setInterval(()=>{
        if ( typeof $('#adcontainer > video')[0] != "undefined" ) {
            console.log($('#adcontainer > video')[0].currentTime);
            if ( $('#adcontainer > video')[0].currentTime == 0 ) return false;
            if ( $('#adcontainer > video')[0].currentTime > 4.9 && !isReached ) {
                alert('Reached!');
                isReached = true;
            } else {
                t.innerText = $('#adcontainer > video')[0].currentTime;
            }
        }
    }, 1000);
  });
  var application = null;

  window.onload = function() {
    application = new Application();
  };
  </script>
  </body>
</html>
