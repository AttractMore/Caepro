<?php 

	$socialChannels = get_field('social_channels','option');
	$twitter = $socialChannels['twitter'];
	$linkedin = $socialChannels['linkedin'];
	$footer_bio = get_field('footer_bio','option',false,false);
	$bios = get_field('bios','option');
	$bios_footer = $bios['footer'];
	
?>
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<div class="l-container">
				<div class="footerBio">
					<img src="/wp-content/uploads/2021/10/caepro-logo-white.png" alt="Logo" class="logo-img">
					<p><?= $bios_footer?></p>
					
				</div>
				<div class="footerCol">
					<h2><a href="/services">Services</a></h2>
					<nav>
						<ul>
							<li><a href="/services/engineering-services">Engineering Services</a></li>
							<li><a href="/services/computer-aided-engineering">CAE Outsourcing</a></li>
							<li><a href="/services/strategic-business-consulting-services">Market Entry</a></li>
							<li><a href="/services/strategic-sourcing">Strategic Sourcing</a></li>
						</ul>
					</nav>
					
				</div>
				<div class="footerCol">
				<h2><a href="/sectors">Sectors</a></h2>
					<nav>
						<ul>
							<li><a href="/sectors/off-highway-engineering">Off Highway</a></li>
							<li><a href="/sectors/automotive-engineering">Automotive</a></li>
							<li><a href="/sectors/aerospacce-marine-industrial-engineering">Others</a></li>
						</ul>
					</nav>
				</div>
				<div class="footerCol">
					<h2><a href="/success-stories">Success Stories</a></h2>
					
					
				</div>
				<!-- <div class="footerCol">
					<h2><a href="/about-us">About us</a></h2>
					
					
				</div> -->
				
				<div class="footerCol">
					<h2><a href="/insights">Insights</a></h2>
					
					
				</div>

				<div class="footerCol footerCol-contact">
					<h2><a href="/contact">Contact</a></h2>
					
					
				</div>
			
			<div class="followUs">
			Follow us <a href="<?= $linkedin?>" target="_blank"><img src="/wp-content/uploads/2021/11/linkedin-logo.png"/></a>  <a href="<?= $twitter?>" target="_blank"><img src="/wp-content/uploads/2021/11/twitter-icon.png"/></a></div>
			</div>
			</footer>
			<!-- /footer -->

			<section class="subFooter"><!-- copyright -->
				<div class="l-container" >
					<div class="companyLegal">
						<p>
						<?php echo date('Y'); ?>&copy; <?php bloginfo('name'); ?>
						</p>
						<!-- /copyright -->
					</div>

					<div class="footerNavigation">
						<nav>
							<ul>
								<li><a href="/terms-and-conditions">Terms & Conditions</a></li>
								<li><a href="/privacy-policy">Privacy & Cookies</a></li>
							</ul>
						</nav>
						<!-- /copyright -->
					</div>

					<div class="siteLink">
					Website Design by<a href="https://wwww.urbanelement.com" rel="nofollow" target="_blank"> Urban Element</a>
					</div>
				</div>
			</section >

		
	

		
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/wp-content/themes/caepro/js/jquery.fancybox.js"></script>
<script src="/wp-content/themes/caepro/js/scripts.js"></script>
<script type='text/javascript' src='/wp-content/themes/caepro/js/mobile-menu.js?ver=5.2.3'></script>
<script type="text/javascript">
$('.sliderBanner').slick({
	dots: false,
    infinite: true,
    speed: 700,
    autoplay:false,
	fade: true,
    autoplaySpeed: 2000,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('.slides').slick({
	dots: true,
    infinite: true,
    speed: 700,
    autoplay:false,
	fade: true,
    autoplaySpeed: 2000,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1
});
  </script>

<script type="text/javascript">
$(document).ready(function(){
$('.hoverGraphic-panel').mouseenter(function () {
	

	if ($(this).hasClass("highway")){
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("off-highway");
	}

	if ($(this).hasClass("engineering")){
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("engineering-background");
	}

	if ($(this).hasClass("outsourcing")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("outsourcingBg");
	}

	if ($(this).hasClass("commercial")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("commercialBg");
	}

	if ($(this).hasClass("automotive")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("automotiveBg");
	}

	if ($(this).hasClass("others")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("othersBg");
	}

	if ($(this).hasClass("india")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("indiaBg");
	}

	if ($(this).hasClass("strategic")){
		$(this).parent(".hoverGraphic").removeClass("leadImage");
		$(this).find('p').show('fast');
		$(this).addClass("panel-active");
		$(this).parent(".hoverGraphic").addClass("strategicBg");
	}



});


});

$('.hoverGraphic-panel').mouseleave(function () {
	if ($(this).hasClass("highway")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");

	}

	if ($(this).hasClass("engineering")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");

	}

	if ($(this).hasClass("outsourcing")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("outsourcingBg");

	}

	if ($(this).hasClass("automotive")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("automotiveBg");

	}

	if ($(this).hasClass("commercial")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("commercialBg");
	}

	if ($(this).hasClass("others")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("othersBg");
	}

	if ($(this).hasClass("india")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("indiaBg");
	}

	if ($(this).hasClass("strategic")){
		$(this).find('p').hide('fast');
		$(this).removeClass("panel-active");
		$(this).parent(".hoverGraphic").removeClass("strategicBg");
	}

});

$(document).ready(function(){

	$('.hoverGraphic-new').css({'background-image' : 'url('+$('.hoverGraphic-panel-new#tile-1').data('img')+')'});

	$('.hoverGraphic-panel-new').mouseenter(function () {
		$(this).addClass('panel-active');
		$(this).find('p').show('fast');
		$('.hoverGraphic-new').css({'background-image' : 'url('+$(this).data('img')+')'});
	});

	$('.hoverGraphic-panel-new').mouseleave(function () {
		$(this).removeClass('panel-active');
		$(this).find('p').hide('fast');
	});
   
});


</script>
<?php wp_footer(); ?>
	</body>
</html>
