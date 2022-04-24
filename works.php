<?php
/*
Template Name: Works
*/
?>
<?php get_header(); ?>
<main class="main">
    <!-------- page-view ----->
    <section class="page-view" data-midnight="black">
        <div class="inner">
            <div class="ttl-box">
                <div class="works-img">
                    <div class="topview-works"></div>
                </div>
                <div class="works-text">
                    <h2>Design Works</h2>
                    <p class="p-first">
                        フライヤー、パンフレット、<br>
                        ロゴ、パッケージなど<br>
                        様々な企画のグラフィックデザインを<br>
                        担当させていただきました。<br><br>
                        2018年からWEBデザインや<br>
                        プログラミングを取り入れ、<br>
                        ランディングページやWEBサイトを<br>
                        制作しています。
                    </p>
                </div>
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
    <!------- works ---------->
    <div class="inner works-inner">
        <div class="works-list">
            <?php
            $array = array(
                'post_type' => 'post',
                'orderby' => 'post_date',
            );
            $worksAll = new WP_Query($array);
            ?>
            <?php if ($worksAll->have_posts()) : ?>
                <?php while ($worksAll->have_posts()) : $worksAll->the_post(); ?>
                    <?php
                    $cat = get_the_category();
                    $catName = $cat[0]->cat_name; //カテゴリー名
                    $catslug = $cat[0]->slug; //スラッグ名
                    ?>
                    <div class="primary">
                        <a href="<?php the_permalink(); ?>">
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
                        <div class="mask">
                                <div class="caption">
                                    <p class="p-small">
                                        <span><?php echo $catName; ?>
                                        </span>
                                        - <?php
                                            $tag = get_the_tags();
                                            echo $tag[0]->name;
                                            ?>
                                    </p>
                                    <p class="p-copy"><?php echo get_the_title() ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりません。</p>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
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
