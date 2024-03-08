<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="canonical" href="https://caepro.com" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css"/>
		<link rel="stylesheet" href="/wp-content/themes/caepro/css/jquery.fancybox.css" />
		<link rel="stylesheet" href="https://use.typekit.net/tsy4nav.css">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css"/>
		<!-- Google Tag Manager -->

		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TPTD2BH');</script>
		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPTD2BH"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php 
			$socialChannels = get_field('social_channels','option');
			$twitter = $socialChannels['twitter'];
			$linkedin = $socialChannels['linkedin'];
			$footer_bio = get_field('footer_bio','option',false,false);
			$bios = get_field('bios','option');
			$contactInformation = get_field('contact_numbers','option');
			$contactInformation_email = $contactInformation['email_address'];
			$contactInformation_tel = $contactInformation['tel'];
			$bios_header = $bios['header'];
			
		?>
		
		<header role="banner" class="siteHeader">
			<section class="utilityHeader">
				<div class="l-container">
					<div class="utility-desc"><?= $bios_header?></div>
					<div class="utilityHeader-contact-container">
						<div class="utilityHeader-email"> <img src="/wp-content/uploads/2021/10/envelope.png" alt="Envelope Icon used for email address"> <a href="mailto:<?= $contactInformation_email?>"><?= $contactInformation_email?></a></div>
						<div class="utilityHeader-tel"> <img src="/wp-content/themes/caepro/img/icons/phone-icon.svg" alt="Phone Icon used for phone numbers"> <a href="tel:<?= $contactInformation_tel?>"><?= $contactInformation_tel?></a></div>
						<div class="utilityHeader-contact">
							Follow us on:
							
							<a href="<?= $linkedin?>" target=""_blank rel="nofollow"><img src="/wp-content/uploads/2021/10/linkedin-3.png" alt="Linkedin Icon used for Linkedin"/></a>
							<a href="<?= $twitter?>" target=""_blank rel="nofollow"><img src="/wp-content/uploads/2021/10/twitter-3.png" alt="Twitter Icon used for Twitter"/></a>
						</div>
					</div>	
				</div>
			</section>

       
        <div class="siteHeader_primary">
            <div class="l-container l-flexContainer">
                <div class="siteHeader_name">
                    <a href="/"><img src="/wp-content/uploads/2021/10/caepro-logo-white.png" alt="Logo" class="logo-img"></a>
                </div>
                <div class="menuContainer">
					<div class="container">
					<div class="menu">
					    
						 <a href="#mobileNavGroup-main" class="nav_toggle" aria-controls="mobileNavGroup-main" aria-expanded="false">
                            <img src="/wp-content/uploads/2021/11/menu-icon.png">
                        </a>
						<nav class="menuBar">
							
							<?php html5blank_nav(); ?>
						</nav>
						<div class="mobileMenuBar">
							<div class="navGroup" id="mobileNavGroup-main" aria-hidden="true">
								<h2>Menu</h2>
								<button type="button" aria-controls="mobileNavGroup-main" aria-expanded="false" aria-label="Close">X</button>
								<?php mobile_nav(); ?>
								
							</div>
						</div>
					
					</div>
				</div>
			</div>
            </div>
        </div>
		
		<?php if ( is_front_page() ) :?>
		<?php 
			$queried_object = get_queried_object();
			$sliding_banner = get_field('sliding_banner', $queried_object->ID);
			$main_heading = $sliding_banner['main_heading'];
			$banner_content = $sliding_banner['banner_content'];
			$banner_link = $sliding_banner['banner_link'];
			$banner_linkUrl = $banner_link['url'];
			$banner_linkUrlTitle = $banner_link['title'];
			$banner_images = $sliding_banner['banner_images'];
		?>
		 <div class="sliderBanner">

<?php
$banner_images = $sliding_banner['banner_images'];

if( $banner_images ) {
  
    foreach( $banner_images as $banner_image ) {
        $image = $banner_image['image'];
		$imageUrl = $image['url'];
		echo '<li style="background: url('.$imageUrl .');  background-size: cover!important;"></li>';
    }
  
}
?>




