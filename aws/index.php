<!DOCTYPE html>
<html>
<head>
	<title>구글클론사이트</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<!-- 제이쿼리  CDN-->
	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous">
  </script>
</head>
<body>

		<!-- 웹페이지 화면을 감싸는 웹퍼 클래스. 인덱스 페이지 -->
		<div class="wrapper indexPage">

			<!-- 메인섹션 -->
			<div class="mainSection">
				
				<!-- 로고부분 -->
				<div class="logoContainer">
					<img src="assets/img/logo.png" alt="">
				</div>

				<!-- 검색부분 -->
				<div class="searchContainer">

					<!-- action 실행할 파일 / get을 이용해 데이터를 넘긴다-->
					<form action="search.php" method="GET">

							<!-- 검색어 입력 부분 -->
							<div class="searchBox">
								<img src="assets/img/loupe.png" alt="">
								<input type="text" name="searchTerm" placeholder="검색어를 입력해주세요...">
							</div>
						
						<!-- 검색버튼 -->
						<input class="searchButton" type="submit" value="검색하기">

					</form>

				</div>
					

			</div>

		</div>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>