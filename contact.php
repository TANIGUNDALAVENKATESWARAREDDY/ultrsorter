<?php include_once('./components/header.php'); ?>

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 mt-3" style="margin: 6rem 0;">
  <div class="container contact px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 ps-lg-0">
          <div class=" text-start">
            <h1 class="display-5 mb-4 font-24">Send Enquiry</h1>
          </div>
          <p class="mb-4 font-18">
          <h4 class="font-18"> COMAS INDIA LTD</h4>
          305-60, Habinnam-ro, Habin-myeon, Dalseong-gun,<br> Daegu, Republic of Korea
          <h4 class="font-18">E-mail</h4>sun.sortex@gmail.com <br> comasindia@i-comas.com<br>salesnorthindia@i-comas.com<br>salescentralindia@i-comas.com <br>
          <h5 class="font-18">Mobile </h5>+91 9440031617/8332999919</p>
          <?php          
            if (@$_POST['contact_form_submit']) {
                $name = @$_POST['name'];
                $email = @$_POST['email'];
                $company = @$_POST['company'];
                $description = @$_POST['description'];
                $created_at = date('Y-m-d H:i:s');
                if (!empty($name and $email and $company and $description)) {                    
                    $career_data = array(
                        'name' => $name,
                        'email' => $email,
                        'company' => $company,
                        'description' => $description,
                        'created_at' => $created_at,
                    );
                    $career_details = executeInsert("contact", $career_data);
                    if ($career_details) {
                        echo "<script>
                        $(document).ready(function() {
                            swal('', 'Query Added Succesfully!!', 'success');
                        });</script>";
                       echo "<meta http-equiv=\"refresh\" content=\"3; url=./contact.php\">";
                    }
                } else {
                    echo "<script>
                        $(document).ready(function() {
                            swal('', 'Empty Record Cannot be Inserted!', 'warning');
                        });</script>";
                    echo "<meta http-equiv=\"refresh\" content=\"3; url=./contact.php\">";
                }
            }
            ?>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" id="contact_form" method="POST">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" name="company" class="form-control" id="subject" placeholder="Subject">
                  <label for="subject">Company</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="description" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                  <label for="message">Description</label>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" name="contact_form_submit" value="Send Enquiry" class="btn btn-primary w-100 py-3 font-16">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
        <div class="position-relative h-100">
          <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30710983.209769644!2d64.45235976587381!3d20.01273993518969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1664775880134!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->


<!-- Specification Start -->
<div class="container-fluid bg-light overflow-hidden mt-4 mb-5 px-lg-0">
  <div class="container about px-lg-0">
    <div class="row g-0 mx-lg-0">
        <!-- <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
            <div class="position-relative h-100">
                <img class="position-absolute img-fluid w-100 h-100" src="img/features_grain.jpeg" style="object-fit: cover;" alt="">
            </div>
        </div> -->
        <div class="col-lg-12 col-sm-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
          <div class="p-lg-5 pe-lg-0">
            <div class=" text-start">
              <h1 class="display-5 mb-4 font-20">Contact Us</h1>
            </div>
            <div class="row g-4">
              <div class="col-lg-6 mbr-col-md-6">
                <div class="wrap">
                  <div class="d-flex">
                    <p class="mb-4 pb-2 font-16">
                      <strong>COMAS Co., LTD</strong><br>
                      305-60, Habinnam-ro, Habin-myeon,<br>
                      Dalseong-gun, Daegu, R.O.Korea<br>
                      <strong>E-mail: </strong>ceo@i-comas.com<br>
                      <strong>Tel: </strong>0082-53-592-8257<br><br>

                      <strong>COMAS INDIA LTD</strong><br>
                      <strong>Sruthi Technologies (Lucky Enterprises)</strong><br>
                      Plot No. 68, H.No. 2-23-S-68, Aditya Nagar, Kukatpally,<br>
                      Hyderabad - 500 072.<br>
                      <strong>E-mail: </strong>sun.sortex@gmail.com <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comasindia@i-comas.com<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salesnorthindia@i-comas.com<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;salescentralindia@i-comas.com <br>
                      <strong>Mobile: </strong>+91 9440031617/8332999919<br><br>

                      <strong><u>Exclusive Distributors for India.</u></strong><br><br>
                      <strong>SRINIVAS MILL STORES</strong><br>
                      15/232-2, Opp. Indoor Stadium,<br>
                      GUDIVADA, Krishna Dist., A.P.-521 301<br>
                      <strong>E-mail: </strong> srinivas_millstores@rediffmail.com<br>
                      <strong>Tel: </strong>08674-245164<br>
                      <strong>Mobile: </strong>9440031615<br>
                      <strong>SOUTH INDIA</strong><br>
                      <strong>Andhra Pradesh :</strong> 9440031615<br>
                      <strong>Karnataka :</strong> 9440031617<br><br>

                      <strong>NAWAZ RICE ENGINEERING</strong><br>
                      Nizam Park, G.T. Road Muridke,<br>
                      Distt. Sheikhupura, Punjab Pakistan<br>
                      <strong>E-mail: </strong> nawaznre@gmail.com<br><br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mbr-col-md-6">
                <div class="wrap">
                  <div class="d-flex">
                    <p class="mb-4 pb-2 font-16"> 
                      <strong>TEPPACK COLOMBIA LTDA.</strong><br>
                      NIT 830.093.822-7, KM. 2.5, Autopista<br>
                      Medellín Parque Industrial Portos<br>
                      Sabana 80. Bodega # 78, Bogota, Colombia<br>
                      <strong>E-mail: </strong> jespinosa@teppack.com<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- Specification End -->

<?php include_once('./components/footer.php'); ?>