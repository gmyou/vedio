# Video Player With VPAID & VAST

## Video
* HTML5
* Detect Play Time (Like 15sec.)

## VAST
* Version v3.0
2008 VAST 시작 > 2009 > 2012

### 5 가지 형식이 옵션으로 제공

1. 선형 광고, 
2. 비선형 광고, 
3. 건너 뛸 수있는 선형 광고, 
4. 컴패니언이있는 선형 광고 및 
5. 광고 모음 (순서가 지정된 광고 그룹)


### 가이드 라인
1. Video Ad Measurement Guidelines (VAMG): 이벤트를 추적하는 방법을 설명합니다.

2. Video Ad Serving Template (VAST): 광고 서버에서 동영상 플레이어로 전송되는 동영상 광고 응답의 일반적인 구조를 사용합니다.

3. Video Player Ad Interface Definition (VPAID): 대화 형 광고와 그것을 렌더링하는 비디오 플레이어 사이에 통신 프로토콜을 설정합니다.

4. Video Multi Ads Playlist (VMAP): 광고 서버에서 동영상 플레이어로 전송 된 동영상 광고의 재생 목록에 대한 구조를 사용합니다.

5. Digital Video Ad Format Guidelines and Best Practices: 최상의 광고 환경을 위해 비디오 광고가 준수해야하는 일반적인 형식 및 우수 사례에 대해 설명합니다.

6. Digital Video In-Stream Ad Metrics Definitions: 비디오 광고 효과를 측정하기위한 업계에서 인정하는 지표를 정의합니다.

![diagram](https://raw.githubusercontent.com/gmyou/video/master/asset/readme/1-1.png)

### 변경점
* NonLinear Wrapper Change: NonLinear 리소스 파일은 래퍼 VAST 응답에 필요하지 않습니다. VAST 3.0은 InLine NonLinear 소재와 Wrapper NonLinear 소재의 차이점을 명확히합니다. 추적 요소 만 래퍼 비선형과 관련됩니다.

* Compliance Formats: VAST는 5 가지 광고 형식을 지원합니다. 게시자는 VAST 3.0을 준수하기 위해 다섯 가지 모델 모두를 지원할 필요가 없습니다. VAST 3.0 동영상 콘텐츠 게시자는 규정 준수에 대한 가이드 라인을 최소한으로 유지하면서 하나 이상의 VAST 광고 형식에 대한 지원을 선언 할 수 있습니다.

* Support for Ad Pods: <Ad> 요소에서 시퀀스 속성을 사용하면 여러 개의 광고를 순차 광고 모음으로 그룹화하는 VAST 응답의 형식을 지정할 수 있습니다.

* Support for Skippable Linear Ads: 시청자가 건너 뛸 수있는 광고를위한 선택적 광고 게재 모델을 통해 게시자는 게시자와 광고주가 모든 방법을 통해 재생되는 광고를 기반으로 결제를 협상 할 수있는 비즈니스 모델을 지원할 수 있습니다.

* Support for in-ads privacy notice: 동영상 광고에 여러 광고 서버가 관련되어있는 경우 온라인 행동 광고 (OBA) 자체 규제를 지원하는 광고 개인 정보 보호 정책을 표시하는 것이 어려울 수 있습니다. VAST 3.0은 광고 내 개인 정보 취급 방침에 대한 모범 사례 가이드 라인을 공유합니다.

* Better error reporting: 동영상 플레이어가 오류 코드 목록을 개선하면 광고가 제대로 게재되지 않을 때보다 구체적인 세부 정보를보고 할 수 있습니다. 결과 문제 해결 데이터는 시간이 지남에 따라 비디오 광고 기술을 향상시키는 데 도움이 될 수 있습니다.

* More tracking events: 일부 추적 이벤트 및 속성이 추가되어 게재 된 광고에 대한 세부 정보를 제공하고 건너 뛸 수있는 광고와 같은 새로운 광고 형식을 지원합니다.

[Read More](https://github.com/gmyou/video/wiki#vast-v30)

## VPAID
* Version 2.0

### Executive Summary
IAB의 동영상 플레이어 광고 게재 인터페이스 정의 (VPAID)는 동영상 플레이어와 광고 단위 간의 공통 인터페이스를 설정하여 풍부한 대화형 인스트림 광고 경험을 제공합니다.

인스트림 동영상 광고주는 a) 시청자에게 풍부한 광고 경험을 제공하고 b) 시청한 광고 경험을 보고하는 광고재생 및 사용자 상호 작용 세부 정보를 캡처하여 동영상 광고 캠페인 게재에 대한 두 가지 중요한 실행 목표를 설정합니다. 일반적인 동영상 플레이어 기능이없는 세상에서 이러한 목표를 달성하기 위해 광고주는 모든 고유한 동영상 플레이어에 대한 광고 소재의 여러 특수 버전을 개발해야합니다 - 규모가 크지 않은 비싼 제안(?).

다른 IAB 사양인 동영상 광고 게재 템플릿 (VAST)은 모든 호환 동영상 플레이어에서 동영상 광고를 게재 할 수 있도록하는 동영상 플레이어에 대한 일반적인 광고 응답 형식을 제공합니다. 그러나 VAST만으로는 풍부한 대화형 기능을 지원하지 않습니다. VAST만으로는 실행 가능하지 않은 상대적으로 간단한 인스트림 광고 형식만 지원합니다. 이러한 간단한 광고 형식은 양방향 사용자 경험을 제공하지 않으며 광고주가 풍부한 상호 작용 세부 정보를 수집하는 것을 허용하지 않습니다.

