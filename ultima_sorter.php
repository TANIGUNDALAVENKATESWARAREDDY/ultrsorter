<?php include_once('./components/header.php');
$feature_details = executeSelect('features',array(),array('content_type' => 'ultima_sorter'));
$product_table = executeSelect('product_table',array(),array('product_name' => 'ultima_sorter'));                           

?>
<!-- Page Header Start -->
<div class='container-fluid gain-sorter py-1 mb-5 mt-3 bg-light'>
    <div class='container py-1'>
        <h1 class='display-3 text-white mb-2 animated slideInDown tech font-24 text-upper'>Ultima Sorter</h1>
        <nav aria-label='breadcrumb animated slideInDown'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a class='text-black breadcrumb_link' href='index.php'>Home</a></li>
                <li class='breadcrumb-item text-black' aria-current='page'>Multigrain</li>
                <li class='breadcrumb-item text-black active' aria-current='page'>Ultima Sorter</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Feature Start -->
<div class='container-fluid bg-light overflow-hidden px-lg-0 my-5' style='margin: 6rem 0;'>
    <div class='container feature px-lg-0'>
        <div class='row g-0 mx-lg-0'>
            <div class='col-lg-6 feature-text py-5 wow fadeIn' data-wow-delay='0.5s'>
                <div class='p-lg-5 ps-lg-0'>
                    <div class='section-title text-start'>
                        <a class='display-5 mb-1 text-black font-20'  style='position: initial;'>Description</a>
                    </div>
                    <p class='mb-1 pb-2 justify-content-center'>
                        <ul class="font-16"><li>Simultaneously detect the multi color defects.
</li><li>High resolution Tri_chromatic (RGB/Full Color) camera with near human Eye vision
</li><li>CREE, USA make long life, highly bright and luminious LED lamps provides clear vision to cameras
</li><li>SMC Japan made extremely precise shooting, long life and less air consumption ejectors
</li><li>Extremely efficient software capable of processing various material with data summing technology.
</li><li>Avaiable with <strong>64-128-192-256-320-384-448</strong> channels.
</li><li>Real Auto claibrationtechnolgy by pixel by pixel which ensures highly precise, accurate and consistent
performance throughout the life of machine.
</li><li>Automatic self diagnosis and control system to ensure trouble free operation.
</li><li>WiFi connectivity to monitor machine from remote devices like laptop, android mobile handset, tablet and pc.
</li><li>On-line video option to check condition of input, output and rejection material from remote devices</li></ul>
                    </p>                                      
                </div>
            </div>
            <div class='col-lg-6 pe-lg-0' style='min-height: 400px;'>
                <div class='position-relative h-100'>
                    <img class='position-absolute img-fluid w-100 h-100 bg-white' src='zpress/./data/aOzmnePAKx/ultima121.jpg' style='' alt=''>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- packaging Start -->
<div class='container-fluid bg-light overflow-hidden px-lg-0 my-5' style='margin: 6rem 0;'>
    <div class='container feature px-lg-0'>
        <div class='row g-0 mx-lg-0'>
            <div class='col-lg-12 feature-text py-5 wow fadeIn' data-wow-delay='0.5s'>
                <div class='p-lg-5 ps-lg-0'>
                    <div class='section-title text-start mb-4'>
                            <a class='display-5 mb-4 text-black font-20'  style='position: initial;'>Features</a>
                    </div>
                    <div class='row g-4'>
                        <?php foreach($feature_details as $row => $feature){ 
                        $feature_top_content = $feature["top_content"];
                        $feature_profile_picture = $feature["profile_picture"];
                        $feature_button_name = $feature["button_name"];
                        $feature_button_link = $feature["button_link"];
                        $detail_content = '';
                        if(strpos($feature['bottom_content'], '#') !== 0){
                            $detail_content = explode('#',$feature['bottom_content']);
                        }?>
                        <div class='col-lg-3 col-sm-1'>
                            <div class='row g-4'>
                                <div class='me-4 fea_title'>
                                    <h5 class='mb-0 font-16'><?=$feature_top_content?></h5>
                                </div>
                            </div>
                            <div class='row g-4 pt-1 mb-1'>
                                <div class='d-flex fea_title'>
                                    <div class='d-flex flex-shrink-0 align-items-center justify-content-center' style='width: 100px; height: 100px' id='<?=$feature_button_name?>'>
                                        <img class='img-fluid' src='zpress/<?=$feature_profile_picture?>' style='border: 1px solid #719FAF;object-fit: cover;' alt=''>
                                    </div>
                                </div>
                            </div>
                            <div class='row g-4'>
                                <div class='align-items-center' id='<?=$feature_button_link?>' style='display:none;'>
                                    <p class='mb-4 pb-2'>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- packaging End -->
<!-- Specification -->
<div class='container-fluid bg-light overflow-hidden mt-4 mb-5 px-lg-0'>
    <div class='container about px-lg-0'>
        <div class='row g-0 mx-lg-0'>
            <!-- <div class='col-lg-6 ps-lg-0' style='min-height: 400px;'>
                <div class='position-relative h-100'>
                    <img class='position-absolute img-fluid w-100 h-100' src='img/features_grain.jpeg' style='object-fit: cover;' alt=''>
                </div>
            </div> -->
            <div class='col-lg-12 col-sm-6 about-text py-5 wow fadeIn' data-wow-delay='0.5s'>
                <div class='p-lg-5 pe-lg-0'>
                    <div class='section-title text-start mb-4'>
                        <a class='display-5 mb-4 text-black font-20' style='position: initial;' >Specification</a>
                    </div>
                    <div class='row g-4'>
                        <div class='col-lg-12'>
                            <div class='table-responsive' id='sailorTableArea'>
                                <table id='specification' class='table table-striped table-bordered' width='100%'>
                                    <thead>
                                        <tr>
                                            <th>MODEL</th>
                                            <th>No of Chutes</th>
                                            <th>No. of cameras</th>                                                
                                            <th>Channels</th>
                                            <th>input Capacity</th>
                                            <th>Power (kw)</th>
                                            <th>Air in cfm (kw)</th>
                                            <th>Compressor (hp)</th>
                                            <th>Size</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($product_table as $row => $product_tables){ 
                                        $product_model = $product_tables["model"];
                                        $product_no_of_chutes = $product_tables["no_of_chutes"];
                                        $product_no_of_cameras = $product_tables["no_of_cameras"];
                                        $product_channels = $product_tables["channels"];
                                        $product_input_capacity = $product_tables["input_capacity"];
                                        $product_power = $product_tables["power"];
                                        $product_air_in_cfm = $product_tables["air_in_cfm"];
                                        $product_compressor = $product_tables["compressor"];
                                        $product_size = $product_tables["size"]; ?>
                                        <tr>
                                            <td><?=$product_model?></td>
                                            <td><?=$product_no_of_chutes?></td>
                                            <td><?=$product_no_of_cameras?></td>
                                            <td><?=$product_channels?></td>
                                            <td><?=$product_input_capacity?></td>
                                            <td><?=$product_power?></td>
                                            <td><?=$product_air_in_cfm?></td>
                                            <td><?=$product_compressor?></td>
                                            <td><?=$product_size?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class='mb-4 pb-2 text-red font-16'> Input Capacity depends upon various matters i.e. Type of material, Type of contamination & contamination ratio etc. Any or all specifications are subject to change without prior notice.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Specification end -->
        
<?php 
include_once('./components/testinomials.php'); 
include_once('./components/footer.php'); 
?>