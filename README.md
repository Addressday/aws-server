# aws(아마존 웹 클라우딩 서비스)를 이용해서 구글 클론웹사이트를 만들어보는 프로젝트


1. 먼저 웹서버를 구축하기 위해서 AWS에 가입을 했다 1년 무료로 사용할수 있어서 유용하게 이용할수 있다



2. AWS에 가입을 하고 EC2라는 가상 서버 인스턴드를 생성했다 아이피를 통해 웹서버를 만들수 있게 해주는것 같다



3. 가상서버에 접속하는 방법은 여러가지인데 
  첫째 aws내에 존재하는 ec2 인스턴트로 직접 연결하는것이다
  둘째 putty라는 ssh클라이언트 (시큐어 셀이라고 데이터전송과 원격제어를 할수있는 프로그램)을 설치해서 키를 생성해 아이피를 기입해 바로 프로그램으로 실행할수있다
  
 
 
 (sublimetext 에디터에서 sftp패키지를 적용시켰음)
4. sftp (ftp와 데이터 전송방식은 비슷하다 ssh를 이용하는것이 ftp와는 다른 방식인것 같다)와 가상서버내에 php를 부가 설치한다

php 내에서 오류 로그가 나오게 하려면
phpinfo.php에 접속해 display_errors가 on인지 확인을 한다 만약 off라면
ssh클라이언트로 접속해서 cd /etc/php/현재 자신의 버전/fpm 을 창에 입력한다
sudo vi php.ini의 내용 중 display_errors="off"를 on으로 변경한다
원할한 진행을 위해 서버를 재시작 한다
sudo service nginx restart
sudo service php7.4-fpm restart




