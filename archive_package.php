<?php
/*
Template Name: Archive_Package
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
                <h3>Package</h3>
            </div>
        </div>
        <div class="tab_nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>/works">Design works All</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_graphic">Graphic</a></li>
                <li class="on"><a href="<?php echo home_url(); ?>/archive_package">Package</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_logo">Logo</a></li>
                <li><a href="<?php echo home_url(); ?>/archive_web">Web</a></li>
            </ul>
        </div>
    </section>
    <!------- package ---------->
    <div class="inner works-inner">
        <div class="contents1">
            <!--- 2019 スパイス屋のふりかけ ---->
            <div class="in-work" id="2019-ganesh-furikake-Package">
                <div class="in-text">
                    <p class="p-small"><span>Package</span> - seal</p>
                    <h4>スパイスのガネーシャ</h4>
                    <p class="p-en">2019</p>
                    <a href="https://www.spice-ganesh.com/" target="_blank">
                        https://www.spice-ganesh.com/
                    </a>
                </div>
                <div class="in-img">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_furikake01.jpg" alt="スパイス屋のふりかけ">
                </div>
            </div>
            <!--- 2019 スパイス屋の七味 ---->
            <div class="in-work" id="2019-ganesh-shichimi-Package">
                <div class="in-text">
                    <p class="p-small"><span>Package</span> - seal</p>
                    <h4>スパイスのガネーシャ</h4>
                    <p class="p-en">2019</p>
                    <a href="https://www.spice-ganesh.com/" target="_blank">
                        https://www.spice-ganesh.com/
                    </a>
                </div>
                <div class="in-img">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi01.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi02.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi03.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi04.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi05.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi06.jpg" alt="スパイス屋の七味">
                    <img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/work/package/package_2019_ganesh_shichimi07.jpg" alt="スパイス屋の七味">
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
