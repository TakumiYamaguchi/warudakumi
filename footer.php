<?php
/*
Template Name: footer
*/
?>
<footer>
    <div class="fixed-sns">
        <p class="sns-ttl">follow me</p>
        <div class="line-high"></div>
        <a href="https://www.instagram.com/warudakumi315/" class="sns-btn" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="http://warudakumi.theshop.jp/" class="sns-btn" target="_blank">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
    <div class="inner">
        <div class="footer-logo">
            <a href="/" class="img-logo"></a>
        </div>
        <ul class="footer-nav">
            <li><a href="<?php echo home_url(); ?>/">Home</a></li>
            <li><a href="<?php echo home_url(); ?>/handmade">Handmade</a></li>
            <li><a href="<?php echo home_url(); ?>/silkscreen">Silkscreen</a></li>
            <li><a href="<?php echo home_url(); ?>/works">Design Works</a></li>
        </ul>
    </div>
    <p class="footer-copyright">© 2021 惡匠 warudakumi.</p>
</footer>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- JS iScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- JS nav -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/nav.js" type="text/javascript" charset="utf-8">
</script>
<!-- JS yurayura -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/yurayura.js" type="text/javascript" charset="utf-8">
</script>
<!-- midnight -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/midnight.jquery.min.js" type="text/javascript"
    charset="utf-8"></script>
<!-- colorbox -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.colorbox-min.js" type="text/javascript"
    charset="utf-8"></script>
<script>
jQuery(function() {
    jQuery('.midnight').midnight();
});
</script>
<!-- JS colorbox 02 -->
<script>
jQuery(document).ready(function() {
    jQuery(".group1").colorbox({
        rel: 'group1',
        maxWidth: "90%",
        maxHeight: "90%"
    });
});
</script>
<!-------- Loading END ----->
<script>
window.onload = function() {
    const loader = document.getElementById('loading-wrapper');
    loader.classList.add('completed');
};

jQuery(function() {
    jQuery('#tab li a').each(function() {
        var href = jQuery(this).attr('href');
        if (location.href.match(href)) {
            jQuery(this).parent().addClass('on');
        } else {
            jQuery(this).parent().removeClass('on');
        }
    });
});
</script>

<!-------- Loading END ----->
<script>
// 最初の表示枚数
var moreNum = 24;
$('.article:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
$('.more').on('click', function() {
    $('.is-hidden').slice(0, moreNum).fadeIn(300).queue(function(next) {
        $(this).removeClass('is-hidden');
    });
    if ($('.is-hidden').length == 0) {
        $('.more').fadeOut();
    }
});
</script>





<?php wp_footer(); ?>
</body>

</html>