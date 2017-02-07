<?php

use app\models\Menu as Menu2;
use yii\helpers\Html;
use yii\widgets\Menu;
return;
?>

<!--header start-->
<header id="header" class="tt-nav transparent-header">
    <div class="header-sticky light-header ">
        <div class="container">
            <div id="materialize-menu" class="menuzord">
                <!--logo start-->
                <?= Html::a(
                        Html::img(['data/img/logo.png'], ['alt'=>'Logo ATC', 'class'=>'logo-dark']) .
                        Html::img(['data/img/logo-white.png'], ['alt'=>'Logo ATC', 'class'=>'logo-light']),
                        ['/site/index'], 
                        [
                            'class' =>'logo-brand',
                        ]
                    ) ?>
                <!--logo end-->

                <!--mega menu start-->
                <?= Menu::widget([
                    'options' => ['class'=>'menuzord-menu pull-right light'],
                    'submenuTemplate' => '<ul class=\'dropdown\'>{items}</ul>',
                    'items' => (new Menu2())->getMenus(Menu2::CATEGORY_MAIN),
                ]) ?>
                
<!--                <ul class="menuzord-menu pull-right light">
                    <li><a href="javascript:void(0)">Home</a>
                        <div class="megamenu">
                            <div class="megamenu-row">
                                <div class="col3">
                                    <h2>Default Demos</h2>
                                    <ul class="list-unstyled clearfix">
                                        <li><a href="index-2.html">Home Default</a></li>
                                        <li><a href="index-3.html">Home Canvas</a></li>
                                        <li><a href="index-4.html">Home Elegent</a></li>
                                        <li><a href="index-5.html">Home Startup</a></li>
                                        <li><a href="index-5-consulting.html">Home Consulting</a></li>
                                        <li><a href="op-index-coffeeshop.html" target="_blank">Home Coffee Shop</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Complete Demos</h2>
                                    <ul class="list-unstyled clearfix">
                                        <li><a href="creative-index.html" target="_blank">Creative Demo</a></li>
                                        <li><a href="corporate-index.html" target="_blank">Corporate Demo</a></li>
                                        <li><a href="agency-index.html" target="_blank">Agency Demo</a></li>
                                        <li><a href="construction-index.html" target="_blank">Construction Demo</a></li>
                                        <li><a href="seo-index.html" target="_blank">SEO Demo</a></li>
                                        <li><a href="restaurant-index.html" target="_blank">Restaurant Demo</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Onepage Demo</h2>
                                    <ul class="list-unstyled clearfix">
                                        <li><a href="op-index-1.html" target="_blank">materialize Onepage</a></li>
                                        <li><a href="op-index-portfolio.html" target="_blank">Onepage Portfoilo</a></li>
                                        <li><a href="op-index-event.html" target="_blank">Onepage Event</a></li>
                                        <li><a href="op-index-book.html" target="_blank">Book Landing Page</a></li>
                                        <li><a href="op-index-app.html" target="_blank">App Landing Page 1</a></li>
                                        <li><a href="op-index-app-2.html" target="_blank">App Landing Page 2</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Specialized Home</h2>
                                    <ul class="list-unstyled clearfix">
                                        <li><a href="index-8-portfolio.html">Home Portfolio</a></li>
                                        <li><a href="index-7-blog.html">Home Blog</a></li>
                                        <li><a href="index-6-charity.html">Home Charity</a></li>
                                        <li><a href="coming-soon-1.html" target="_blank">Coming Soon One</a></li>
                                        <li><a href="coming-soon-2.html" target="_blank">Coming Soon Two</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a href="javascript:void(0)">Pages</a>
                        <div class="megamenu">
                            <div class="megamenu-row">
                                <div class="col3">
                                    <h2>Menu Type Page</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="about-us.html">About Us 1</a></li>
                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                        <li><a href="about-us-3.html">About Us 3</a></li>
                                        <li><a href="service.html">Services 1</a></li>
                                        <li><a href="service-2.html">Services 2</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Menu Type Page</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="team-1.html">Our Team 1</a></li>
                                        <li><a href="team-2.html">Our Team 2</a></li>
                                        <li><a href="faq.html">FAQ Page 1</a></li>
                                        <li><a href="faq-2.html">FAQ Page 2</a></li>
                                        <li><a href="support.html">Support Page</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Menu Type Page</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="clients.html">Our Clients</a></li>
                                        <li><a href="contact-us.html">Contact 1</a></li>
                                        <li><a href="contact-us-2.html">Contact 2</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="404-alt.html">Error 404 Alt</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Menu Type Page</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="login-form.html">Login/Register 1</a></li>
                                        <li><a href="login-form-2.html" target="_blank">Login/Register 2</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a href="javascript:void(0)">Features</a>
                        <ul class="dropdown">
                            <li class="active"><a href="#">Sliders</a>
                                <ul class="dropdown">
                                    <li class="active"><a href="#">Slider Revolution</a>
                                        <ul class="dropdown">
                                            <li class="active"><a href="slider-revoulation-fullscreen.html">Full Screen</a></li>
                                            <li><a href="slider-revoulation-fullwidth.html">Full Width</a></li>
                                            <li><a href="slider-revoulation-kenburns.html">Kenburns</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Parallax</a>
                                        <ul class="dropdown">
                                            <li><a href="slider-revoulation-parallax-1.html">Parallax Slider</a></li>
                                            <li><a href="slider-revoulation-parallax-book.html">Parallax Book</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Slider Rotate Text</a>
                                        <ul class="dropdown">
                                            <li><a href="text-rotator-1.html">Rotate Text 1</a></li>
                                            <li><a href="text-rotator-2.html">Rotate Text 2</a></li>
                                            <li><a href="text-rotator-3.html">Rotate Text 3</a></li>
                                            <li><a href="text-rotator-4.html">Rotate Text 4</a></li>
                                            <li><a href="text-rotator-5.html">Rotate Text 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Hero Unit</a>
                                        <ul class="dropdown">
                                            <li><a href="hero-static.html">Hero Static</a></li>
                                            <li><a href="hero-static-left.html">Hero Static Left</a></li>
                                            <li><a href="hero-static-right.html">Hero Static Right</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="hero-cloud.html">Animate Cloud</a></li>
                                    <li><a href="hero-html-video.html">HTML5 Video</a> </li>
                                </ul>
                            </li>
                            <li><a href="#">Menu Style Group 1</a>
                                <ul class="dropdown">
                                    <li><a href="menu-transparent.html">Transparent</a></li>
                                    <li><a href="menu-semi-transparent.html">Semi Transparent</a></li>
                                    <li><a href="menu-center.html">Menu Center</a></li>
                                    <li><a href="menu-bottom.html">Bottom Position</a></li>
                                    <li><a href="menu-floating.html">Floating Menu</a></li>
                                    <li><a href="agency-index.html" target="_blank">Full Screen Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu Style Group 2</a>
                                <ul class="dropdown">
                                    <li><a href="menu-light.html">Menu Light</a></li>
                                    <li><a href="menu-topbar.html">Menu Topbar</a></li>
                                    <li><a href="menu-box.html">Menu Box</a></li>
                                    <li><a href="menu-border-box.html">Menu Border Box</a></li>
                                    <li><a href="menu-dark.html">Menu Dark</a></li>
                                    <li><a href="menu-topbar-alt.html">Menu Brand Color</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Page Title</a>
                                <ul class="dropdown">
                                    <li><a href="page-title.html"> Default Title</a></li>
                                    <li><a href="page-title-bg.html"> Background Title</a></li>
                                    <li><a href="page-title-fixed-bg.html"> Background Fixed</a></li>
                                    <li><a href="page-title-center.html"> Center Title</a></li>
                                    <li><a href="page-title-dark.html"> Dark Title</a></li>
                                    <li><a href="page-title-parallax-bg.html"> Parallax Title</a></li>
                                    <li><a href="page-title-no-bg.html"> No Background</a></li>
                                    <li><a href="page-title-pattern-bg.html"> Pattern Title</a></li>
                                    <li><a href="page-title-right.html"> Right Title</a></li>
                                    <li><a href="page-title-mini.html"> Mini Title</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Footer</a>
                                <ul class="dropdown">
                                    <li><a href="footer-1.html">Footer Style 1</a></li>
                                    <li><a href="footer-2.html">Footer Style 2</a></li>
                                    <li><a href="footer-3.html">Footer Style 3</a></li>
                                    <li><a href="footer-4.html">Footer Style 4</a></li>
                                    <li><a href="footer-5.html">Footer Style 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0)">Portfolio</a>
                        <ul class="dropdown">
                            <li><a href="#">Boxed Style</a>
                                <ul class="dropdown">
                                    <li><a href="#">Boxed Gutter Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-4.html">4 Column</a></li>
                                            <li><a href="portfolio-3.html">3 Column</a></li>
                                            <li><a href="portfolio-2.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Boxed Gutter Less</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-4-gutterless.html">4 Column</a></li>
                                            <li><a href="portfolio-3-gutterless.html">3 Column</a></li>
                                            <li><a href="portfolio-2-gutterless.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Wide Style</a>
                                <ul class="dropdown">
                                    <li><a href="#">Wide Gutter Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-6-fullwidth.html">6 Column</a></li>
                                            <li><a href="portfolio-5-fullwidth.html">5 Column</a></li>
                                            <li><a href="portfolio-4-fullwidth.html">4 Column</a></li>
                                            <li><a href="portfolio-3-fullwidth.html">3 Column</a></li>
                                            <li><a href="portfolio-2-fullwidth.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Wide Gutter Less</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-6-fullwidth-gutterless.html">6 Column</a></li>
                                            <li><a href="portfolio-5-fullwidth-gutterless.html">5 Column</a></li>
                                            <li><a href="portfolio-4-fullwidth-gutterless.html">4 Column</a></li>
                                            <li><a href="portfolio-3-fullwidth-gutterless.html">3 Column</a></li>
                                            <li><a href="portfolio-2-fullwidth-gutterless.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Card Style</a>
                                <ul class="dropdown">
                                    <li><a href="#">Card Boxed Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-card-4.html">4 Column</a></li>
                                            <li><a href="portfolio-card-3.html">3 Column</a></li>
                                            <li><a href="portfolio-card-2.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Card Full Width</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-card-6-fullwidth.html">6 Column</a></li>
                                            <li><a href="portfolio-card-5-fullwidth.html">5 Column</a></li>
                                            <li><a href="portfolio-card-4-fullwidth.html">4 Column</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Title Style</a>
                                <ul class="dropdown">
                                    <li><a href="#">Title Boxed Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-title-4.html">4 Column</a></li>
                                            <li><a href="portfolio-title-3.html">3 Column</a></li>
                                            <li><a href="portfolio-title-2.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Title Width Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-title-5-fullwidth.html">5 Column</a></li>
                                            <li><a href="portfolio-title-4-fullwidth.html">4 Column</a></li>
                                            <li><a href="portfolio-title-3-fullwidth.html">3 Column</a></li>
                                            <li><a href="portfolio-title-2-fullwidth.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Masonry Style</a>
                                <ul class="dropdown">
                                    <li><a href="#">Masonry Boxed Style</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-masonry-3.html">3 Column</a></li>
                                            <li><a href="portfolio-masonry-2.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry Full Width</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-masonry-3-fullwidth.html">3 Column</a></li>
                                            <li><a href="portfolio-masonry-2-fullwidth.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry Gutter Less</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-masonry-3-gutterless.html">3 Column</a></li>
                                            <li><a href="portfolio-masonry-2-gutterless.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Masonry Gutterless Full</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-masonry-3-gutterless-full.html">3 Column</a></li>
                                            <li><a href="portfolio-masonry-2-gutterless-full.html">2 Column</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="portfolio-details-gallery.html">Portfolio Details Gallery</a></li>
                            <li><a href="portfolio-details-2.html">Portfolio Details Image</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0)">Blog</a>
                        <ul class="dropdown">
                            <li><a href="#">Standard</a>
                                <ul class="dropdown ">
                                    <li><a href="blog-sidebar-right.html">Sidebar Right</a></li>
                                    <li><a href="blog-sidebar-left.html">Sidebar Left</a></li>
                                    <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Masonry</a>
                                <ul class="dropdown ">
                                    <li><a href="blog-grid-masonry-2.html">Masonry 2 Column</a></li>
                                    <li><a href="blog-grid-masonry-2-sidebar.html">Masonry 2 Sidebar</a></li>
                                    <li><a href="blog-grid-masonry-3.html">Masonry 3 Column</a></li>
                                    <li><a href="blog-grid-masonry-4.html">Masonry 4 Column</a></li>
                                    <li><a href="blog-grid-masonry-4-fullwidth.html">Masonry Fullwidth</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Card Style</a>
                                <ul class="dropdown ">
                                    <li><a href="blog-card-2.html">Card 2 Column</a></li>
                                    <li><a href="blog-card-3.html">Card 3 Column</a></li>
                                    <li><a href="blog-card-4.html">Card 4 Column</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Grid</a>
                                <ul class="dropdown ">
                                    <li><a href="blog-grid.html">Blog Grid Column</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                    <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Blog Details</a>
                                <ul class="dropdown ">
                                    <li><a href="blog-single-sidebar-right.html">Sidebar Right</a></li>
                                    <li><a href="blog-single-sidebar-left.html">Sidebar Left</a></li>
                                    <li><a href="blog-single-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0)">Shortcodes</a>
                        <div class="megamenu">
                            <div class="megamenu-row">
                                <div class="col3">
                                    <h2>Shortcode List One</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="shortcode-accordion.html">Accordion</a></li>
                                        <li><a href="shortcode-alert.html">Alert</a></li>
                                        <li><a href="shortcode-blog.html">Blog</a></li>
                                        <li><a href="shortcode-button.html">Button</a></li>
                                        <li><a href="shortcode-clients.html">Clients</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Shortcode List Two</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="shortcode-featured-box.html">Featured Box</a></li>
                                        <li><a href="shortcode-fun-facts.html">Fun Facts</a></li>
                                        <li><a href="shortcode-gallery.html">Gallery</a></li>
                                        <li><a href="shortcode-hero-block.html">Hero Block</a></li>
                                        <li><a href="shortcode-progressbar.html">Progress Bar</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Shortcode List Three</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="shortcode-promo-box.html">Promo Block</a></li>
                                        <li><a href="shortcode-tab.html">Tab</a></li>
                                        <li><a href="shortcode-table.html">Table </a></li>
                                        <li><a href="shortcode-team.html">Team </a></li>
                                        <li><a href="shortcode-testimonial.html">Testimonial </a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <h2>Shortcode List Four</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="shortcode-pricing-table.html">Pricing Table</a></li>
                                        <li><a href="shortcode-food-menu.html">Restaurant Menu</a></li>
                                        <li><a href="text-rotator-1.html">Rotate Text 1</a></li>
                                        <li><a href="text-rotator-2.html">Rotate Text 2</a></li>
                                        <li><a href="text-rotator-3.html">Rotate Text 3</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li><a href="javascript:void(0)">Contact</a>
                        <ul class="dropdown">
                            <li><a href="contact-us.html">Contact One</a></li>
                            <li><a href="contact-us-2.html">Contact Two</a></li>
                        </ul>
                    </li>

                </ul>-->
                <!--mega menu end-->

            </div>
        </div>
    </div>

</header>
<!--header end-->