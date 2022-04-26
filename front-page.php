<?php
/*
Template Name: TOP
*/
?>
<?php get_header(); ?>
<main class="main">
		<!------- top_visual -------->
		<div class="top-visual" data-midnight="black">
			<div class="top-inner">
				<div class="logo">
					<div class="img-logo"></div>
				</div>
				<div class="in-text">
					<span class="top-jp">惡の匠で「わるだくみ」</span>
					<span class="top-en">original design items</span>
				</div>
			</div>
			<div class="in-btn">
				<a class="btn-hamon ripple" href="http://warudakumi.theshop.jp/" target="_blank"> 
					<p>惡匠<br>webshop</p>
				</a>
			</div>
			<!-------- yurayura --------->
			<div id="yurayura">
				<div class="in-yurayura">
					<p>welcom</p>
					<i class="fas fa-hamsa"></i>
				</div>
			</div>
		</div>
		<!-------- top-about -------->
		<section class="section-top top-about">
			<div class="inner">
				<div class="logo-maruin"></div>
				<div class="ttl">
					<p>
						惡の匠で「わるだくみ」<br>
						組長Comari
					</p>
				</div>
				<div class="txt">
					<p>
						1999年、「組を作る」という夢の実現に向け活動を開始。「惡匠（わるだ組）」と命名し、オリジナルロゴを描き自作ステッカーをバラ撒きだしたのが "惡匠" の始まりです。<br>
						2013年からはオリジナルデザインブランドとして、様々なグッズ制作やアートワークを展開しています。<br>
						組員の増殖を日々目論み、さらなる "惡匠" の拡大を目標に、現在もジワジワと活動中。<br>
						惡匠グッズを手にした瞬間、貴方も貴女も立派な惡匠の組員です。世界の果てまで "惡匠"していきましょう。
					</p>
				</div>
			</div>
		</section>
		<!-------- top-handmade ----->
		<section class="section-top top-handmade">
			<div class="inner">
				<div class="primary">
					<div class="works-img">
						<div class="img-top-handmade"></div>
					</div>
					<div class="works-text">
						<h2>Handmade</h2>
						<p>
							生地選びから縫製まで、<br>全ての工程をひとつひとつ丁寧に<br>手作業で制作しています。<br><br>
							ハンドメイドの温もりある味わいを<br>楽しんでいただきたいと思っています。<br><br>現在は巻きタバコケースを<br>メインに制作しています。
						</p>
						<div class="in-btn">
							<a href="<?php echo home_url(); ?>/handmade" class="btnarrow4">Handmade</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-------- top-silk --------->
		<section class="section-top top-silk">
			<div class="inner">
				<div class="primary">
					<div class="works-img">
						<div class="img-top-silkscreen"></div>
					</div>
					<div class="works-text">
						<h2>Silkscreen</h2>
						<p>
							オリジナルデザインが製版された<br>シルクスクリーンの版を使い<br>Tシャツなどに１枚１枚手刷りで<br>プリントしています。<br><br>
							インクの色、ボディの色、刷り位置など、<br>組み合わせを無限にコラージュし<br>一点ものを多く生み出しています。<br><br>
							惡匠商品の他にもお店やイベントなどの<br>デザインTシャツを制作することもあります。
						</p>
						<div class="in-btn">
							<a href="<?php echo home_url(); ?>/silkscreen" class="btnarrow4">Silkscreen</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-------- top-works -------->
		<section class="section-top top-works" data-midnight="black">
			<div class="inner">
				<div class="info">
					<h2>Design Works</h2>
					<p>
						フライヤー、ロゴ、パッケージ、パンフレットなど<br>様々な企画のグラフィックデザインを<br>担当させていただきました。<br>
						2018年からWEBデザインやプログラミングを取り入れ、<br>ランディングページやWEBサイトを<br>制作しています。
					</p>
					<div class="in-btn">
						<a href="<?php echo home_url(); ?>/works" class="btnarrow4">Design Works</a>
					</div>
				</div>
				<div class="works-list">
					<div class="primary">
						<a class="top-a btn-effect01" href="<?php echo home_url(); ?>/category/graphic">
							<img class="img-100" src="<?php echo get_template_directory_uri();?>/assets/images/work/graphic/graphic_2015_fullmoonassembly_01.jpg" alt="Graphic">
							<div class="mask">
								<div class="caption">
									<p class="p-copy">Graphic</p>
								</div>
							</div>
						</a>
					</div>
					<div class="primary">
						<a class="top-a" href="<?php echo home_url(); ?>/category/package">
							<img class="img-100" src="<?php echo get_template_directory_uri();?>/assets/images/work/package/package_2019_ganesh_furikake01.jpg" alt="Package">
							<div class="mask">
								<div class="caption">
									<p class="p-copy">Package</p>
								</div>
							</div>
						</a>
					</div>
					<div class="primary">
						<a class="top-a" href="<?php echo home_url(); ?>/category/logo">
							<img class="img-100" src="<?php echo get_template_directory_uri();?>/assets/images/work/logo/logo_2017_atatsutei.jpg" alt="Package">
							<div class="mask">
								<div class="caption">
									<p class="p-copy">Logo</p>
								</div>
							</div>
						</a>
					</div>
					<div class="primary">
						<a class="top-a" href="<?php echo home_url(); ?>/category/web">
							<img class="img-100" src="<?php echo get_template_directory_uri();?>/assets/images/work/web/web_2021_hiramito.png" alt="Web">
							<div class="mask">
								<div class="caption">
									<p class="p-copy">Web</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-------- top-shop --------->
		<section class="section-top top-shop">
			<div class="inner">
				<h2>Shop information</h2>
				<div class="list-shop">
					<?php $args = array(
						'post_type' => 'shop_information',
					);
					$Shop_information = new WP_Query($args);
					if ($Shop_information->have_posts()) : ?>
					<?php while ($Shop_information->have_posts()) : $Shop_information->the_post(); ?>
					<div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="<?php the_field('url'); ?>" target="_blank">
								<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
							</a>
							<p class="p-big">
								<a href="<?php the_field('url'); ?>" target="_blank">
									<?php the_field('shop_name'); ?>
								</a>
							</p>										
							<p class="p-small">
							<?php the_field('address'); ?><br>
							<?php the_field('contact'); ?>
							</p>
						</div>
					</div>
					<?php endwhile; ?>
						<?php else : ?>
						<p>投稿が見つかりません。</p>		
						<?php endif; ?>		
						<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<!-------- top-thx ---------->
		<section class="section-top top-thx">
			<div class="inner">
				<h2>Special THX</h2>
				<div class="list-thx">
					<!-- スパイスのガネーシャ -->
					<?php
					$array = array(
						'post_type' => 'special_thx',
					);
					$special_thx = new WP_Query($array);
					?>
					<?php if ($special_thx->have_posts()) :?>
						<?php while ($special_thx->have_posts()) : $special_thx->the_post(); ?>
					<div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="<?php the_field('url'); ?>" target="_blank">
							<?php
								$img = get_field('image');
								$images = wp_get_attachment_image_src($img, 'サイズ');
								$img_alt = get_post(get_field('img'));
								$alt = get_post_meta ( get_post ($img) -> ID , '_wp_attachment_image_alt' , true );
								?>
								<img
								src="<?php echo $images[0]; ?>"
								alt="<?php echo $alt; ?>"
								height="<?php echo $images[2]; ?>"
								width="<?php echo $images[1]; ?>"
								>
							</a>
							<p class="p-big">
								<a href="<?php the_field('url'); ?>" target="_blank">
								<?php the_field('shop_name'); ?>
								</a>
							</p>										
							<p class="p-small">
							<?php $value = get_field('text_1') ; if(empty($value)) : else:?>
							<p class="p-small"><?php the_field('text_1'); ?></p>
							<?php endif; ?>
							<?php $value = get_field('text_2') ; if(empty($value)) : else:?>
							<p class="p-small"><?php the_field('text_2'); ?></p>
							<?php endif; ?>
							<?php $value = get_field('text_3') ; if(empty($value)) : else:?>
							<p class="p-small"><?php the_field('text_3'); ?></p>
							<?php endif; ?>
							<?php $value = get_field('text_4') ; if(empty($value)) : else:?>
							<p class="p-small"><?php the_field('text_4'); ?></p>
							<?php endif; ?>
							<?php $value = get_field('text_5') ; if(empty($value)) : else:?>
							<p class="p-small"><?php the_field('text_5'); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
                <p>投稿が見つかりません。</p>
            <?php endif;
            wp_reset_postdata(); ?>
					<!-- あかつ亭 -->
					<!-- <div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="http://akatsutei.com/" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/thx/akatsutei01.jpg" alt="あかつ亭">
							</a>
							<p class="p-big">
								<a href="http://akatsutei.com/" target="_blank">
									あかつ亭
								</a>
							</p>										
							<p class="p-small">
								Logo design<br>
								Tshirt design
							</p>
						</div>
					</div> -->
					<!-- PARADISE BLOW -->
					<!-- <div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="https://paradiseblow.com/" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/thx/pb01.jpg" alt="PARADISE BLOW">
							</a>
							<p class="p-big">
								<a href="https://paradiseblow.com/" target="_blank">
									PARADISE BLOW
								</a>
							</p>										
							<p class="p-small">
								Organize member<br>
								Flyer design<br>
								Web design
							</p>
						</div>
					</div> -->
					<!--  PARAMOUNT -->
					<!-- <div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="http://otodashi.com/" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/thx/paramount01.jpg" alt="PARAMOUNT">
							</a>
							<p class="p-big">
								<a href="http://otodashi.com/" target="_blank">
									 PARAMOUNT
								</a>
							</p>										
							<p class="p-small">
								Tshirt design
							</p>
						</div>
					</div> -->
					<!--  DELTA COMMIT -->
					<!-- <div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="https://deltacommit.com/" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/thx/deltacommit01.jpg" alt="">
							</a>
							<p class="p-big">
								<a href="https://deltacommit.com/" target="_blank">
									 DELTA COMMIT
								</a>
							</p>										
							<p class="p-small">
								Flyer design<br>
								Web design <br>
								Tshirt design
							</p>
						</div>
					</div> -->
					<!--  OmnivoreZ -->
					<!-- <div class="btn-effect01">
						<div class="in-item">
							<a class="in-img" href="http://www.omnivorez.com" target="_blank">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/thx/omnivorez01.jpg" alt="OmnivoreZ">
							</a>
							<p class="p-big">
								<a href="http://www.omnivorez.com" target="_blank">
									 OmnivoreZ
								</a>
							</p>										
							<p class="p-small">
								Organize member
							</p>
						</div>
					</div>-->	
				</div> 
			</div>
		</section>
		<!-------- top-contact ------>
		<section class="section-top top-contact">
			<div class="inner">
				<h2>Contact</h2>
				<div class="ttl">
					<a href="mailto:mail&#64;warudakumi315.com" target="_blank">
						<p>mail@warudakumi315.com</p>
					</a>
				</div>
				<div class="txt">
					<p>
						在庫確認・handmade商品の修理・惡匠商品の取扱希望・その他ご質問など、氏名と返信先を明記の上メールにてご連絡ください。<br>
						オーダーが集中している時またはお急ぎのオーダーなどは、お受けできない場合がございます。<br>
						※handmade商品・シルクスクリーンTシャツのオーダーは現在受け付けておりません。
					</p>
				</div>
			</div>
		</section>		
	</main>
    <?php
get_footer();