<?php 
include_once('./components/header.php'); 
include_once('./components/gallery.php'); 
$feature_details = executeSelect('features',array(),array('content_type' => 'photo'));
$sample_photo = executeSelectSingle('gallery',array(),array('content_type' => 'samples'));
$grain_sample_photo = executeSelectSingle('gallery',array('profile_picture'),array('content_type' => 'grain_samples'));

?>


<!-- Quote Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="zpress/<?=$grain_sample_photo['profile_picture']?>" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s" style="height:2610px !important">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4 font-20"><?=$sample_photo['top_content']?></h1>
                    </div>
                    <p class="mb-4 pb-2 font-18"><?=$sample_photo['bottom_content']?></p>
                    <form>
                        <div class="row g-3">
                            <?php foreach($feature_details as $row => $feature){ 
                                $detail_content = '';
                                if(strpos($feature['bottom_content'], '#') !== 0){
                                    $detail_content = explode('#',$feature['bottom_content']);
                                }
                                if($row < 6){
                            ?>
                            <div class="col-lg-4 col-sm-1">
                            <?php }else{ ?>
                               <div class="col-12">     
                            <?php } ?>
                                <div class="row g-4 mt-1">
                                    <div class="me-4 fea_title">
                                        <h5 class="mb-0 font-16"><?=$feature['top_content']?></h5>
                                    </div>
                                </div>
                                <div class="row g-4  pt-1 mb-1">
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
                            <?php } ?>
                            <div style="clear:both"></div>
                            <div class="col-12">
                                <img class="img-fluid bg-light p-2 mx-auto mb-3" src="zpress/<?=$sample_photo['profile_picture']?>" style="width: 518px; height: 90px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<?php include_once('./components/footer.php') ?>