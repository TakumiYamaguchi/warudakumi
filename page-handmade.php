<?php
/*
Template Name: Handmade
*/
?>
<?php get_header(); ?>
<main class="main">
	<!-------- page-view ----->
	<section class="page-view" data-midnight="black">
		<div class="inner">
			<?php
			$array = array(
				'post_type' => 'page-top',
				'p' => 329,
			);
			$section_top_view = new WP_Query($array);
			?>
			<?php if ($section_top_view->have_posts()) : ?>
				<?php while ($section_top_view->have_posts()) : $section_top_view->the_post(); ?>
					<div class="ttl-box">
						<div class="works-img">
							<img class="topview-handmade" src="<?php the_field('image'); ?>" alt="Handmade">
						</div>
						<div class="works-text">
							<h2>Handmade</h2>
							<p class="p-first">
								<?php the_content(); ?>
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
	<!------- handmade ---------->
	<div class="primary">
		<div class="inner">
			<div class="ttl-handmade">
				<h5>巻きタバコケース</h5>
				<p>種類と特徴</p>
			</div>
			<div class="shag-type">
				<div class="shag-type-box">
					<div class="in-img">
						<div class="mini-leather"></div>
					</div>
					<div class="in-text">
						<h6>
							<span>mini巻きタバコケース</span><br>
							ALL 革
						</h6>
						<p>
							巻きたばこの葉を 「直接入れるタイプ」 のミニ巻きたばこケースです。コンパクトな手の平サイズでポケットにも収まりやすく、携帯にとても便利です。<br>
							全て革を使い制作した「ALL革」タイプは、丈夫で長持ちします。<br>
							※シャグポケット内はビニール素材を使用しています。
						</p>
					</div>
				</div>
				<div class="shag-type-box">
					<div class="in-img">
						<div class="mini-cloth"></div>
					</div>
					<div class="in-text">
						<h6>
							<span>mini巻きタバコケース</span><br>
							布 × 革
						</h6>
						<p>
							巻きたばこの葉を 「直接入れるタイプ」 のミニ巻きたばこケースです。コンパクトな手の平サイズでポケットにも収まりやすく、携帯にとても便利です。<br>
							本体外側には、丈夫でしっかりとした厚みのある８号帆布を使用しています。<br>
							※シャグポケット内はビニール素材を使用しています。
						</p>
					</div>
				</div>
				<div class="shag-type-box">
					<div class="in-img">
						<div class="regular-cloth"></div>
					</div>
					<div class="in-text">
						<h6>
							<span>巻きタバコケース</span><br>
							レギュラー
						</h6>
						<p>
							巻きタバコを「パッケージのまま」収納する巻きたばこケースです。内側には持ち手用のベルトが付いており、タバコを巻く際にケースを置かずに持ったままタバコを巻くことができます。<br>
							また内側にはフタボタンがあるため、パッケージのフタをフタボタンで留めることにより、ケースにパッケージをピッタリ固定することができます。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="secondary">
		<div class="inner">
			<div class="ttl-handmade">
				<h5>使い方</h5>
				<p>mini巻きタバコケース</p>
			</div>
			<div class="shag-flow">
				<div class="shag-flow-box">
					<div class="in-img">
						<div class="img-use01"></div>
					</div>
					<div class="in-text">
						<h5>１<br>shag</h5>
						<p>
							シャグポケットに巻きタバコの葉を直接入れます。ビニール素材のポケットは、葉の乾燥を防ぐ他、革の色や匂い移りも防ぎます。
						</p>
					</div>
				</div>
				<div class="shag-flow-box">
					<div class="in-img">
						<div class="img-use02"></div>
					</div>
					<div class="in-text">
						<h5>２<br>filter</h5>
						<p>
							ファスナーポケットにフィルターを入れます。長めのフィルターを縦に並べて丁度良く収まる深さです。
						</p>
					</div>
				</div>
				<div class="shag-flow-box">
					<div class="in-img">
						<div class="img-use03"></div>
					</div>
					<div class="in-text">
						<h5>３<br>paper</h5>
						<p>
							ペーパーポケットにペーパーをセットします。左からスライドして挿入できます。幅1+1/4サイズまで収納可能です。
						</p>
					</div>
				</div>
				<div class="shag-flow-box">
					<div class="in-img">
						<div class="img-use05"></div>
					</div>
					<div class="in-text">
						<h5>４<br>rolling</h5>
						<p>
							内側のレザー部分をお皿代わりに使い、巻きタバコを巻きます。Let's enjoy Rolling!!
						</p>
					</div>
				</div>
				<div class="shag-flow-box">
					<div class="in-img">
						<div class="img-use06"></div>
					</div>
					<div class="in-text">
						<h5>５<br>complete</h5>
						<p>
							巻きタバコの完成です！内側にペーパーやフィルターも揃っているので出しやすく、お皿部分も大きめなので安定して巻きタバコを巻くことができます。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
