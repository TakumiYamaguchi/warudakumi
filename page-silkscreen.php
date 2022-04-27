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
		<?php
            $array = array(
                'post_type' => 'section_top_view',
            );
            $section_top_view = new WP_Query($array);
            ?>
            <?php if ($section_top_view->have_posts()) : ?>
            <?php while ($section_top_view->have_posts()) : $section_top_view->the_post(); ?>
			<div class="ttl-box">
				<div class="works-img">
				<img class="topview-silkscreen" src="<?php the_field('silkscreen'); ?>" alt="Silkscreen">
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
			<?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりません。</p>
            <?php endif;
            wp_reset_postdata(); ?>
		</div>
	</section>
	<!------- silkscreen ---------->
	<div class="full-inner">
		<div class="gallery">
			<div class="gallery_area">
				<?php $args = array(
					'post_type' => 'silkscreen_archive',
					'posts_per_page' => -1
				);
				$Silkscreen_Archive = new WP_Query($args);
				if ($Silkscreen_Archive->have_posts()) : ?>
					<?php while ($Silkscreen_Archive->have_posts()) : $Silkscreen_Archive->the_post();
						$counter++; ?>
							<div class="silkscreen_article article">
								<a class="group1" href="<?php the_field('image'); ?>" title="<?php the_title(); ?>">
								<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p>投稿が見つかりません。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				<div class="more">
					<button>もっと見る</button>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
