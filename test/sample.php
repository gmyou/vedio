<link href="http://vjs.zencdn.net/5.4.4/video-js.css" rel="stylesheet">
 
<video id="video" controls preload="auto" width="400" height="300">
    <source src="/asset/sample.mp4" type="video/mp4"></source>
</video>
<div id="ad" style="display:none"></div>
<div id="adCurrentTime">0</div>

<script>
    var xml = `<VAST version="3.0">
    <Ad id="456">
        <InLine>
            <AdSystem version="1.0"><![CDATA[CrossTarget]]></AdSystem>
            <AdTitle />
            <Error><![CDATA[http://dev.cross-target.com:82/mopub/event?id=5a0a6e008967403976c30aba&et=error&error_code=[ERRORCODE]]]></Error>
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
                        <MediaFile delivery="progressive" type="video/mp4" width="320" height="480"><![CDATA[http://d22e9nnpe1lnrt.cloudfront.net/mp4/119/b1df7ecb39d3841da727477ba8295deaaa940d1c28eb624751579c80f258a39a/mp4_480_16X9_preset_id/b1df7ecb39d3841da727477ba8295deaaa940d1c28eb624751579c80f258a39a.mp4]]></MediaFile>
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
    <video id="adVideo" controls preload="auto" width="${width}" height="${height}">
       <source src="${src}" type="video/mp4"></source>
    </video>`;

    var ad = document.getElementById("ad");
    ad.innerHTML = v;
    ad.style.display = 'inline';

    var adVideo = document.getElementById("adVideo");

    // duration
    var duration = 0;
    adVideo.onloadedmetadata = function() {
        duration = adVideo.duration;
        console.log('onloadedmetadata.duration : ', duration);
    };

    // Progress Offset Time
    let readched = false;
    adVideo.ontimeupdate = function() {
        if ( adVideo.currentTime >= offsetTime && !readched) {
            document.getElementById("adCurrentTime").innerHTML = '<strong>'+adVideo.currentTime+'</strong>';
            readched = true;
            console.log('Reached Offset Time', eventTracker['progress']);
        } else if ( !readched) {
            document.getElementById("adCurrentTime").innerText = adVideo.currentTime;
        }
    };

    // creativeView
    adVideo.onloadeddata = function() {
        console.log("CreativeView", eventTracker['creativeView']);
    };

    // start
    let started = false;
    adVideo.onplaying = function() {
        if ( !started) {
            started = true;
            console.log("Start", eventTracker['start']);
        }
    };
</script>