</div>

			</div>
			
        <div class="l-container">
			<div class="banner-container">
				<h1><?= $main_heading?></h1>
				<?= $banner_content?>
				<a href="<?= $banner_linkUrl?>" class="btn"><?= $banner_linkUrlTitle?></a>
			</div>
		</div>
		<?php endif;?>	
		<?php if ( !is_front_page() && !is_single() &&  !is_category() && !is_archive() && !is_404()) :?>

			<?php 
			$queried_object1 = get_queried_object();
			$banner_heading = get_field('banner_heading', $queried_object1->ID);
			$banner_content = get_field('banner_content', $queried_object1->ID);
			$banner_image = get_field('banner_image',  $queried_object1->ID);
			$bannerImageUrl = $banner_image['url'];
		
	

		?>

		<section class="internalBanner" style="background:url(<?=$bannerImageUrl?>); ">
			<div class="l-container">
			<div class="banner-container">
				<h1><?= $banner_heading?></h1>
				<?= $banner_content?>
			
			</div>
		</div>
		</section>
	<?php endif;?>		



	<?php if ( is_404()) :?>

<?php 
$page_not_found = get_field('page_not_found','option');
$banner = $page_not_found['banner'];
$page_not_found_heading = $banner['banner_heading'];
$page_not_found_content = $banner['banner_content'];
$page_not_found_imageUrl = $banner['banner_image']['url'];




?>

<section class="internalBanner" style="background:url(<?=$page_not_found_imageUrl?>); ">
<div class="l-container">
<div class="banner-container">
	<h1><?= $page_not_found_heading?></h1>
	<?= $page_not_found_content?>

</div>
</div>
</section>
<?php endif;?>		


	<?php if ( is_singular('post') || !is_category() && !is_front_page()) :?>
		
		<?php 
			$queried_object1 = get_queried_object();
			$banner_heading = get_field('banner_heading', $queried_object1->ID);
			$banner_content = get_field('banner_content',$queried_object1->ID);
			$banner_image = get_field('banner_image',135,$queried_object1->ID);
			$bannerImageUrl = $banner_image['url'];
		
	

		?>

			<section class="internalBanner" style="background:url(<?=$bannerImageUrl?>); ">
			<div class="l-container">
			<div class="banner-container">
				<h1><?php the_title();?></h1>
			
			
			</div>
		</div>
		</section>

	<?php endif;?>	

	<?php if ( is_category() && !is_front_page()  ) :?>
		
		<?php 
			$queried_object = get_queried_object(); 
			$taxonomy = $queried_object->taxonomy;
			$term_id = $queried_object->term_id;  
			$queried_object1 = get_queried_object();
			$banner_image = get_field('banner_image',135,$term_id);
			$bannerImageUrl = $banner_image['url'];
		
	

		?>

			<section class="internalBanner" style="background:url(<?=$bannerImageUrl?>); ">
			<div class="l-container">
			<div class="banner-container">
				<h1><?php single_cat_title();?></h1>
			
			
			</div>
		</div>
		</section>

	<?php endif;?>	


	<?php if ( is_archive() && !is_front_page()  && !is_singular('success-stories')) :?>

	<?php 
$queried_object1 = get_queried_object();
$banner_heading = get_field('banner_heading','options');
$banner_content = get_field('banner_content','options');
$banner_image = get_field('banner_image', 'options');
$bannerImageUrl = $banner_image['url'];



?>

<section class="internalBanner" style="background:url(<?=$bannerImageUrl?>); ">
			<div class="l-container">
			<div class="banner-container">
				<h1><?= $banner_heading?></h1>
				<p><?= $banner_content?></p>
			
			</div>
		</div>
		</section>
	
<?php endif;?>	


<?php if ( is_singular('success-stories') && !is_front_page()  ) :?>

	<?php 
			$queried_object1 = get_queried_object();
			$post = get_post();
			$banner_heading = get_field('banner_heading', $queried_object1->ID);
			$banner_content = get_field('banner_content',$queried_object1->ID);
			$banner_image = get_field('banner_image',$post,$queried_object1->ID);
			$bannerImageUrl = $banner_image['url'];
		?>

		<section class="internalBanner" style="background:url(<?= $bannerImageUrl ?>); ">
			<div class="l-container">
				<div class="banner-container">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</section>

	<?php endif;?>	
	
        
    </header>