VPAID를 VAST 레이어하면 고급 솔루션이 제공됩니다. VPAID는 동영상 플레이어 및 광고 단위 사이에 공통의 통신 프로토콜을 설정합니다. 그러면 광고 재생의 일환으로 소프트웨어 로직을 수행 할 필요가있는 하나의 "실행 광고"를 배달의 동영상 콘텐츠와 함께 비디오 플레이어. 또한 실행 가능한 광고 단위는 동영상 플레이어에서 공통 기능 세트를 예상하고 이에 의존 할 수 있습니다. VPAID를 사용하면 동영상 플레이어는 가능한 광고 단위의 일반적인 기능을 기대할 수 있습니다. VPAID 광고를 사용하는 광고주는 시청자에게 풍부한 광고 경험을 제공하고 광고의 재생뿐만 아니라 풍부한 상호 작용의 세부 정보를 수집하는 것이 중요합니다.

VPAID의 채용에 의해, 광고주는 동영상 캠페인의 디스플레이 환경을보다 효율적으로 관리 할 수 있습니다. 또한 VPAID 호환 동영상 플레이어는 더 다양하고 인터랙티브 동영상 광고를 사용할 수 있기 때문에 VPAID 준수 게시자는 더 인스 트림 동영상 광고를 판매 할 것으로 예상됩니다.

VPAID를 사용하여 IAB는 게시자, 광고주 판매자에게 다음과 같은 시장의 비 효율성을 해결하는 것을 목표로하고 있습니다.

* 일반적인 비디오 광고 제공 기술을 늘려 비디오 출판사 대리인의 광고 서버 나 네트워크에서 비디오 광고 게재를 쉽게 받아 들일 수 있도록한다.
* 광고주가 개발하는 공통의 기술 사양을 제공함으로써 창조적 인 제작 비용을 절감하고 비즈니스 ROI를 향상시킨다.
* 동영상 광고의 유동성을 향상시키고, 각 매체와의 통합 비용을 줄일 수 있습니다.

동영상 플레이어의 인터랙티브 광고 경험을 향상 시키려면이 문서에서 설명하는 VPAID 사양에 동영상 플레이어를 포함해야합니다. 이러한 사양은 창의성과 혁신 성을 염두에 정의되어 있으며, 비디오 플레이어의 디자인을 제한하는 것은 아닙니다.

![](https://github.com/gmyou/video/blob/master/asset/vpaid/1.1.png?raw=true)

### 변경점

* Document Rewrite: VPAID 2.0의 내용이 가능한 경우 설명의 흐름을 개선하고 비 기술적 인 독자에게 VPAID를 이해하도록 권한을 부여하면서 재구성 및 간소화되었습니다.
* VPAID and VAST: 유효한 VPAID 개체는 IAST 동영상 광고 게재 템플릿 (VAST)과 함께 사용할 수 있으며 VAST 및 VPAID 지원 동영상 플레이어에서 VPAID 프로토콜을 포함하는 VAST 광고를 재생할 수 있으므로 적극 권장합니다. VPAID 2.0에는 VAST 광고 단위에서 VPAID 프로토콜을 사용하는 방법에 대한 세부 정보가 포함되어 있습니다.
* Support for HTML 5: HTML 5는 최신 멀티미디어 경향에 대한 플랫폼 간 / 장치 간 지원을 가능하게하는 신흥 웹 구문입니다. VPAID의 HTML 5 사용에 대한 세부 정보는이 업데이트에 포함되어 있습니다. 자세한 내용은 8 절을 참조하십시오..
* Technical feature updates: 고급 디스플레이 및보고를 위해 추가 된 기능을 지원하기 위해이 업데이트에서 다음 속성, 메서드 및 전달 된 이벤트가 추가되거나 변경되었습니다.

  * Methods
    * resizeAd(): clarification has been added about how to use this method in fullscreen mode
    * skipAd(): added to enable the video player to include controls for allowing its audience to skip ads. The new AdSkipped event is dispatched by the ad unit in response to this call.
    
  * Properties
    * adLinear: clarification added to indicate when the property should be used
    * adWidth: added to provide current width of ad unit after ad has resized
    * adHeight: added to provide current height of ad unit after ad has resized
    * adDuration: reports total duration to more clearly report on the changing duration, which is confusing when both remaining time and duration can change
    * adCompanions: included to support ad companions in VPAID, when companion information is not available until after the VPAID .swf file has already loaded.
    * adIcons: included to support various industry programs which require the overlay of icons on the ad.
    * adSkippableState: in support of skippable ads, this feature enables the video player to identify when the ad is in a state where it can be skipped.
    
  * Dispatched Events
    * AdStopped: clarification added to indicate that the AdStopped event is to be used as a response to stopAd() (or dispatched when the ad has stopped itself) rather than as a request to the video player to call stopAd().
    * AdSizeChange: added to enable confirmation to a resizeAd() method call from the video player
    * AdDurationChange: instead of reporting AdRemainingTimeChange, AdDurationChange reports changes on the total duration that can change with user interaction. In the event of an AdDurationChange, both adRemainingTime and adDuration properties are updated
    * AdInteraction: added to capture users’ interactions with the ad other than the ClickThru events.
    * AdSkipped: added to support ads that include skip controls. This event can be triggered by controls in the ad unit or in response to the video player calling the skipAd() method.
    * AdSkippableStateChange: added to support skippable ads, this event enables the ad unit to report when the ad is in a skippable state
