
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Associations & Memberships</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Associations & Memberships</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Associations & Memberships</h3>
            <?php foreach($all_asso_membership as $membership){?>
            <div class="membership">
                <a target="blank" href="<?php echo $membership->associations_url?>"><h4><i class="fa fa-share-square"></i><?php echo $membership->associations_name?></h4></a>
            </div>
        <?php }?>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

