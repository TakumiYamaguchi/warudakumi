<?php
/*
Template Name: Silkscreen
*/
?>
<?php get_header(); ?>
<main class="main">
		<!-------- page-view ----->
		<section class="page-view" data-midnight="black">
			<div class="inner">
				<div class="ttl-box">
					<div class="works-img">
						<div class="topview-silkscreen"></div>
					</div>
					<div class="works-text">
						<h2>Silkscreen</h2>
						<p class="p-first">
							シルクスクリーンを使い<br>
							Tシャツなどに１枚１枚<br>
							手刷りでプリントしています。<br><br>
							ここでは過去に制作した<br>
							プリント作品をご覧いただけます。<br><br>
							現在販売中の商品は<br>
							<a href="http://warudakumi.theshop.jp/" class="btn-moveline" target="_blank">惡匠商店 webshop</a>　にて<br>
							お買い求めいただけます。
						</p>
					</div>
				</div>
			</div>
		</section>
		<!------- silkscreen ---------->
		<div class="full-inner">
			<div class="gallery">
				<div class="gallery_area">
                <!-- Start Loop -->
                <?php $args = array(
                    'post_type' => 'silkscreen_archive'
                );
                $Silkscreen_Archive = new WP_Query($args);
                if($Silkscreen_Archive->have_posts()) : ?>
                <?php while($Silkscreen_Archive->have_posts()) : $Silkscreen_Archive->the_post(); ?>
                    <!-------- PARAMOUNT2019 ---------->
                    <div>
                    <?php
                        $img = get_field('image');
                        $images = wp_get_attachment_image_src($img, 'サイズ');
                        $img_alt = get_post(get_field('img'));
                        $alt = get_post_meta ( get_post ($img) -> ID , '_wp_attachment_image_alt' , true );
                    ?>
                        <a class="group1" href="<?php echo $images[0]; ?>" title="<?php echo $alt; ?>">
							<img src="<?php echo $images[0]; ?>" alt="<?php echo $alt; ?>">                       
                        </a>
                    </div>
                    <?php endwhile; ?>
                        <?php else : ?>
                        <p>投稿が見つかりません。</p>      
                        <?php endif; ?>     
                        <?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();