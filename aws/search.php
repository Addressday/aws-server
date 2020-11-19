<?php

	// null 예외 에러
	// null 체크 
	// 검색어 입력 부분 
	if(isset($_GET["searchTerm"])){
		$searchTerm = $_GET["searchTerm"];
	}else {
		exit("검색어 지정이 안되어있습니다.");
	}

	if(isset($_GET["type"])){
		$type = $_GET["type"];
	}else {
		$type = "sites";
	}

	$type = isset($_GET["type"]) ? $_GET["type"] : "sites";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>구글클론사이트</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous">
  </script>
</head>
<body>

		<!-- 웹페이지 화면을 감싸는 랩퍼 클래스 -->
		<div class="wrapper">

			<!-- 화면의 머리 부분 -->
			<div class="header">

				<!-- 헤더 내용 부분 -->
				<div class="headerContent">

					<!-- 로고 부분 -->
					<div class="logoContainer">
						
						<!-- 작은 로고에 메인페이지로 링크를 걸어둔다 -->
						<a href="index.php">
							<img src="assets/img/logo.png" alt="">
						</a>
					</div>

					<!--검색 부분-->
					<div class="searchContainer">
						<form action="search.php" method="GET">
							
							<!-- 검색바 부분 -->
							<div class="searchBarContainer">
									<input class="searchBarBoxInput" type="text" name="searchTerm">
									<button class="searchBarButton">
										<img src="assets/img/loupe.png" alt="">
									</button>
							</div>	

						</form>
					</div>
				</div>
				<!-- 탭 부분 -->
				<div class="tabContainer">
					
					<!-- 탭 목록 -->
					<ul class="tabList">
						<li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
							<a href="<?php echo 'search.php?searchTerm=$searchTerm&type=sites'; ?>">
								사이트
							</a>
						</li>
						<li class="<?php echo $type == 'images' ? 'active' : '' ?>">
							<a href="<?php echo 'search.php?searchTerm=$searchTerm&type=images'; ?>">
								이미지
							</a>
						</li>

					</ul>

				</div>
	</div>
</div>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>