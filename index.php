<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="UTF-8">
<title>ParkJi scrollEffect</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://codepen.io/unavezfui/pen/FsGHp.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.css" />
<link rel="stylesheet" href="style.css?ver=<?=date("YmdHis")?>">
</head>
<body>
	<div class="container">
		<section class="scroll_area">
			<!-- <div class="cover__video">
				<video loop="" playsinline="" muted="" autoplay>
					<source src="https://vod-homepage.pstatic.net/cdn-vod/1784/siteBG_PC_0408.mp4" type="video/mp4" media="(min-width: 640px)">
					<source src="https://vod-homepage.pstatic.net/cdn-vod/1784/siteBG_mobile_750_0408.mp4" type="video/mp4">
					<span class="blind">네이버 1784 Brand flim</span>
				</video>
			</div> -->
			<div style="height: 1000px; position: inherit;" id="fixed">
				<svg width="80%" height="500" viewBox="0 0 330 11">
					<text x="0" y="50%">E</text>
					<text x="30" y="50%">I</text>
					<text x="40" y="50%">N</text>
					<text x="80" y="50%">V</text>
					<text x="110" y="50%">E</text>
					<text x="138" y="50%">N</text>
					<text x="175" y="50%">T</text>
					<text x="205" y="50%">I</text>
					<text x="260" y="50%">N</text>

				</svg>
				<svg class="circle_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.694 192.694">
					<g id="그룹_59" data-name="그룹 59" transform="translate(5614.049 2189.876) rotate(-155)">
						<g id="그룹_58" data-name="그룹 58" transform="translate(5813 -507)">
						<g id="class11" data-name="타원 6" fill="none" stroke="#fff" stroke-width="2">
							<circle cx="72.5" cy="72.5" r="72.5" stroke="none"/>
							<circle cx="72.5" cy="72.5" r="71.5" fill="none"/>
						</g>
						<g id="타원_9" data-name="타원 9" transform="translate(3 15)" fill="none" stroke="#fff" stroke-width="2">
							<circle cx="58" cy="58" r="58" stroke="none"/>
							<circle cx="58" cy="58" r="57" fill="none"/>
						</g>
						<g id="타원_10" data-name="타원 10" transform="translate(6 29)" fill="none" stroke="#fff" stroke-width="2">
							<circle cx="43.5" cy="43.5" r="43.5" stroke="none"/>
							<circle cx="43.5" cy="43.5" r="42.5" fill="none"/>
						</g>
						<g id="타원_11" data-name="타원 11" transform="translate(9 44)" fill="none" stroke="#fff" stroke-width="2">
							<circle cx="29" cy="29" r="29" stroke="none"/>
							<circle cx="29" cy="29" r="28" fill="none"/>
						</g>
						<g id="타원_12" data-name="타원 12" transform="translate(12 58)" fill="none" stroke="#fff" stroke-width="2">
							<circle cx="14.5" cy="14.5" r="14.5" stroke="none"/>
							<circle cx="14.5" cy="14.5" r="13.5" fill="none"/>
						</g>
						</g>
					</g>
				</svg>

			</div>
			<div class="animate animate_1 animate_first">
				<!-- <h2>Park Ji.</h2> -->
				<div class="left_show1">design</div>
				<div class="right_show1">web</div>
				<div class="left_show1" style="top: 200px">application</div>
				<div class="right_show1">development</div>
			</div>
			<div class="trigger trigger_1"></div>
			<div class="animate animate_2 animate_second">
				<div class="under_show1">만족도는 고객의 요구사항과 구축된 앱과 앱이<br>얼마나 구합하는지에 따라 됩니다.</div>
				<div class="under_show2">기존 아이디어보다 더 구체적인 기획을 위해<br>우리는 꾸준한 커뮤니케이션과<br>아이덴티티의 이해와 존중을 바탕으로 튼튼하게 구축합니다.</div>
			</div>
			<div class="trigger trigger_2"></div>
			<div class="animate animate_3 animate_thrd">
				<h2>셋.</h2>
				<p class="fade_show1">첫번째 문단 첫번째 문단 첫번째 문단 첫번째 문단 <br>
					첫번째 문단 첫번째 문단 첫번째 문단 첫번째 문단 </p>
				<br>
				<p class="fade_show2">두번째 문단 두번째 문단 두번째 문단 두번째 문단 <br>
				두번째 문단 두번째 문단 두번째 문단 두번째 문단 두번째 문단 </p>
				<div class="fade_show3">
					<button>버튼1</button>
				</div>
			</div>
			<div class="trigger trigger_3"></div>
			<div class="animate animate_4">

			</div>
			<div class="trigger trigger_4"></div>
		</section>
		
		<!-- <section class="nomal_area">
			<div class="section sec2">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><h1 class="sec2-1_title">Section2</h1>Slide 1</div>
						<div class="swiper-slide"><h1 class="sec2-1_title">Section2</h1>Slide 2</div>
						<div class="swiper-slide"><h1 class="sec2-1_title">Section2</h1>Slide 3</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section> -->

	</div>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.6/swiper-bundle.min.js"></script>
<script src="script.js?ver=<?=date("YmdHis")?>"></script>
</body>
</html>