<?php 
include_once('./components/header.php');
$header_details = executeSelect('header',array(),array('content_type' => 'index'));
$header_content_details = executeSelectSingle('header',array(),array('content_type' => 'index_content'));
$mvp_details = executeSelect('mvp_details',array(),array());
$feature_details = executeSelect('features',array(),array('content_type' => 'index'));
?>
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mt-3 slider">
    <div class="owl-carousel header-carousel position-relative">
        <?php foreach($header_details as $row => $header){ ?>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid slider_img" src="zpress/<?=$header['profile_picture']?>" alt=" ">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?=$header['top_content']?></h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4"><?=$header['middle_content']?></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2"><?=$header['bottom_content']?></p>
                            <a href="<?=$header['button_link']?>" class="btn btn-primary py-md-3 px-md-5 me-7 animated slideInLeft font-15"><?=$header['button_name']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Carousel End -->

<!-- Welcome to COMAAS Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="zpress/<?=$header_content_details['profile_picture']?>" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class=" text-start">
                        <h1 class="display-5 mb-4 font-24"><?=$header_content_details['top_content']?></h1>
                    </div>
                    <p class="mb-4 pb-2 font-18"><?=$header_content_details['bottom_content']?></p>
                    <a href="<?=$header_content_details['button_link']?>" class="btn btn-primary py-3 px-5 font-16"><?=$header_content_details['button_name']?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome to COMAAS End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach($mvp_details as $row => $value){?>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="zpress/<?=$value['profile_picture']?>" alt="">
                    </div>
                    <div style="height: 300px;" class="p-4 text-center border border-5 border-light border-top-0 border-bottom-0 pb-0">
                        <h4 class="mb-3 font-24"><?=ucwords(str_replace('_',' ', $value['type']))?></h4>
                        <p class="font-18"><?=$value['content']?></p>
                    </div>
                    <div class="p-4 text-center border border-5 border-light border-top-0">
                        <a class="fw-medium font-16" href="<?=$value['link']?>">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="text-start">
                        <h1 class="display-5 mb-4"></h1>
                    </div>
                    <p class="mb-4 pb-2"></p>
                    <?php include_once('./components/feature.php'); ?>                    
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="zpress/<?=$feature_details[0]['profile_picture']?>" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php 
include_once('./components/testinomials.php'); 
include_once('./components/footer.php'); 
?>
