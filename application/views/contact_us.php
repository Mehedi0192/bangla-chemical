
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-4.png">
            <h2>Contact Us</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Contact Us</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Contact Us</h3>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2><i class="fa fa-hand-o-right" area-hidden="true"></i>Office Address & Contact Details</h2>
                <div class="col-md-6 col-sm-6 col-xs-12" style="border-right:2px solid #c9c9c9">
                    <p style="padding:0 40px;"><strong>Bangla Chemical</strong><br><strong>Address:</strong>15, New Baily Road, 	
                    Building No. 4 (1st Floor),<br>
                    (5/2, Siddeswari Circular Road),<br>
                    Dhaka - 1000, <br>
                    Bangladesh.
                    <br>
                    <strong>Tel No:</strong> + (880-2) 9346780-1<br>
                    <strong>Fax No:</strong> + (880-2) 9341044<br>
                    <strong>Hotline:</strong> + 880-1972-262436<br>
                    <strong>Website:</strong> www.banglachemical.com
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p style="padding:0 40px;">
                    <strong>Contact by Email:</strong><br>
                    Email: office@banglachemical.com<br>
                    Email: shah@banglachemical.com<br>
                    Email: morshed@banglachemical.com<br>
                    Email: general@banglachemical.com<br>
                    Email: info@banglachemical.com<br>
                    Email: banglachemical2013@yahoo.com
                    </p>
                </div>
            </div>
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<h2><i class="fa fa-hand-o-right" area-hidden="true"></i>Office Direction</h2>
                <div class="gal_details_box">
                    <a class="thumbnail fancybox" rel="ligthbox" href="images/interface/map.png">
                        <img class="img-responsive" alt="" src="<?php echo base_url()?>asset/images/interface/map.png">
                    </a>
                </div>
                <a class="view-map-button-c" target="blank" href="https://www.google.com.bd/maps/place/Bangla+Chemical/@23.7419128,90.406973,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b88b0a784cef:0x1a31f3de9c4eb768!8m2!3d23.7419079!4d90.4091617?hl=en">View Map</a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2><i class="fa fa-hand-o-right" area-hidden="true"></i>Submit Your Query </h2>
                <div class="form-box-line">
                    <h5>Submit your Query to us using below ‘Form’</h5>
                    <h6>* Required!</h6>
                    <div class="own-form"> 

                    <form action="contact_us_info" method="post"> 
                        <div class="form-group">
                            <label for="name">Name of the Sender <span>*</span></label>
                            <input class="form-control" id="name" name="name" placeholder="Name of the Sender">
                        </div>
                        <div class="form-group">
                            <label for="name">Company Name <span>*</span></label>
                            <input class="form-control" id="name" name="company_name" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label for="age">Job Title </label>
                            <input class="form-control" id="name" name="job_title" placeholder="Title/Designation">
                        </div>
                        <div class="form-group">
                            <label for="age">Company Address <span>*</span></label>
                            <input class="form-control" id="name" name="company_address" placeholder="Company Address">
                        </div>
                        <div class="form-group">
                            <label for="age">Zip Code <span>*</span></label>
                            <input class="form-control" id="name" name="zip_code" placeholder="Zip Code">
                        </div>
                        <div class="form-group">
                            <label for="age">Country <span>*</span></label>
                            <input class="form-control" id="name" name="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <label for="age">Tel No <span>*</span></label>
                            <input class="form-control" id="name" name="tel_no" placeholder="Tel No">
                        </div>
                        <div class="form-group">
                            <label for="age">Email Address <span>*</span></label>
                            <input class="form-control" id="name" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="age">Website</label>
                            <input class="form-control" id="name" name="website" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <label for="age">Message <span>*</span></label>
                            <textarea class="form-control" name="message" id="exampleTextarea" placeholder="Message" rows="3"></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success">
                        <input type="reset" name="reset" class="btn btn-danger">
                    </form>

                    </div>
                </div>
            </div>
        </section>
        <?php echo $footer;?>
    </div>
</div>


<!--------------javascript---------------->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/base.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

</script>
</body>
</html>

