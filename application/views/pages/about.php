
<!-- Section -->
<div id="about" class="section video">
    <div class="container">
        <div class="content center">
            <div class="breadcrumb t-white mt-100">
                <a href="index.html" class="t-gold">Home</a> / About
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

<!-- Section -->
<div class="section white">
    <div class="container" id="posts">
        <div class="content center paragraph">

            <h5 class="t-black">Worldclass Transfers</h5>
            <span class="line gold"></span>
            <h2 class="t-black">Discovering the spectaculars of<span class="t-gold"> Kenyan Coast</span></h2><br>
            <h3>Region</h3>
            <h6 class="">We are passionate about travel and sharing the Kenyan coast wonders on the leisure travel side, and providing corporate travelers hi-touch services to facilitate their business tours & travel needs. </h6>

            <h2 class="left mt-40 text-info center" >Our Services</h2>
            <p class="justify">At <b class="t-gold">Worldclass Transfers</b> We provide professional customer oriented transfers ensuring a hassle free travel. Email capabilities and phone contacts for convenience and prompt booking and information. Creative but persistent approach to search for the most appropriate transfer arrangements and identifying the best possible value. Our travel consultants are friendly, professional, and experienced in accommodating both the seasoned traveler and those new to the world of travel.
                we do not only offer competitive prices to our customer, but we are also able to pass on very competitive prices and a maximum opportunity for choices and flexibility.</p>

        </div>
    </div>
</div><!-- Section Ends -->
<!-- Section -->
<div id="contact" class="section white center">
    <div class="container">
        <span class="line gold"></span>
        <h2 class="mt-20">Talk <span class="t-gold">us</span></h2>

        <br>
        <div class="row">

            <div class="col col-4">
                <span class="text-info">+254711777626</span>
            </div>

            <div class="col col-4">
                <span class="text-info">+254750777626</span>
            </div>
            <div class="col col-4">
                <span class="text-info">worldclasstransfers@gmail.com</span>
            </div>

        </div>

        <br><br>
        <h6 class="center">Fill the form below and let us know how can be of help to you.</h6>
        <div id="fields">
            <!-- CONTACT Form-->
            <form id="" method="post" action="<?= base_url()?>contact/send_message">
                <div class="container center">
                    <div class="row">
                        <div class="input-item half form-group offset-3 col col-4 ">
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
                    <div class="input-item form-group  offset-3 col col-8">
                        <textarea id="form_message" name="message" rows="4" class="form-control light-grey" placeholder="Your Message*" required="required" data-error="Message is required."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit"  id="submit" class="primary-btn m-20 large info t-white" value="Send">send</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- Section Ends -->

<!-- Section -->
<div class="section back five">
    <div class="container center">
        <h5 class="t-white">stay connected</h5>
        <span class="line gold"></span>

        <div class="social-container m-20 center">
            <a href="#" class="primary-btn "><img src="<?= base_url()?>resources/assets/img/tours/twits.png" style="width: 40px;height: 40px; border-radius: 50%"></a>
            <a href="#" class="primary-btn "><img src="<?= base_url()?>resources/assets/img/tours/facebook.png" style="width: 40px;height: 40px; border-radius: 50%"></a>
            <a href="#" class="primary-btn "><img src="<?= base_url()?>resources/assets/img/tours/instagram1.png" style="width: 40px;height: 40px; border-radius: 50%"></a>
        </div>
    </div>
</div><!-- Section Ends -->
