<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="UTF-8">
<title>ScrollMagic animation scroll</title>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='http://janpaepke.github.io/ScrollMagic/css/examples.css'>
<link rel='stylesheet' href='https://codepen.io/unavezfui/pen/FsGHp.css'>
<link rel="stylesheet" href="style.css?ver=<?=date("YmdHis")?>">
</head>
<body>

<div class="cover__video">
	<video loop="" playsinline="" muted="" autoplay>
		<source src="https://vod-homepage.pstatic.net/cdn-vod/1784/siteBG_PC_0408.mp4" type="video/mp4" media="(min-width: 640px)">
		<source src="https://vod-homepage.pstatic.net/cdn-vod/1784/siteBG_mobile_750_0408.mp4" type="video/mp4">
		<span class="blind">네이버 1784 Brand flim</span>
	</video>
</div>

<div class="container">
	<div style="height: 1000px">테스트</div>
	<div class="animate animate_1 animate_first">
		<h1>하나.</h1>
		<div class="left_show1">글자테스트 오른쪽</div>
		<div class="right_show1">글자테스트 왼쪽</div>
		<div class="left_show2">글자테스트 세번째</div>
	</div>
	<div class="trigger trigger_1"></div>
	<div class="animate animate_2 animate_second">
		<h1>둘</h1>
		<div class="under_show1">글자테스트 아래쪽</div>
	</div>
	<div class="trigger trigger_2"></div>
	<div class="animate animate_3">
		<h1>셋.</h1>
	</div>
	<div class="trigger trigger_3"></div>
	<h1 class="animate animate_4">넷.</h1>
	<div class="trigger trigger_4"></div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
<script src="script.js?ver=<?=date("YmdHis")?>"></script>
</body>
</html>