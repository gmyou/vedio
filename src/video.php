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
    <script>
    /**
     * @todo request remote xml
     * 
     * */
    var vast = `<VAST xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="vast.xsd" version="3.0">
   <Ad id="1234567">
      <InLine>
         <AdSystem>GDFP</AdSystem>
         <AdTitle>Linear VPAID Example</AdTitle>
         <Description>Vpaid Linear Video Ad</Description>
         <Error>http://www.example.com/error</Error>
         <Impression>http://www.example.com/impression</Impression>
         <Creatives>
            <Creative sequence="1">
               <Linear>
                  <Duration>00:00:00</Duration>
                  <TrackingEvents>
                     <Tracking event="start">http://www.example.com/start</Tracking>
                     <Tracking event="firstQuartile">http://www.example.com/firstQuartile</Tracking>
                     <Tracking event="midpoint">http://www.example.com/midpoint</Tracking>
                     <Tracking event="thirdQuartile">http://www.example.com/thirdQuartile</Tracking>
                     <Tracking event="complete">http://www.example.com/complete</Tracking>
                     <Tracking event="mute">http://www.example.com/mute</Tracking>
                     <Tracking event="unmute">http://www.example.com/unmute</Tracking>
                     <Tracking event="rewind">http://www.example.com/rewind</Tracking>
                     <Tracking event="pause">http://www.example.com/pause</Tracking>
                     <Tracking event="resume">http://www.example.com/resume</Tracking>
                     <Tracking event="fullscreen">http://www.example.com/fullscreen</Tracking>
                     <Tracking event="creativeView">http://www.example.com/creativeView</Tracking>
                     <Tracking event="acceptInvitation">http://www.example.com/acceptInvitation</Tracking>
                  </TrackingEvents>
                  <AdParameters><![CDATA[{"videos":[ {"url":"/src/vpaid/android.mp4","mimetype":"video/mp4"}]}]]></AdParameters>
                  <VideoClicks>
                     <ClickThrough id="123">http://google.com</ClickThrough>
                     <ClickTracking id="123">http://www.example.com/click</ClickTracking>
                  </VideoClicks>
                  <MediaFiles>
                     <MediaFile apiFramework="VPAID" type="application/javascript">VpaidVideoAd.js</MediaFile>
                  </MediaFiles>
               </Linear>
            </Creative>
            <Creative sequence="1" />
         </Creatives>
      </InLine>
   </Ad>
</VAST>`;

    var parser = new DOMParser();
    var xmlDoc =  parser.parseFromString(vast,"text/xml");
    var adParameters = xmlDoc.getElementsByTagName("AdParameters");
    var MediaFile = xmlDoc.getElementsByTagName("MediaFile");

    var _creativeData = {AdParameters : adParameters[0].textContent};
    console.log(_creativeData['AdParameters']);
    var _vpAidJS = MediaFile[0].textContent;
    

    var iframe = document.createElement('iframe');
    iframe.id = "adloaderframe";
    iframe.style.width = 580+"px";
    iframe.style.height = 400+"px";
    
    document.body.appendChild(iframe);

    iframe.contentWindow.document.write('<script src="' + _vpAidJS + '"></scr' + 'ipt>'); 
    iframe.contentWindow.document.write('<div id="adSlot"><video id="adVideoSlot" controls preload="auto" width="580" ></div>'); 

    // iframe.contentWindow.document.addEventListener("DOMContentLoaded", init, false);
    // function init() {
        var fn = iframe.contentWindow['getVPAIDAd'];
        if (fn && typeof fn == 'function') {
            VPAIDCreative = fn();
            VPAIDCreative._slot = iframe.contentWindow.document.getElementById('adSlot');
            VPAIDCreative._videoSlot = iframe.contentWindow.document.getElementById('adVideoSlot');
            
            VPAIDCreative.initAd(580, 400, 'normal', 256, _creativeData, {
                slot : VPAIDCreative._slot,
                videoSlot : VPAIDCreative._videoSlot,
            });

            VPAIDCreative.startAd();

            console.log(VPAIDCreative);
        }
    // }
    </script>
</body>
</html>
