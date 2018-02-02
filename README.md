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
VPAID 1.0 enabled cross-platform support for rich in-stream video ads. As VPAID acceptance has begun to permeate the industry, VPAID 2.0 brings enhancements and additions that provide support for more interactive capabilities and improved reporting.

Updates in VPAID 2.0 are summarized below:

* Document Rewrite: The content in VPAID 2.0 has been reorganized and simplified where possible to improve the flow of explanations, while also empowering non- technical readers to understand VPAID.
* VPAID and VAST: A valid VPAID object can be used in conjunction with the IAB Video Ad-Serving Template (VAST) and is highly recommended, as VAST ads that include VPAID protocols can play in both VAST and VPAID-enabled video players. VPAID 2.0 includes details about how to use VPAID protocols in a VAST ad unit.
* Support for HTML 5: HTML 5 is an emerging Web syntax that has the potential to enable cross-platform/cross-device support for the latest trends in multimedia. Details for HTML 5 use of VPAID are included in this update. See Section 8 for details.
* Technical feature updates: In order to support added features for advanced display and reporting, the following properties, methods and dispatched events have been added or changed in this update:
