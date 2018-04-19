<?php
require_once('functions/function.php');
get_header();
get_bread();
?>
    <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                            <?php
                            $show = "SELECT * FROM  website_detail NATURAL JOIN user_role ORDER BY website_id DESC";
                            $query = mysqli_query($conn,$show);
                            $data=mysqli_fetch_assoc($query);
                            ?>
                    <!-- Contact List -->
                   <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="http://keenthemes.com/"><?= $data['Address']; ?></a> <span class="text-uppercase margin-l-20">Operation</span></h3>
                            <p><?= $data['add_detail']; ?></p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?= $data['Phone']; ?></li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> <?= $data['Email']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $show = "SELECT * FROM  cit_social_media ORDER BY id";
                    $query = mysqli_query($conn,$show);
                    $data= mysqli_fetch_assoc($query);
                    ?>

                   <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="<?= $data['sm_fb']; ?>">Address</a> <span class="text-uppercase margin-l-20">Operation</span></h3>
                            <p><?= $data['sm_tw']; ?></p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?= $data['sm_yt']; ?></li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> <?= $data['sm_li']; ?></li>
                            </ul>
                        </div>
                    </div>


                    <!--<div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><a href="http://keenthemes.com/"><?= $data['Address']; ?></a> <span class="text-uppercase margin-l-20">Operation</span></h3>
                            <p><?= $data['add_detail']; ?></p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> <?= $data['Phone']; ?></li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> <?= $data['Email']; ?></li>
                            </ul>
                        </div>
                    </div>-->

                </div>
        </div>
    </div>
<!-- Google Map -->
<div id="map" class="map height-400"></div>

<!-- Promo Section -->
<div class="promo-section"  style="margin-bottom: 100px; margin-top: 70px;" > 
    <div class="container">
        <div class="row" >
            <div class="col-md-6">
                <h2>Our Clients</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
            </div>
            <div class="col-md-6">
                <h2 class="color-black">Send Us A Note</h2>
<?php
  if(!empty($_POST)){
  $name = htmlentities($_POST['name'], ENT_QUOTES);
  $phone = htmlentities($_POST['phone'], ENT_QUOTES);
  $email = htmlentities($_POST['email'], ENT_QUOTES);
  $message =htmlentities($_POST['mess'], ENT_QUOTES);

  $query = "INSERT INTO  cit_contact (contact_name, contact_email, contact_phone, contact_msg) VALUES ('$name','$phone','$email','$message')";

  if(!empty($name)){
    if(!empty($message)){
      if(mysqli_query($conn,$query)){
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed".mysqli_error($conn); }
    }else{echo "Enter your message!".mysqli_error($conn); }
  }else{echo "Enter Your Name".mysqli_error($conn);}


}

?>
                <form method="post">
                <input type="text" name="name" class="form-control footer-input margin-b-20" placeholder="Name" required  style="border:1px solid black;">
                <input type="email" name="email" class="form-control footer-input margin-b-20" placeholder="Email" required  style="border:1px solid black;">
                <input type="text" name="phone" class="form-control footer-input margin-b-20" placeholder="Phone" required  style="border:1px solid black;">
                <textarea name="mess" class="form-control footer-input margin-b-30" rows="5" placeholder="Message" required style="resize: none; border:1px solid black;"></textarea>
                <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>        