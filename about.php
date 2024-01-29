<?php include_once('./components/header.php');
$header_details = executeSelectSingle('header',array(),array('content_type' => 'about'));
$mvp_details = executeSelect('mvp_details',array(),array());
$team_details = executeSelect('team_experts',array(),array());
$feature_details = executeSelect('features',array(),array('content_type' => 'index'));
?>
<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden mt-2 mb-5 px-lg-0">
  <div class="container feature px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 feature-text py-5 wow fadeIn"
        data-wow-delay="0.5s">
        <div class="p-lg-5 ps-lg-0">
          <div class=" text-start">
            <h1 class="display-5 mb-4 font-24"><?=$header_details['top_content']?></h1>
          </div>
          <p class="mb-4 pb-2 font-18">
            <?=$header_details['middle_content']?> <?=$header_details['bottom_content']?>
          </p>
          <?php include_once('./components/feature.php'); ?>
        </div>
      </div>
      <div class="col-lg-6 pe-lg-0" style="min-height: 400px">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="zpress/<?=$header_details['profile_picture']?>" style="object-fit: cover" alt=""/>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

  <!-- Feature Start -->
  <div class="container-fluid bg-light overflow-hidden px-lg-0 my-5" style="margin: 6rem 0;">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 col-md-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s" style="border-right:1px solid #fff;"  id="our_mission">
              <div class="p-lg-5 ps-lg-0">
                <div class=" text-start">
                  <h1 class="display-5 mb-4 font-24">Our Mission</h1>
                </div>
                <p class="mb-4 pb-2 justify-content-center font-18"><?=$mvp_details[0]['content']?></p>
              </div>
            </div>
            <div class="col-lg-6 pe-lg-0 feature-text py-5 wow fadeIn" data-wow-delay="0.5s" id="our_vision">
              <div class="p-lg-5 ps-lg-0">
              <div class=" text-start">
                  <h1 class="display-5 mb-4 font-24">Our Vision</h1>
                </div>
                <p class="mb-4 pb-2 justify-content-center font-18"><?=$mvp_details[1]['content']?></p>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Team Start -->
<div class="container-xxl py-5" id="team_experts">
  <div class="container">
    <div class=" text-center">
      <h1 class="display-5 mb-5 font-24">Team Experts</h1>
    </div>
    <div class="row g-4">
      <?php foreach($team_details as $row => $value){ ?>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item">
          <div class="overflow-hidden position-relative">
            <img class="img-fluid" src="zpress/<?=$value['profile_picture']?>" alt="" />
            <div class="team-social">
              <a class="btn btn-square" href="<?=$value['fb_link']?>"><i class="fab fa-facebook-f"></i ></a>
              <a class="btn btn-square" href="<?=$value['twitter_link']?>"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-square" href="<?=$value['insta_link']?>"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="text-center border border-5 border-light border-top-0 p-4">
            <h5 class="mb-0 font-20"><?=$value['name']?></h5>
            <small class="font-18"><?=$value['designation']?></small>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Team End -->

<?php 
include_once('./components/testinomials.php'); 
include_once('./components/footer.php'); 
?>