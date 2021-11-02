
<!-- Section -->
<div id="about" class="section video">
    <div class="container">
        <div class="content center">
            <div class="breadcrumb t-white mt-100">
                <a href="index.html" class="t-gold">Home</a> / Contact us
            </div>
        </div>
    </div>
    <!-- Video Background -->
    <div class="video-back">
        <div class="color-overlay op-7"></div>
        <video autoplay loop muted>
            <source src="<?= base_url()?>resources/assets/video/wave.mp4" type="video/mp4">
        </video>
    </div>
</div><!-- Section Ends -->
<div id="contact" class="section white center">
    <div class="container">
        <h5 class="t-black">CONTACT US</h5>
        <span class="line gold"></span>
        <h2 class="mt-20">talk to <span class="t-gold">us</span></h2>
        <h6 class="center">Fill the form below and let us know how can we help you.</h6>
        <div id="fields">
            <br>
            <br>
            <?php foreach ( $feedback as $msg ):?>

                <i class=" alert alert-primary"><?= $msg?></i>
            <?php endforeach;?>

            <!-- CONTACT Form-->
            <form id="" method="post" action="<?= base_url()?>contact/send_message">
                <div class="container center">
                    <div class="row">
                    <div class="input-item half form-group offset-3 col col-4">
                        <input id="form_email" type="email" name="email" class="form-control half light-grey" placeholder="Email address*" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="input-item half form-group col col-4">
                        <input id="" type="text" name="phone" class="form-control half light-grey" placeholder="phone" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="input-item half form-group offset-3 col col-4">
                        <input id="form_name" type="text" name="sender_name" class="form-control half light-grey" placeholder="Your Name*" required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="input-item form-group  offset-3 col col-6">
                        <textarea id="form_message" name="message" rows="4" class="form-control light-grey" placeholder="Your Message*" required="required" data-error="Message is required."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit"  id="submit" class="primary-btn m-20 large info t-white" value="Send">send</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Section -->
<div class="section back five">
    <div class="container center">
        <h5 class="t-white">stay connected</h5>
        <span class="line gold"></span>

        <div class="social-container m-20 center">
            <a href="#" class="primary-btn white icon t-gold"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="primary-btn white icon t-gold"><i class="fab fa-instagram"></i></a>
            <a href="#" class="primary-btn white icon t-gold"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div><!-- Section Ends -->