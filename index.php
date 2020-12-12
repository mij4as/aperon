<?php 
include("includes/head.html");
include("includes/nav.html");
?>
<title>aperon | Home</title>



<!-- //$ main -->
<main id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6">

				<div class="jumbotron">
					<h1 class="display-4">Aperon</h1>
					<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<hr class="my-4">
					<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
					<button class="ap-btn first" onclick="goToGames();">create avatar</button>
				</div>
			</div>
			<div class="col-12 col-lg-6 hero"></div>
		</div>
	</div>
</main>
<!-- //!  mian -->
<!-- //$ partners -->
<div id="parnters" class="block">
	<h1>partners</h1>
	<svg width="85.5" height="9" viewBox="0 0 57 6" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M4.05284 0H30.2629L26.7364 3.43117H0.526367L4.05284 0Z" />
		<path d="M30.2629 2.09682H56.4732L52.9467 5.52799H26.7364L30.2629 2.09682Z" />
	</svg>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><a target="_blank" href="https://account.mojang.com/"><img src="img/1.png" alt="Mojang" ></a></div>
			<div class="swiper-slide"><a target="_blank" href="https://google.com/"><img src="img/2.png" alt="Google"></a></div>
			<div class="swiper-slide"><a target="_blank" href="https://minecraft.net/"><img src="img/3.png" alt="Minecraft"></a></div>
			<div class="swiper-slide"><a target="_blank" href="http://www.innersloth.com/"><img src="img/8.png" alt="Among Us"></a></div>
			<div class="swiper-slide"><a target="_blank" href="http://www.innersloth.com/"><img src="img/5.png" alt="INNER SLOTH"></a></div>
			<div class="swiper-slide"><a target="_blank" href="https://github.com/"><img src="img/6.png" alt="Github"></a></div>
			<div class="swiper-slide"><a target="_blank" href="https://namemc.com/"><img src="img/4.png" alt="Name Mc"></a></div>
			<div class="swiper-slide"><a target="_blank" href="https://figma.com/"><img src="img/7.png" alt="Figma"></a></div>
		</div>
	</div>
</div>
<!-- //! partners -->
<!-- //$ about -->
<div id="about" class="block">
	<div class="container-fluid">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-12 col-lg-5">
				<img src="img/pic-5.jpg" class="about-image">
			</div>
			<div class="col-12 col-lg-5">
				<h1>about aperon</h1>
				<h4>about sections subtitle is it</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt iure ut sit eaque voluptate fuga temporibus ratione quam reiciendis qui nihil, vitae molestiae quisquam debitis saepe numquam nostrum magnam quaerat natus quod? Nulla amet quisquam molestiae eveniet! Quam deserunt officiis corporis debitis! Sed nihil provident recusandae voluptas dignissimos doloremque, neque nesciunt ullam quidem dolores tempore repellat animi, harum molestias modi qui aut quas voluptate ducimus distinctio illum at inventore odit tenetur! Delectus ullam, quos nam eum modi, fugit velit possimus illo id aliquam est iure sequi quasi iste ipsa veritatis doloribus repellendus? Odio corrupti ut eveniet dolor qui suscipit saepe alias. Accusamus distinctio veritatis praesentium harum, laborum nesciunt et quidem?</p>
				<hr>
				<small>copy rights</small>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
</div>
<!-- //! about -->
<!-- //$ contact -->
<div id="contact" class="block">
	<h1 class="text-uppercase font-weight-bold">Contact Us</h1>
	<svg width="85.5" class="he2 linear" height="9" viewBox="0 0 57 6" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M4.05284 0H30.2629L26.7364 3.43117H0.526367L4.05284 0Z" />
		<path d="M30.2629 2.09682H56.4732L52.9467 5.52799H26.7364L30.2629 2.09682Z" />
		<defs>
			<linearGradient id="lgrad" x1="0%" y1="100%" x2="100%" y2="0%">
				<stop offset="0%" style="stop-color:rgb(110,46,199);stop-opacity:1" />
				<stop offset="100%" style="stop-color:rgb(242,34,61);stop-opacity:1" />
			</linearGradient>
		</defs>
	</svg>
	<div class="theCForm">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="mesgerName">Name</label>
					<input type="text" name="mesgerName" class="form-control" placeholder="Enter Your name">
				</div>
				<div class="form-group col-md-6">
					<label for="mesgerEmail">Email</label>
					<input type="email" class="form-control" name="mesgerEmail" placeholder="Enter Your Email">
				</div>
			</div>
			<div class="form-group">
				<label for="mesgerEmail"></label>
				<input type="text" class="form-control" name="mesgerEmail" placeholder="Mesaage title">
			</div>
			<div class="form-row">
				<label for="message">Message</label>
				<textarea class="form-control" name="message" rows="10" placeholder="Type text..."></textarea>
			</div>
			<button type="submit" style="margin: 0 auto ;" class="ap-btn second">Send Message</button>
		</form>
	</div>
</div>
<!-- //! contact -->
<!-- //$ footer -->
<!-- //! footer -->
<?php include("img/footer.html");?>
<script>
	function goToGames() {
		location.replace("games.php");
	}
	var swiper = new Swiper('.swiper-container', {
		// slidesPerView: 2,
		// spaceBetween: 30,
		slidesPerGroup: 1,
		loop: true,
		loopFillGroupWithBlank: true,
		delay: 0,
		autoplayDisableOnInteraction: false,
		speed: 500,
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 10
			},
			500: {
				slidesPerView: 2,
				spaceBetween: 35
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 35
			},
			992: {
				slidesPerView: 4,
				spaceBetween: 35
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 70
			},
			1366: {
				slidesPerView: 5,
				spaceBetween: 35
			},
			1920: {
				slidesPerView: 6,
				spaceBetween: 40
			}
		},
	});
</script>



<!-- //$ =-=-=-=-=-=-=-=-=-==  ==-=-=-=-=-=-=-=-=-= -->
<!-- //* ==>  <== -->
<?php
// if (isset($_POST['name']))
// 	$name = $_POST['name'];
// if (isset($_POST['email']))
// 	$email = $_POST['email'];
// if (isset($_POST['message']))
// 	$message = $_POST['message'];
// if (isset($_POST['subject']))
// 	$subject = $_POST['subject'];

// $content = "From: $name \n Email: $email \n Message: $message";
// $recipient = "youremail@here.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// echo "Email sent!";
?>