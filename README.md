# An-exchange-diary
교환일기 어플리케이션

교환일기 앱 개발

1. 요구 기술
1) 서버
- STS + JSON
- AWS Ubuntu

2) DBA
- Oracle MySQL
- AES_DECRYPT 암호화, 복호화 (양방향 암호화)
- AWS Ubuntu

3) Android
- 안드로이드 스튜디오 (8.1 오레오)
- SQLITE

4) 공통
<<<<<<< HEAD
- Github 을 통한 SVC
=======
- Git을 통한 SVC
>>>>>>> 89e988bda98342c643888d69a11ef81fd21ad24a

2. 씬
-Login
구성 : Logo, Editbox(ID, PW), Button(Login, 회원가입, 아이디 / 비밀번호 찾기)

-Loading 
구성 : Image, SQLITE 불러오기

-회원가입
구성 : Editbox(ID, PW, Email, Name, Age, Sex, Pno, User_ID)

-정보수정
구성 : 회원가입과 동일, 단 Editbox 중 ID 항목은 비활성화 한다.

-메인메뉴
구성 : 타임라인, NavBar, Scroll

-NavBar
구성 : 타임라인 이동용 이미지버튼, 3줄 메뉴 버튼(작성, 정보수정, 로그아웃)

-작성
구성 : 0 / 500 의 Text Editbox, Button(등록, 작성 취소)

-로그아웃
구성 : NavBar 에서 선택하며 팝업 형식

3. 시나리오
어플리케이션 실행 -> 로그인 화면 (로그인 되어있으면 패스) -> 로딩화면 
-> 로딩화면 내에서 SQLITE 로 저장된 타임라인 데이터 가져오기 -> 메인화면

1) 타임라인 작성 -> 0 / 500 텍스트 박스 입력 -> 등록 or 작성취소
-등록시 오늘의 SQLITE 데이터 베이스 병합
-작성 취소시 메인메뉴로 돌아감.

2) 정보수정
정보수정 버튼 -> ID를 제외한 정보 수정 -> Account 데이터베이스 수정

3) 로그아웃
세션 종료


3. 동기화 방식

타임라인 : 당일 작성한 내용에 한해서 수정기능 제공
타임라인 저장시 SQLITE 사용하여 데이터를 저장한다.
스마트폰에 저장되는 데이터는 최대 2개이다.
1) 오늘이 아닌 이전에 작성 된 종합 데이터
2) 오늘 작성된 데이터

타임라인 동기화 :
05시 ~ 06시 타임라인 작성 불가처리, 파트너의 정보를 통하여 서로에게 오늘 작성된 SQLITE 데이터베이스 버퍼화 -> 클라이언트 to 서버 to 클라이언트

전송 방식 :
당일 작성된 SQLITE 파일을 전송한다.
전송 후 당일 작성된 파일 밑에 기존 데이터를 병합한다.

수신 방식 :
05시 ~ 06시 SQLITE 데이터를 수신한다.
전송이 완료된 후 새로 받은 데이터 아래 이전에 작성된 데이터를 병합한다.