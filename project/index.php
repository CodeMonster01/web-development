<?php
require_once('functions/function.php');
get_header();
 ?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
        </div>

    
            <div class="carousel-inner" role="listbox">
               <?php
                $show = "SELECT * FROM  cit_banner ORDER BY ban_id DESC LIMIT 0,1";
                $query = mysqli_query($conn,$show);
                while($data=mysqli_fetch_assoc($query)){
               ?>
                <div class="item active">
                    <img class="img-responsive" src="admin/uploads/<?= $data['ban_image']; ?>" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title"><?= $data['ban_title']; ?></h1>
                                <p><?= $data['ban_sub_title']; ?></p>
                            </div>
                            <a href="<?= $data['ban_btn_url']; ?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?= $data['ban_btn_text']; ?></a>
                        </div>
                    </div>
                </div>
              <?php } ?>

              <?php
                $shows = "SELECT * FROM  cit_banner ORDER BY ban_id DESC LIMIT 1,2";
                $querys = mysqli_query($conn,$shows);
                while($datas=mysqli_fetch_assoc($querys)){
               ?>
                <div class="item">
                    <img class="img-responsive" src="admin/uploads/<?= $datas['ban_image']; ?>" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title"><?= $datas['ban_title']; ?></h1>
                                <p><?= $datas['ban_sub_title']; ?></p>
                            </div>
                            <a href="<?= $datas['ban_btn_url']; ?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?= $datas['ban_btn_text']; ?></a>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Art Of Coding</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Responsive Design</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Feature Reach</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Useful Documentation</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Fast Delivery</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Free Plugins</h3>
                                    <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Latest Products</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>

            <div class="row">
                <?php $show = "SELECT * FROM  add_product ORDER BY product_id DESC LIMIT 0,1";
                $query = mysqli_query($conn,$show);
                while($data=mysqli_fetch_assoc($query)){ ?>

                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="admin/uploads/<?= $data['pro_image'];?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="<?= $data['pro_link']; ?>">Software Development</a> <span class="text-uppercase margin-l-20">Coding</span></h4>
                    <p><?= $data['pro_detail']; ?></p>
                    <a class="link" href="<?= $data['pro_link']; ?>">Read More</a>
                </div>
                <?php } ?>

                 <?php $show = "SELECT * FROM  add_product ORDER BY product_id DESC LIMIT 1,2";
                $querys = mysqli_query($conn,$show);
                while($datas=mysqli_fetch_assoc($querys)){ ?>

                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="admin/uploads/<?= $datas['pro_image'];?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="<?= $datas['pro_link']; ?>">Website Development</a> <span class="text-uppercase margin-l-20">Development</span></h4>
                    <p><?= $datas['pro_detail']; ?></p>
                    <a class="link" href="<?= $datas['pro_link']; ?>">Read More</a>
                </div>
                <?php } ?>

                <?php $show = "SELECT * FROM  add_product ORDER BY product_id DESC LIMIT 0,1";
                $querys = mysqli_query($conn,$show);
                while($datas=mysqli_fetch_assoc($querys)){ ?>

                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="admin/uploads/<?= $datas['pro_image'];?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="<?= $datas['pro_link']; ?>">Website Design</a> <span class="text-uppercase margin-l-20">Design</span></h4>
                    <p><?= $datas['pro_detail']; ?></p>
                    <a class="link" href="<?= $datas['pro_link']; ?>">Read More</a>
                </div>
                <?php } ?>
            </div>
            <!--// end row -->
        </div>

        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Customer Reviews</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                                    </div>
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
        </div>

        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
                        <div class="pricing">
                            <?php
                                $show = "SELECT * FROM  add_price ORDER BY id LIMIT 1";
                                $query = mysqli_query($conn,$show);
                                while($data=mysqli_fetch_assoc($query)){ ?>

                            <div class="margin-b-30">
                                <i class="pricing-icon icon-chemistry"></i>
                                <h3><?= $data['price_name'];?> <span> - $</span> <?= $data['price_amount'];?></h3>
                                <p><?= $data['price_detail'];?></p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item"><?= $data['price_list1'];?></li>
                                <li class="pricing-list-item"><?= $data['price_list2'];?></li>
                                <li class="pricing-list-item">50 Users Panels</li>
                            </ul>
                            <a href="<?= $data['price_link'];?>" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
                        <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-badge"></i>
                                <h3>Professional <span> - $</span> 149</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 100 products</li>
                                <li class="pricing-list-item">100 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-shield"></i>
                                <h3>Advanced <span> - $</span> 249</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Extended Features</li>
                                <li class="pricing-list-item">Unlimited products</li>
                                <li class="pricing-list-item">Unlimited Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Our Clients</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>

        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Showcase</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>

                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <?php
                        $show = "SELECT * FROM  add_product_showcase ORDER BY id LIMIT 0,1";
                        $query = mysqli_query($conn,$show);
                        while($data=mysqli_fetch_assoc($query)){ ?> 
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="admin/uploads/<?= $data['image']; ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $data['head']; ?></h3>
                                <p class="color-white margin-b-0"><?= $data['details']; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $data['link']; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <?php
                        $show = "SELECT * FROM  add_product_showcase ORDER BY id LIMIT 1,2";
                        $query = mysqli_query($conn,$show);
                        while($data=mysqli_fetch_assoc($query)){ ?> 
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="admin/uploads/<?= $data['image']; ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $data['head']; ?></h3>
                                <p class="color-white margin-b-0"><?= $data['details']; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $data['link']; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <?php
                        $show = "SELECT * FROM  add_product_showcase ORDER BY id LIMIT 0,1";
                        $query = mysqli_query($conn,$show);
                        while($data=mysqli_fetch_assoc($query)){ ?> 
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="admin/uploads/<?= $data['image']; ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $data['head']; ?></h3>
                                <p class="color-white margin-b-0"><?= $data['details']; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $data['link']; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                         <?php
                        $show = "SELECT * FROM  add_product_showcase ORDER BY id LIMIT 2,3";
                        $query = mysqli_query($conn,$show);
                        while($data=mysqli_fetch_assoc($query)){ ?> 
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="admin/uploads/<?= $data['image']; ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $data['head']; ?></h3>
                                <p class="color-white margin-b-0"><?= $data['details']; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $data['link']; ?>"></a>
                        </div>
                         <?php } ?>
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <?php
                        $show = "SELECT * FROM  add_product_showcase ORDER BY id LIMIT 1";
                        $query = mysqli_query($conn,$show);
                        while($data=mysqli_fetch_assoc($query)){ ?> 
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="admin/uploads/<?= $data['image']; ?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $data['head']; ?></h3>
                                <p class="color-white margin-b-0"><?= $data['details']; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $data['link']; ?>"></a>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </div>
<?php 
get_footer();?>