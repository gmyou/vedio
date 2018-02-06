player situations including some of the following: 
* Video players in **web pages**
* Video players in **mobile-optimized web pages**
* Video players in **mobile applications**
* Video players in **Internet-connected TVs**
* Video playback through **IPTV** or **other set-top-box environments**

>일반적으로, VAST에서 지원하는 ad-serving 프로세스는 다음과 같습니다. 
1. 비디오 광고를 요청 한다. 
2. VAST 응답 표기 한다.
3. 서버로 광고 노출이나 기타 이벤트와 같은 트레킹 정보로 전송 한다.
위와 같은 프로세스는 비디오 플레이어와 하나 또는 다수의 애드 서버 (주로 퍼블리셔를 의미) 간 다이렉트로도 가능 하다. 


## Single AD Server
![how_vast_works_on_single_server](https://github.com/gmyou/video/blob/master/asset/wiki/1.1.png?raw=true)

1. VAST Request: 비디오 플레이어가 애드 서버에 VAST response를 위해 call 한다.
2. VAST Inline Response: 애드 서버는 모든 미디어파일과 트레킹 URL등 광고 게재와 트레킹을 위한 정보들을 포함한 인라인으로 response 한다
3. Tracking URIs Pinged: 비디오 플레이어는 관련 이벤트가 광고에서 발생할 때 트레킹 URL를 제공하며, 제공된 트레킹 URL으로부터 트레킹 리소스를 요청한다. 

## Mulit AD Server

![how_vast_works_on_multi_server](https://github.com/gmyou/video/blob/master/asset/wiki/1.1-1.png?raw=true)

1. VAST Request: 비디오 플레이어가 최초 (Primary) 애드 서버로 request 전송 한다. 
2. VAST Redirect: 캠페인을 설정하는 동안, 광고주 (대행사 또는 네트워크)가 두 번째 애드 서버가 리소스를 식별할 수 있는 VAST Wrapper response 를 전송한다. 다음 예는 VAST 래퍼 응답의 일부다.:
```xml
<VAST> <Ad> <Wrapper> ... <VASTAdTagURI>
http://SecondaryAdServer.vast.tag
</VASTAdTagURI> ...</Wrapper> </Ad> </VAST>
```
3. VAST Request: VAST 응답 분석 후, 비디오 플레이어는 Step. 2의 최초 VAST response에서 제공된 URL을 사용하여 두 번째 광고 서버에 request 전송 한다. 
4. VAST Inline Response: 두 번째 애드 서버는 광고 게재에 필요한 모든 정보들을 포함한 VAST response를 전송한다. 아래 예는 인라인 응답에 사용 된 개요 VAST 요소를 보여준다.:
```xml
<VAST> <Ad> <InLine>
...
</InLine> </Ad> </VAST>
```
5. Tracking URIs Pinged: 광고에서 특정 이벤트가 발생하면, 그 즉시 제공된 트레킹 URL을 통해 각각의 광고 서버에 전달 된다. 

> 위의 상황은 하나 또는 그 이상의 공급업체 애드 서버가 프로세스 내에 존재할 때 주로 발생하며, 업체들 간 모든 트레킹 정보를 공유 받고 싶을 때 발생 한다.

> 애드 서버가 두 개 이상인 경우가 대부분이기 때문에, 두 번째 애드 서버는 세 번째 애드 서버에게 VAST Wrapper를 reponse하며, 이 행위는 다음 애드 서버에도 반복적으로 발생한다. 하지만, 마지막 애드 서버는 반드시 VAST 인라인 response로 응답 해야 한다.