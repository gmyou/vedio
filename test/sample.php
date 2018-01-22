<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #adLayout {
        display:block;
        position:absolute;
        left:0;
        top:8px;
        background-color:#FFF;
        z-index:1;
    }
    </style>
</head>
<body>

<video id="video" controls preload="auto" width="400" height="300">
    <source src="/asset/sample.mp4" type="video/mp4"></source>
</video>

<div id="adLayout">
    <div id="ad" style="display:none"></div>
    <div id="video-controls">
        <button type="button" id="btnRewind">Rewind</button>
        <button type="button" id="btnPlayPause">Play</button>
        <input type="range" id="rngSeekBar" value="0">
        <button type="button" id="btnMute">Mute</button>
        <!-- <input type="range" id="rngVolume" min="0" max="1" step="0.1" value="1"> -->
        <button type="button" id="btnExpandToggle">Expand</button>
        <button type="button" id="btnFullscreen">Full-Screen</button>
        <!-- <button type="button" id="btnInvitation">Invitation</button> -->
        <button type="button" id="btnClose">Close</button>
        <button type="button" id="btnSkip">Skip</button>
    </div>
</div>

<div>
    <span id="adCurrentTime">0</span> / <span id="duration">0</span>
</div>

<script>
    var xml = `<VAST version="3.0">
    <Ad id="458">
        <InLine>
            <AdSystem version="1.0"><![CDATA[CrossTarget]]></AdSystem>
            <AdTitle />
            <Error><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008968403976c30aba&et=error&error_code=[ERRORCODE]]]></Error>
            <Impression><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=impression&offset=[CONTENTPLAYHEAD]]]></Impression>
            <Creatives>
                <Creative>
                    <Linear>
                        <Duration>00:00:30</Duration>
                        <TrackingEvents>
                            <Tracking event="creativeView"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=creativeView&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="start"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=start&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="firstQuartile"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=firstQuartile&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="midpoint"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=midpoint&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="thirdQuartile"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=thirdQuartile&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="complete"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=complete&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="mute"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=mute&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="unmute"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=unmute&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="pause"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=pause&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="rewind"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=rewind&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="resume"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=resume&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="fullscreen"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=fullscreen&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="expand"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=expand&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="collapse"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=collapse&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="exitFullscreen"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=exitFullscreen&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="acceptInvitationLinear"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=acceptInvitationLinear&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="closeLinear"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=closeLinear&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="skip"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=skip&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            <Tracking event="progress" offset="00:00:05"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=progress&offset=[CONTENTPLAYHEAD]]]></Tracking>
                        </TrackingEvents>
                        <VideoClicks>
                            <ClickThrough><![CDATA[mopubnativebrowser://navigate?url=http%3A%2F%2Fdev.cross-target.com%3A82%2Fmopub%2Fclick%3Fid%3D5a0a6e008967403976c30aba%26res%3Dv]]></ClickThrough>
                        </VideoClicks>
                        <MediaFiles>
                            <MediaFile delivery="progressive" type="video/mp4" width="500" height="270"><![CDATA[http://d22e9nnpe1lnrt.cloudfront.net/mp4/119/b1df7ecb39d3841da727477ba8295deaaa940d1c28eb624751579c80f258a39a/mp4_480_16X9_preset_id/b1df7ecb39d3841da727477ba8295deaaa940d1c28eb624751579c80f258a39a.mp4]]></MediaFile>
                        </MediaFiles>
                    </Linear>
                </Creative>
                <Creative>
                    <CompanionAds>
                        <Companion width="192" height="108">
                            <StaticResource creativeType="image/png"><![CDATA[http://st-dev.onnuridmc.com/banner/201603/00d89e1371a14ea55b954c98466dce24.png]]></StaticResource>
                            <TrackingEvents>
                                <Tracking event="creativeView"><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=c_creativeView&offset=[CONTENTPLAYHEAD]]]></Tracking>
                            </TrackingEvents>
                            <CompanionClickThrough><![CDATA[mopubnativebrowser://navigate?url=http%3A%2F%2Fdev.cross-target.com%3A82%2Fmopub%2Fclick%3Fid%3D5a0a6e008967403976c30aba%26res%3Dc]]></CompanionClickThrough>
                        </Companion>
                    </CompanionAds>
                </Creative>
            </Creatives>
        </InLine>
    </Ad>
    </VAST>`;

    var eventTracker = {
        'creativeView':'',
        'start':'',
        'firstQuartile':'',
        'midpoint':'',
        'thirdQuartile':'',
        'complete':'',
        'mute':'',
        'unmute':'',
        'pause':'',
        'rewind':'',
        'resume':'',
        'fullscreen':'',
        'expand':'',
        'collapse':'',
        'exitFullscreen':'',
        'acceptInvitationLinear':'',
        'closeLinear':'',
        'skip':'',
        'progress':''
    };

    // quarters
    var quarters = {
        'impression':0,
        'start':0,
        'firstQuartile':25,
        'midpoint':50,
        'thirdQuartile':75,
        'complete':100
    };

    var parser = new DOMParser();
    var xmlDoc =  parser.parseFromString(xml,"text/xml");
    var mediaFile = xmlDoc.getElementsByTagName("MediaFile");
    var tracking = xmlDoc.getElementsByTagName("Tracking");

    var offsetTime = -1;
    for (let index = 0; index < tracking.length; index++) {
        var element = tracking[index];
        if ( element.getAttribute("event") == 'progress' ) {
            var strOffsetTime = element.getAttribute("offset");
            var a = strOffsetTime.split(':'); // split it at the colons

            // minutes are worth 60 seconds. Hours are worth 60 minutes.
            var offsetTime = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
        }
        if ( eventTracker.hasOwnProperty(element.getAttribute("event")) )
            eventTracker[element.getAttribute("event")] = element.textContent;
    }
    console.log( 'Offset Time : ', offsetTime );
    // console.log( 'eventTracker : ', eventTracker );

    var width = mediaFile[0].getAttribute("width");
    var height = mediaFile[0].getAttribute("height");
    var src = mediaFile[0].textContent;

    var v = `
    <video id="adVideo" preload="auto" width="${width}" height="${height}">
       <source src="${src}" type="video/mp4"></source>
    </video>`;

    var ad = document.getElementById("ad");
    ad.innerHTML = v;
    ad.style.display = 'inline';

    var adLayout = document.getElementById("adLayout");
    var adVideo = document.getElementById("adVideo");

    document.addEventListener("DOMContentLoaded", init, false);
    function init() {
        if ( adVideo ) {
            var impTracker = xmlDoc.getElementsByTagName("Impression")[0].textContent;
            console.log("Impression", impTracker);
        }
    }

    // duration
    var duration = 0, currentTime = 0;
    adVideo.onloadedmetadata = function() {
        duration = adVideo.duration;
        document.getElementById("duration").innerHTML = '<strong>'+duration+'</strong>';
        console.log('Onloadedmetadata.duration : ', duration);
    };

    // Progress Offset Time
    let readched = false, firstQuated = false, midpointed = false, thirdQuarted = false, ended = false;
    adVideo.ontimeupdate = function() {
        duration = adVideo.duration;
        currentTime = adVideo.currentTime;

        document.getElementById("duration").innerHTML = '<strong>'+duration+'</strong>';
        if ( currentTime >= offsetTime && !readched) {
            document.getElementById("adCurrentTime").innerHTML = '<strong>'+currentTime+'</strong>';
            readched = true;
            console.log('Reached Offset Time', eventTracker['progress']);
        } else {
            document.getElementById("adCurrentTime").innerHTML = currentTime;
        }

        var firstQuartile = duration * quarters.firstQuartile / 100;
        var midpoint = duration * quarters.midpoint / 100;
        var thirdQuartile = duration * quarters.thirdQuartile / 100;
        if ( currentTime >= firstQuartile && !firstQuated ) {
            firstQuated = true;
            console.log('FirstQuartile ', eventTracker['firstQuartile']);
        }
        if ( currentTime >= midpoint && !midpointed ) {
            midpointed = true;
            console.log('Midpoint ', eventTracker['midpoint']);
        }
        if ( currentTime >= thirdQuartile && !thirdQuarted ) {
            thirdQuarted = true;
            console.log('ThirdQuartile ', eventTracker['thirdQuartile']);
        }
        if ( currentTime == duration && !ended ) {
            ended = true;
            console.log('Complete ', eventTracker['complete']);
        }
    };

    // creativeView
    adVideo.onloadeddata = function() {
        console.log("CreativeView", eventTracker['creativeView']);
    };

    // start, resume
    let started = false;
    adVideo.onplaying = function() {
        if ( !started) {
            started = true;
            console.log("Start", eventTracker['start']);
        }
    };

    // mute, unmute
    var muted = false;
    adVideo.onvolumechange = function() {
        if ( adVideo.muted ) {
            muted = true
            console.log('Mute ', eventTracker['mute']);
        }
        if ( !adVideo.muted && muted ) {
            console.log('Unmute ', eventTracker['unmute']);
        }
    };

    // pause
    adVideo.onpause = function() {
        console.log('Pause ', eventTracker['pause']);
    };

    // rewind
    var btnRewind = document.getElementById("btnRewind");
    btnRewind.addEventListener('click', function(){
        adVideo.currentTime = 0;
        console.log('Rewind ', eventTracker['rewind']);
    });

    // expand, collapse
    var isExpanded = false;
    var btnExpandToggle = document.getElementById("btnExpandToggle");
    btnExpandToggle.addEventListener('click', function(){
        if ( !isExpanded ) {
            isExpanded = true;
            adVideo.style.width = '100%';
            adVideo.style.height = height * adVideo.style.width/width;
            btnExpandToggle.innerText = 'Collapse';
            console.log('Expand ', eventTracker['expand']);
        } else {
            isExpanded = false;
            adVideo.style.width = width;
            btnExpandToggle.innerText = 'Expand';
            console.log('Collapse ', eventTracker['collapse']);
        }
    });

    // skip
    var btnSkip = document.getElementById("btnSkip");
    btnSkip.addEventListener('click', function(){
        console.log('Skip ', eventTracker['skip']);
        adLayout.style.display = 'none';
        document.getElementById("video").play();
    });

    // Invitation
    // var btnInvitation = document.getElementById("btnInvitation");
    // btnInvitation.addEventListener('click', function(){
    //     console.log('AcceptInvitationLinear ', eventTracker['acceptInvitationLinear']);
    // });

    // Close
    var btnClose = document.getElementById("btnClose");
    btnClose.addEventListener('click', function(){
        console.log('Close ', eventTracker['closeLinear']);
        adLayout.style.display = 'none';
        document.getElementById("video").play();
    });

    adVideo.addEventListener('click', function(){
        var vcTracker = xmlDoc.getElementsByTagName("Impression")[0].textContent;
        console.log('VideoClick ', vcTracker);
    });

    // Close
    var btnPlayPause = document.getElementById("btnPlayPause");
    btnPlayPause.addEventListener('click', function(){
        if ( adVideo.paused ) {
            btnPlayPause.innerText = 'Pause';
            adVideo.play();
        } else {
            btnPlayPause.innerText = 'Play';
            adVideo.pause();
        }
    });

    var rngSeekBar = document.getElementById("rngSeekBar");
    rngSeekBar.addEventListener("change", function() {
        adVideo.currentTime = rngSeekBar.value;
    }, false);

    var btnMute = document.getElementById("btnMute");
    btnMute.addEventListener("click", function (evt) {
        if (adVideo.muted) {
            btnMute.innerText = 'Mute';
            adVideo.muted = false;
        } else {
            btnMute.innerText = 'Unmute';
            adVideo.muted = true;
        }
    }, false);

    // fullscreen
    var isFullscreen = false;
    adVideo.addEventListener('webkitfullscreenchange', fullScreenHandler);
    adVideo.addEventListener('mozfullscreenchange', fullScreenHandler);
    adVideo.addEventListener('msfullscreenchange', fullScreenHandler);
    adVideo.addEventListener('fullscreenchange', fullScreenHandler);
    function fullScreenHandler() {
        if ( !isFullscreen ) {
            isFullscreen = true;
            console.log('Fullscreen ', eventTracker['fullscreen']);
        } else {
            isFullscreen = false;
            console.log('ExitFullscreen ', eventTracker['exitFullscreen']);
        }
    }

    var btnFullscreen = document.getElementById("btnFullscreen");
    btnFullscreen.addEventListener("click", function (evt) {
        if (adVideo.requestFullscreen) {
            adVideo.requestFullscreen();
        } else if (adVideo.mozRequestFullScreen) {
            adVideo.mozRequestFullScreen();
        } else if (adVideo.webkitRequestFullscreen) {
            adVideo.webkitRequestFullscreen();
        }
    }, false);    

    //  any video error will fail with message 
    adVideo.addEventListener("error", function (err) {
        var errorTracker = xmlDoc.getElementsByTagName("Error")[0].textContent;
        console.log('Error ', errorTracker);
    }, true);


</script>

</body>
</html>