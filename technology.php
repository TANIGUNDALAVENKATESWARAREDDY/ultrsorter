<?php include_once('./components/header.php');
$header_details = executeSelectSingle('header',array(),array('content_type' => 'technology_content'));
//$content = explode('#',$header_details['bottom_content']);
$feature_details = executeSelect('features',array(),array('content_type' => 'technology'));

?>

<!-- Page Header Start -->
<div class="container-fluid gain-sorter py-1 mb-5 mt-3 bg-light">
    <div class="container py-1">
        <h1 class="display-3 text-white mb-2 animated slideInDown tech font-24 text-upper">Technology</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-black breadcrumb_link" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-black active" aria-current="page">Technology</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 col-md-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                        <a class="display-5 mb-1 text-black font-20"  style="position: initial;"><?=$header_details['top_content']?></a>
                    </div>
                    <p class="mb-1 pb-2 justify-content-center">
                        <?=$header_details['bottom_content']?>
                        <!-- <ul>
                            <?php //foreach($content as $data){ ?>
                            <li class="font-16"><?php //$data?></li>
                            <?php //} ?>
                        </ul> -->
                    </p>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 d-none" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start">
                            <a class="display-5 mb-4 text-black font-20"  style="position: initial;"><?=$header_details['middle_content']?></a>
                    </div>
                    <div class="pe-lg-0 mt-4 align-items-center justify-content-center" style="min-height: 400px;">
                        <div class="align-items-center justify-content-center text-center h-100">
                            <img class="img-fluid h-100 " src="zpress/<?=$header_details['profile_picture']?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="./img/tech.jpg" style="object-fit: cover;" alt="">
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- packaging Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 my-5" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="section-title text-start mb-4">
                            <a class="display-5 mb-4 text-black font-20"  style="position: initial;">Components</a>
                    </div>
                    <div class="row g-4">
                        <?php foreach($feature_details as $row => $feature){ 
                            $detail_content = '';
                            if(strpos($feature['bottom_content'], '#') !== 0){
                                $detail_content = explode('#',$feature['bottom_content']);
                            }
                        ?>
                        <div class="col-lg-3 col-sm-1">
                            <div class="row g-4">
                                <div class="me-4 fea_title">
                                    <h5 class="mb-0 font-16"><?=$feature['top_content']?></h5>
                                </div>
                            </div>
                            <div class="row g-4 pt-1 mb-1">
                                <div class="d-flex fea_title">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 100px; height: 100px" id="<?=$feature['button_name']?>">
                                        <img class="img-fluid" src="zpress/<?=$feature['profile_picture']?>" style="border: 1px solid #719FAF;object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="align-items-center" id="<?=$feature['button_link']?>" style="display:none;">
                                    <p class="mb-4 pb-2">
                                        <?php if(isset($detail_content) && !empty($detail_content)){ ?>
                                        <ul> 
                                            <?php foreach($detail_content as $feat_data){ ?>
                                            <li class="font-16"><?=$feat_data?></li>
                                            <?php }?>                                                
                                        </ul>
                                        <?php } else{ ?>
                                            <?=$feature['bottom_content']?>   
                                        <?php } ?>
                                    </p>
                                </div>
                            </div> 
                        </div>
                        <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- packaging End -->
        
<?php include_once('./components/footer.php') ?>