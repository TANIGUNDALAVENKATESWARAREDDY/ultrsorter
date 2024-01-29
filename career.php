<?php include_once('./components/header.php'); ?>

<!-- Page Header Start -->
<div class="container-fluid gain-sorter py-1 mb-5 mt-3 bg-light">
    <div class="container py-1">
        <h1 class="display-3 text-white mb-2 animated slideInDown tech font-24 text-upper">Career</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-black breadcrumb_link" href="index.php">Home</a></li>
                <li class="breadcrumb-item text-black active" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Career Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 mt-3" style="margin: 6rem 0;">
  <div class="container contact px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-12 py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 ps-lg-0 career_form">
          <div class=" text-start">
            <h1 class="display-5 mb-1 font-20">Are You Looking For A Job?</h1>
          </div>
          <p class="mb-4">
          <h4 class="font-18"> Drop Your Details In Below Form Our Team Will Get In Touch With You</h4>
          <?php          
            if (@$_POST['career']) {
                $title = @$_POST['title'];
                $fname = @$_POST['fname'];
                $lname = @$_POST['lname'];
                $email = @$_POST['email'];
                $contact_no = @$_POST['contact_no'];
                $alt_contact_no = @$_POST['alt_contact_no'];
                $country_code = @$_POST['country_code'];
                $alt_country_code = @$_POST['alt_country_code'];
                $message = @$_POST['message'];
                $category = @$_POST['category'];
                $created_at = date('Y-m-d H:i:s');
                if (!empty($title and $fname and $lname and $email and $contact_no and $alt_contact_no and $country_code and $alt_country_code and $message and $category)) {
                    $upload_cv = strip_tags(@$_POST['upload_cv']);
                    if (empty($upload_cv)) {
                        $length = 10;
                        $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                        $folder = mkdir("zpress/data/$random");
                        $target_dir = "zpress/data/$random/";
                        $target_file = $target_dir . basename($_FILES["upload_cv"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        if (move_uploaded_file($_FILES["upload_cv"]["tmp_name"], $target_file)) {
                            $upload_cv = htmlspecialchars(basename($_FILES["upload_cv"]["name"]));
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    $career_data = array(
                        'title' => $title,
                        'fname' => $fname,
                        'lname' => $lname,
                        'email' => $email,
                        'contact_no' => $country_code.''.$contact_no,
                        'alt_contact_no' => $alt_country_code.''.$alt_contact_no,
                        'upload_cv' => $target_dir.''.$upload_cv,
                        'message' => $message,
                        'category' => $category,
                        'created_at' => $created_at,
                    );
                    $career_details = executeInsert("career", $career_data);
                    if ($career_details) {
                        echo "<script>
                        $(document).ready(function() {
                            swal('', 'Created Succesfully!!', 'success');
                        });</script>";
                       echo "<meta http-equiv=\"refresh\" content=\"3; url=./career.php\">";
                    }
                } else {
                    echo "<script>
                        $(document).ready(function() {
                            swal('', 'Empty Record Cannot be Inserted!', 'warning');
                        });</script>";
                    echo "<meta http-equiv=\"refresh\" content=\"3; url=./career.php\">";
                }
            }
            ?>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" id="career_form" method="POST" >
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form_titles">Title*</label>
                    <div class="form-floating">
                        <select name="title" id="title" class="form-control job_form">
							<option value="Choose Title" data-calc-value="Choose One">Choose Title</option>
							<option value="Mr." selected="selected" data-calc-value="Mr.">Mr.</option>
							<option value="Ms." data-calc-value="Ms.">Ms.</option>
                            <option value="Mrs." data-calc-value="Mrs.">Mrs.</option>
							<option value="Prof." data-calc-value="Prof.">Prof.</option>
                            <option value="Dr." data-calc-value="Dr.">Dr.</option>
						</select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fname" class="form_titles">First Name*</label>
                    <div class="form-floating">
                        <input type="text" class="form-control job_form" name="fname" id="fname" placeholder="Your First Name*">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form_titles">Last Name*</label>
                    <div class="form-floating">
                        <input type="text" class="form-control job_form" name="lname" id="lname" placeholder="Your Last Name*">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form_titles">Your Email Address*</label>
                    <div class="form-floating">
                        <input type="email" class="form-control job_form" name="email" id="email" placeholder="Your Email Address*">
                    </div>
                </div>
                <div class="col-md-6" id="country_code_1">
                    <label for="contact_no" class="form_titles">Contact No*</label>
                    <div class="form-floating">
                        <input id="country_selector" class="form-control job_form" type="text" required autocomplete="off">
                    	<input type="hidden" name="country_code" id="country_1" class="country_code" value="">
                        <input type="tel" class="form-control job_form" name="contact_no"  id="contact_no" placeholder="Your Contact No*">
                    </div>
                </div>
                <div class="col-md-6" id="country_code_2">
                    <label for="alt_contact_no" class="form_titles">Alternate Contact No*</label>
                    <div class="form-floating">
                        <input id="alt_country_selector" class="form-control job_form" type="text" required autocomplete="off">
                    	<input type="hidden" name="alt_country_code" id="country_2" class="alt_country_code" value="">
                        <input type="tel" class="form-control job_form" name="alt_contact_no" id="alt_contact_no" placeholder="Your Alternate Contact No*">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cv_upload" class="form_titles">Category*</label>
                    <div class="form-floating">
                        <select name="category" id="category" class="form-control job_form">
							<option value="Choose Category" data-calc-value="Choose One">Choose Category</option>
							<option value="office_admin" data-calc-value="office_admin">Office Admin</option>
							<option value="sales" data-calc-value="sales">Sales</option>
                            <option value="services" data-calc-value="services">Services</option>
							<option value="accounts" data-calc-value="accounts">Accounts</option>
                            <option value="others" data-calc-value="others" selected="selected">Others</option>
						</select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cv_upload" class="form_titles">Upload CV*</label>
                    <div class="form-floating">
                        <input name="upload_cv" type="file" class="form-control job_form" accept=".pdf,.doc"  id="upload_cv">
                    </div>
                </div>
                <div class="col-12">
                    <label for="message" class="form_titles">Message / Comments</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" rows="10" cols="50"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="career" value="Submit" class="btn btn-primary w-100 py-3 font-16">
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Career End -->
<script>
    $('#country_selector').change(function() { 
        var country_code = $('#country_code_1 > div > div > div > div').attr('title');       
        $('#country_1').val(country_code);
    });
    $('#alt_country_selector').change(function() { 
        var alt_country_code = $('#country_code_2 > div > div > div > div').attr('title');       
        $('#country_2').val(alt_country_code);
    });    
</script>

<?php include_once('./components/footer.php'); ?>