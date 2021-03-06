<style>
.main-container {
  padding: 10px 15px;
}
.skyblue {
	background-color: #22c8ff;
  background-image:url("https://www.w3schools.com/w3images/bridge.jpg");
  background-size:100% 100%;
}
.deepskyblue {
	background-color: #00bfff;
  background-image:url("https://www.w3schools.com/howto/img_mountains_wide.jpg");
  background-size:100% 100%;
}
.darkerskyblue {
	background-color: #00a6dd;
  background-image:url("https://www.w3schools.com/w3images/hamburger.jpg");
  background-size:100% 100%;
}
.carousel-indicators {
	bottom: 0;
}
.carousel-control.right,
.carousel-control.left {
	background-image: none;
}
.carousel .item {
	min-height: 350px;
	height: 100%;
	width:100%;
}
.carousel-caption h3,
.carousel .icon-container,
.carousel-caption button {
	background-color: #09c;
}
.carousel-caption h3 {
	padding: .5em;
}
.carousel .icon-container {
	display: inline-block;
	font-size: 25px;
	line-height: 25px;
	padding: 1em;
	text-align: center;
	border-radius: 50%;
}
.carousel-caption button {
	border-color: #00bfff;
	margin-top: 1em;
}

/* Animation delays */
.carousel-caption h3:first-child {
	animation-delay: 1s;
}
.carousel-caption h3:nth-child(2) {
	animation-delay: 2s;
}
.carousel-caption button {
	animation-delay: 3s;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  font-size: 30px;
  font-weight: bold;
}

.p {
  padding-top: 125px;
  text-align: center;
}

.p a {
  text-decoration: underline;
}
</style>
<div class="container main-container">

	<div id="carousel-example-generic" class="carousel slide" data-interval="7000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First slide -->
			<div class="item active deepskyblue">

				<div class="carousel-caption">
					<h3 data-animation="animated bounceInLeft">
						This is the caption for slide 1
					</h3>
					<h3 data-animation="animated bounceInRight">
						This is the caption for slide 1
					</h3>
					<button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
				</div>
			</div> <!-- /.item -->

			<!-- Second slide -->
			<div class="item skyblue">
				<div class="carousel-caption">
					<h3 class="icon-container" data-animation="animated bounceInDown">
						<span class="glyphicon glyphicon-heart"></span>
					</h3>
					<h3 data-animation="animated bounceInUp">
						This is the caption for slide 2
					</h3>
					<button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
				</div>
			</div><!-- /.item -->

			<!-- Third slide -->
			<div class="item darkerskyblue">
				<div class="carousel-caption">
					<h3 class="icon-container" data-animation="animated zoomInLeft">
						<span class="glyphicon glyphicon-glass"></span>
					</h3>
					<h3 data-animation="animated flipInX">
						This is the caption for slide 3
					</h3>
					<button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
				</div>
			</div><!-- /.item -->

		</div><!-- /.carousel-inner -->

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- /.carousel -->

</div><!-- /.container -->

<script>
/* Demo Scripts for Bootstrap Carousel and Animate.css article
*/
(function( $ ) {

	//Function to animate slider captions
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';

		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}

	//Variables on page load
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel
	$myCarousel.carousel();

	//Animate captions in first slide on page load
	doAnimations($firstAnimatingElems);

	//Pause carousel
	// $myCarousel.carousel('pause');


	//Other slides to be animated on carousel slide event
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});

})(jQuery);
</script>