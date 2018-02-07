<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/asset/css/video.css" />
    <script src="interface.js"></script>
</head>
<body>
    <div id="mySlot" class="videoContainer">
        <video id="myVideoSlot" controls preload="auto" width="580" >
            <source src="/asset/sample.mp4" type="video/mp4" />
            <p>Your browser does not support the video tag.</p>
        </video>
        <div class="caption">Prometheus</div>
        <div class="control">
            <div class="btmControl">
                <div class="btnPlay btn" title="Play/Pause video"><span class="icon-play"></span></div>
                <div class="progress-bar">
                    <div class="progress">
                        <span class="bufferBar"></span>
                        <span class="timeBar"></span>
                    </div>
                </div>
                <div class="sound sound2 btn" title="Mute/Unmute sound"><span class="icon-sound"></span></div>
                <div class="btnFS btn" title="Switch to full screen"><span class="icon-fullscreen"></span></div>
            </div>
        </div>
    </div>
    <script>
    iframe = document.createElement('iframe');
    iframe.id = "adloaderframe";
    document.body.appendChild(iframe);

    // ‘url’ points to the ad js file
    url = 'implemet.js';
    iframe.contentWindow.document.write('<script src="' + url + '"></scr' + 'ipt>'); 
    var fn = iframe.contentWindow['getVPAIDAd'];
    if (fn && typeof fn == 'function') { 
        VPAIDCreative = fn();
        VPAIDCreative._slot = document.getElementById('mySlot');
        VPAIDCreative._videoSlot = document.getElementById('myVideoSlot');
        // function (width, height, viewMode, desiredBitrate, creativeData, environmentVars) {
        VPAIDCreative.initAd(400, 300, 'normal', 256, '/src/vpaid/android.mp4', {
            slot : VPAIDCreative._slot,
            videoSlot : VPAIDCreative._videoSlot,
        });
        VPAIDCreative.startAd();
        console.log(VPAIDCreative);
    }
    </script>
</body>
</html>
