<?php
/*
Template Name: Archive_Web
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
					<h3>Web</h3>
				</div>
			</div>
			<div class="tab_nav">
				<ul>
                <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_graphic">Graphic</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_package">Package</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_logo">Logo</a></li>
                <li class="on"><a href="<?php echo home_url(); ?>/archive_web">Web</a></li>
				</ul>
			</div>
		</section>
		<!------- web ---------->
		<div class="inner works-inner">
			<div class="contents1">
				<!--- 2021 hiramito ---->
				<div class="in-work" id="2021-hiramito-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Landing page</p>
						<h4>hiramito</h4>
						<p class="p-en">2021</p>
						<a href="https://www.hiramito.com/" target="_blank">
							https://www.hiramito.com/
						</a>
					</div>
					<div class="in-img">
						<a href="https://www.hiramito.com/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2021_hiramito.png" alt="hiramito ホームページ">
						</a>
					</div>
				</div>
				<!--- 2021 株式会社ジーエスアール ---->
				<div class="in-work" id="2021-gsr-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Web site</p>
						<h4>株式会社ジーエスアール</h4>
						<p class="p-en">2021</p>
						<a href="https://gsr-estate.com/" target="_blank">
							https://gsr-estate.com/
						</a>
					</div>
					<div class="in-img">
						<a href="https://gsr-estate.com/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2021_gsr.png" alt="株式会社ジーエスアール ホームページ">
						</a>
					</div>
				</div>
				<!--- 2020 株式会社RISO ---->
				<div class="in-work" id="2020-riso-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Web site</p>
						<h4>株式会社RISO</h4>
						<p class="p-en">2020</p>
						<a href="https://riso-hamamatsu.net/" target="_blank">
							https://riso-hamamatsu.net/
						</a>
					</div>
					<div class="in-img">
						<a href="https://riso-hamamatsu.net/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2020_riso.png" alt="株式会社RISO ホームページ">
						</a>
					</div>
				</div>
				<!--- 2019 PARADISE BLOW ---->
				<div class="in-work" id="2019-pb-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Landing page</p>
						<h4>PARADISE BLOW</h4>
						<p class="p-en">2019</p>
						<a href="https://paradiseblow.com/" target="_blank">
							https://paradiseblow.com/
						</a>
					</div>
					<div class="in-img">
						<a href="https://paradiseblow.com/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2019_pb.png" alt="PARADISE BLOW ホームページ">
						</a>
					</div>
				</div>
				<!--- 2019 色色ペイント ---->
				<div class="in-work" id="2019-iroiro-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Landing page</p>
						<h4>色色ペイント</h4>
						<p class="p-en">2019</p>
						<a href="https://iroiro-paint.com/" target="_blank">
							https://iroiro-paint.com/
						</a>
					</div>
					<div class="in-img">
						<a href="https://iroiro-paint.com/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2019_iroiro.png" alt="色色ペイント ホームページ">
						</a>
					</div>
				</div>
				<!--- 2019 DELTA COMMIT ---->
				<div class="in-work" id="2019-delta-web">
					<div class="in-text">
						<p class="p-small"><span>Web</span> - Landing page</p>
						<h4>DELTA COMMIT</h4>
						<p class="p-en">2019</p>
						<a href="https://www.deltacommit.com/" target="_blank">
							https://www.deltacommit.com/
						</a>
					</div>
					<div class="in-img">
						<a href="https://www.deltacommit.com/" target="_blank">
							<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/web/web_2019_delta.png" alt="DELTA COMMIT ホームページ">
						</a>
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