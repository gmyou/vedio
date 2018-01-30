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


## VPAID
* Version 2.0