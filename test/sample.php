<link href="http://vjs.zencdn.net/5.4.4/video-js.css" rel="stylesheet">
 
<video id="video" controls preload="auto" width="400" height="300">
    <source src="/asset/sample.mp4" type="video/mp4"></source>
</video>
<div id="ad" style="display:none"></div>

<script src="/asset/js/jquery.js"></script>
<script>
$(function() {
    const xml = `<VAST version="3.0">
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

    const     xmlDoc = $.parseXML( xml ),
                $xml = $( xmlDoc ),
           MediaFile = $xml.find( "MediaFile" );
            Tracking = $xml.find( "Tracking" );


    let offsetTime = -1;
    $(Tracking).each(function(){
        if ( 'progress' == $(this).attr('event') ) {
            const strOffsetTime = $(this).attr('offset');
            offsetTime = parseInt(strOffsetTime.substring(strOffsetTime.length-2, strOffsetTime.length));
        }
    });
    console.log('offsetTime : ', offsetTime);

    const width = $(MediaFile[0]).attr('width');
    const height = $(MediaFile[0]).attr('height');
    const src = $(MediaFile[0]).text();

    const v = `
    <video id="adVedio" controls preload="auto" width="${width}" height="${height}">
       <source src="${src}" type="video/mp4"></source>
    </video>`;

    $("#ad").html(v).show();

    let isReached = false;
    if (offsetTime != -1) {
        setInterval(() => {
            if ( typeof $('#adVedio')[0] != "undefined" ) {
                
                if ( $('#adVedio')[0].currentTime == 0 ) return false;
                if ( $('#adVedio')[0].currentTime > offsetTime && !isReached ) {
                    alert('Reached!');
                    isReached = true;
                } else if ( !isReached ) {
                    console.log($('#adVedio')[0].currentTime);
                }
    
            }
        }, 500)
    }
});
</script>