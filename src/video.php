<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Video Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    #adloaderframe {
        margin:0;
        padding:0;
        border:0;
    }
    </style>
</head>
<body>
    <div class="videoContainer">
        <video controls preload="auto" width="580" >
            <source src="/asset/sample.mp4" type="video/mp4" />
            <p>Your browser does not support the video tag.</p>
        </video>
    </div>
    <script src="/asset/js/jquery.js"></script>
    <script>
    $(function() {
        <?php
        $url = 'http://api.video.exelbid.com/src/vpaid2jslinear.xml';
        $xml = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA); 
        if($xml ===  FALSE) 
        { 
            //deal with error 
        } 
        else { 
            //do stuff 
        } 
        ?>
        var xmlString = `<?= $xml->asXML(); ?>`;

        var doc = new DOMParser().parseFromString(xmlString,'text/xml');

        function getCountByXpath(path, doc) {
            return doc.evaluate( 'count('+path+')', doc, null, XPathResult.ANY_TYPE, null ).numberValue;
        }

        function getElementByXpath(path, doc) {
            return doc.evaluate(path, doc, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
        }

        var adParameters = getElementByXpath("//AdParameters", doc);
        var MediaFile = getElementByXpath("//MediaFile[@apiFramework='VPAID']", doc);

        var _creativeData = {AdParameters : adParameters.childNodes["0"].data};
        var _vpAidJS = MediaFile.childNodes["0"].data;
        console.log(_creativeData['AdParameters']);
        console.log(_vpAidJS);


        var iframe = document.createElement('iframe');
        iframe.id = "adloaderframe";
        iframe.style.width = 580+"px";
        iframe.style.height = 400+"px";
        
        document.body.appendChild(iframe);

        iframe.contentWindow.document.write('<script src="' + _vpAidJS + '"></scr' + 'ipt>'); 
        iframe.contentWindow.document.write('<div id="adSlot"><video id="adVideoSlot" controls preload="auto" width="580" /></div>'); 

        var fn = iframe.contentWindow['getVPAIDAd'];
        if (fn && typeof fn == 'function') {

            var midpointCount = getCountByXpath("//Tracking[@event='midpoint']", doc);
            console.log(midpointCount);
            var midpointTrakers = [];

            for (let index = 1; index <= midpointCount; index++) {
                var midpointTraker = getElementByXpath("//Tracking[@event='midpoint']["+index+"]", doc);
                midpointTrakers.push(midpointTraker.childNodes["0"].data)
            }
            
            console.log(midpointTrakers);
            
            VPAIDCreative = fn();

            var defaultTraker = '';
            var eventsCallbacks = [
                {event: 'AdLoaded',             tracker: defaultTraker},
                {event: 'AdDurationChange',     tracker: defaultTraker},
                {event: 'AdError',              tracker: defaultTraker},
                {event: 'AdStarted',            tracker: defaultTraker},
                {event: 'AdStopped',            tracker: defaultTraker},
                {event: 'AdSizeChange',         tracker: defaultTraker},
                {event: 'AdPaused',             tracker: defaultTraker},
                {event: 'AdPlaying',            tracker: defaultTraker},
                {event: 'AdExpanded',           tracker: defaultTraker},
                {event: 'AdSkipped',            tracker: defaultTraker},
                {event: 'AdVolumeChange',       tracker: defaultTraker},
                {event: 'AdVideoStart',         tracker: defaultTraker},
                {event: 'AdVideoFirstQuartile', tracker: defaultTraker},
                {event: 'AdVideoMidpoint',      tracker: midpointTrakers},    // Mulit Element Test
                {event: 'AdVideoThirdQuartile', tracker: defaultTraker},
                {event: 'AdVideoComplete',      tracker: defaultTraker}
            ];

            for (let index = 0; index < eventsCallbacks.length; index++) {
                const element = eventsCallbacks[index];
                console.log('ADS.event: ', element.event);
                VPAIDCreative.eventsCallbacks_[element.event] = function() {
                    console.log('ADS.calledBack.event: ', element.event);
                    if ( element.tracker ) {
                        if ( Array.isArray(element.tracker) ) {
                            for (let index = 0; index < element.tracker.length; index++) {
                                const _tracker = element.tracker[index];
                                console.log('ADS.calledBack.tracker: ', _tracker);
                            }
                        } else {
                            console.log('ADS.calledBack.tracker: ', element.tracker);
                        }
                    }
                }
            }

            VPAIDCreative._slot = iframe.contentWindow.document.getElementById('adSlot');
            VPAIDCreative._videoSlot = iframe.contentWindow.document.getElementById('adVideoSlot');
            
            VPAIDCreative.initAd(580, 400, 'normal', 256, _creativeData, {
                slot : VPAIDCreative._slot,
                videoSlot : VPAIDCreative._videoSlot,
            });

            VPAIDCreative.startAd();

            VPAIDCreative._videoSlot.onpause = function() {
                VPAIDCreative.pauseAd();
            };

            VPAIDCreative._videoSlot.onvolumechange = function() {
                VPAIDCreative.setAdVolume(this.volume);
            };

            VPAIDCreative._videoSlot.onplaying = function() {
                VPAIDCreative.resumeAd();
            };

        }
    });
    </script>
</body>
</html>
