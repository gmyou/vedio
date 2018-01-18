
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

  <div id="banner">
    <script type='text/javascript'>
      !function (w,d,s,u,t,ss,fs) {
          if(w.exelbidtag)return;t=w.exelbidtag={};if(!window.t) window.t = t;
          t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
          t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
          fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
      }(window,document,'script','//st2.exelbid.com/js/ads.js');
    </script>

    <script type='text/javascript'>
        // You can get add request result
        function ExelbidResponseCallback_187afd1e4280b2678be3dbd23570278b5ebb132f(result){
            if(result.status == 'OK'){
                console.log('OK');
            }else if(result.status == 'NOBID'){
                console.log('NOBID');
            }else if(result.status == 'ERROR'){
                console.log('ERROR');
            }
        };
        exelbidtag.push(function () {
            exelbidtag.initAdBanner('187afd1e4280b2678be3dbd23570278b5ebb132f', 320, 50, 'div-exelbid-187afd1e4280b2678be3dbd23570278b5ebb132f')
                .setResponseCallback(ExelbidResponseCallback_187afd1e4280b2678be3dbd23570278b5ebb132f)
                .setTestMode(true);
        });
    </script>
    <!-- Ad Space -->
    <div id='div-exelbid-187afd1e4280b2678be3dbd23570278b5ebb132f'>
        <script type='text/javascript'>
            exelbidtag.push(function () {
                exelbidtag.loadAd('187afd1e4280b2678be3dbd23570278b5ebb132f');
            });
        </script>
    </div>
  </div>

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
