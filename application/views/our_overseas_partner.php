
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Our Overseas Partners</h2>
        </section>

        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Our Overseas Partners</h3>
        </section>

        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Our Overseas Partners</h3>
            <?php foreach($all_partner as $partner){?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a target="blank" href="<?php echo base_url().$partner->partner_image?>" download="">
                    <div class="key-box partner">
                        <img src="<?php echo base_url().$partner->partner_image?>" >
                        <div class="key-text">
                            <h6>
                                <strong><?php echo $partner->partner_name?></strong>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

