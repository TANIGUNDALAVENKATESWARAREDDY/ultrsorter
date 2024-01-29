<?php 
include_once('./components/header.php');
$header_details = executeSelect('header',array(),array('content_type' => 'howitworks'));
$header_content_details = executeSelectSingle('header',array(),array('content_type' => 'howitworks_content'));

?>

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mt-3">
    <div class="owl-carousel header-carousel position-relative">
        <?php foreach($header_details as $row => $header){ ?>   
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid  slider_img" src="zpress/<?=$header['profile_picture']?>" alt=" ">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?=$header['top_content']?></h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4"><?=$header['middle_content']?></h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2"><?=$header['bottom_content']?></p>
                            <a href="<?=$header['button_link']?>" class="btn btn-primary py-md-3 px-md-5 me-7 animated slideInLeft"><?=$header['button_name']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Carousel End -->

<!-- How Work Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0 font-16">
                    <!-- <div class="section-title text-start head_title mb-4">
                        <h1 class="display-5 text-white">How To Work</h1>
                    </div> -->
                    <p class="mb-4 pb-2 font-18"><span class="font-20"><strong><?=$header_content_details['top_content']?></strong></span> <?=$header_content_details['middle_content']?> <span  class="font-18"><strong><?=$header_content_details['top_content']?> </strong></span><?=$header_content_details['bottom_content']?></p>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="zpress/<?=$header_content_details['profile_picture']?>"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--  How Work End -->

<?php 
include_once('./components/gallery.php'); 
include_once('./components/testinomials.php'); 
include_once('./components/footer.php');
?>