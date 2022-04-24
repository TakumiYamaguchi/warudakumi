<?php
/*
Template Name: Archive
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
                <h3><?php single_cat_title(); ?></h3>
            </div>
        </div>
        <div id="tab" class="tab_nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
                <li><a href="<?php echo home_url(); ?>/category/graphic">Graphic</a></li>
                <li><a href="<?php echo home_url(); ?>/category/package">Package</a></li>
                <li><a href="<?php echo home_url(); ?>/category/logo">Logo</a></li>
                <li><a href="<?php echo home_url(); ?>/category/web">Web</a></li>
            </ul>
        </div>
    </section>
    <!------- package ---------->
    <div class="inner works-inner">
        <div class="contents1">
            <?php
            $category_slug = get_query_var('category_name');
            $array = array(
                'post_type' => 'post',
                'orderby' => 'post_date',
                'category_name' => $category_slug // 取得したカテゴリーのスラッグを指定
            );
            $worksAll = new WP_Query($array);
            ?>
            <?php if ($worksAll->have_posts()) : ?>
                <?php while ($worksAll->have_posts()) : $worksAll->the_post(); ?>
                    <!--- start loop ---->
                    <div class="in-work" id="2019-ganesh-furikake-Package">
                        <div class="in-text">
                            <p class="p-small">
                            <?php
                                $cat = get_the_category();
                                $catName = $cat[0]->cat_name; //カテゴリー名
                                $catslug = $cat[0]->slug; //スラッグ名
                            ?>
                                <span><?php echo $catName; ?></span> -
                                <?php $tag = get_the_tags();
                                echo $tag[0]->name; ?>
                            </p>
                            <h4><?php the_title(); ?></h4>
                            <p class="p-en"><?php the_field('year'); ?></p>
                            <?php $value = get_field('url') ; if(empty($value)) : else:?>
                            <a href="<?php the_field('url'); ?>" target="_blank">
							<?php the_field('url'); ?>
                            <?php endif; ?>
						</a>
                        </div>
                        <div class="in-img">
                        <?php
								$img = get_field('image');
								$images = wp_get_attachment_image_src($img, 'サイズ');
								$img_alt = get_post(get_field('img'));
								$alt = get_post_meta ( get_post ($img) -> ID , '_wp_attachment_image_alt' , true );
								?>
                        	<img
								src="<?php echo $images[0]; ?>"
								alt="<?php echo $alt; ?>"
                                class="img-70"
								>        
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりません。</p>
            <?php endif;
            wp_reset_postdata(); ?>
    <div class="tab_nav tav_nav_btm">
			<ul>
            <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
                <li><a href="<?php echo home_url(); ?>/category/graphic">Graphic</a></li>
                <li><a href="<?php echo home_url(); ?>/category/package">Package</a></li>
                <li><a href="<?php echo home_url(); ?>/category/logo">Logo</a></li>
                <li><a href="<?php echo home_url(); ?>/category/web">Web</a></li>
			</ul>
    </div>
</main>
<?php
get_footer();
