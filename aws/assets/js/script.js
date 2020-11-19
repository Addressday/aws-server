// 인터넷 DOM
// Document Object Model
$(document).ready(function(){

	//로직을 여기에 적는다
	const searchBox = $(".searchContainer .searchBox");

	const searchBoxInput = $(".searchContainer .searchBox input");

	//검색 입력 부분이 포커스를 얻었을떄   
	searchBoxInput.focus(function(event) {
		// body...
		console.log("검색 부분이 포커스를 얻었다...");
		searchBox.addClass('searchBoxOnFocused');

	});

	//검색 입력 부분이 포커스를 잃었을떄
	searchBoxInput.blur(function(event){
		console.log("검색 부분이 포커스를 잃었다...");
		searchBox.removeClass('searchBoxOnFocused');
	});


	// search.php 로직
	// 그라데이션이 적용될 부분
	const searchBarContainer = $(".headerContent .searchBarContainer");

	const searchBarBoxInput = $(".searchBarContainer input");

	searchBarBoxInput.focus(function(event){
		console.log("검색바 부분이 포커스를 얻었다...");
		searchBarContainer.addClass('searchBoxOnFocused');
	});

	searchBarBoxInput.blur(function(event){
		console.log("검색바 부분이 포커스를 잃었다...");
		searchBarContainer.removeClass('searchBoxOnFocused');
	});

});