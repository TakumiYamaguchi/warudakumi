<?php
/*
Template Name: Archive_Logo
*/
?>
<?php get_header(); ?>
<main class="main">
		<!-------- page-view ----->
		<section class="subpage-view" data-midnight="black">
			<div class="ttl-box">
				<a href="/" class="works-img">
					<div class="img-logo"></div>
				</a>
				<div class="works-text">
					<h3>Logo</h3>
				</div>
			</div>
			<div class="tab_nav">
				<ul>
                <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_graphic">Graphic</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_package">Package</a></li>
                <li class="on"><a href="<?php echo home_url(); ?>/archive_logo">Logo</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_web">Web</a></li>
				</ul>
			</div>
		</section>
		<!------- logo ---------->
		<div class="inner works-inner">
			<div class="contents1">
				<!--- 2021 hiramito ---->
				<div class="in-work" id="2021-hiramito-logo">
					<div class="in-text">
						<p class="p-small"><span>Logo</span> - mark + type</p>
						<h4>hiramito</h4>
						<p class="p-en">2021</p>
						<a href="https://www.hiramito.com/" target="_blank">
							https://www.hiramito.com/
						</a>
					</div>
					<div class="in-img">
						<img class="img-50" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/logo/logo_2021_hiramito.jpg" alt="hiramito ロゴ">
					</div>
				</div>
				<!--- 2018 DELTA COMMIT ---->
				<div class="in-work" id="2018-delta-logo">
					<div class="in-text">
						<p class="p-small"><span>Logo</span> - mark + type</p>
						<h4>DELTA COMMIT</h4>
						<p class="p-en">2018</p>
					</div>
					<div class="in-img">
						<img class="img-50" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/logo/logo_2018_delta.jpg" alt="DELTA COMMIT ロゴ">
					</div>
				</div>
				<!--- 2018 feeeling ---->
				<div class="in-work" id="2018-feeeling-logo">
					<div class="in-text">
						<p class="p-small"><span>Logo</span> - mark + type</p>
						<h4>feeeling</h4>
						<p class="p-en">2018</p>
					</div>
					<div class="in-img">
						<img class="img-50" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/logo/logo_2018_feeeling.jpg" alt="feeeling ロゴ">
					</div>
				</div>
				<!--- 2017 しまごっち ---->
				<div class="in-work" id="2017-shimago-logo">
					<div class="in-text">
						<p class="p-small"><span>Logo</span> - sticker</p>
						<h4>しまごっち</h4>
						<p class="p-en">2017</p>
					</div>
					<div class="in-img">
						<img class="img-50" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/logo/logo_2017_shimago.jpg" alt="しまごっち ステッカー">
					</div>
				</div>
			</div>	
		</div>
		<div class="tab_nav tav_nav_btm">
			<ul>
            <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
            <li><a href="<?php echo home_url(); ?>/archive_graphic">Graphic</a></li>
            <li><a href="<?php echo home_url(); ?>/archive_package">Package</a></li>
            <li><a href="<?php echo home_url(); ?>/archive_logo">Logo</a></li>
            <li><a href="<?php echo home_url(); ?>/archive_web">Web</a></li>
			</ul>
		</div>
	</main>	
<?php
get_footer();