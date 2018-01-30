<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/asset/css/video.css" />
    <script src="/asset/js/jquery.js"></script>
    <script src="/asset/js/video.js"></script>
</head>
<body>
    <?= time() ?>
    <?= var_dump(time()) ?>
    <?php
    $date = date_create();
    echo date_timestamp_get($date)
    ?>
    <div class="videoContainer">
        <video id="myVideo" controls preload="auto" width="580" >
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
</body>
</html>
