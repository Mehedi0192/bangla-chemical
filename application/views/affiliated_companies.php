
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Affiliated Companies</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Affiliated Companies</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Affiliated Companies</h3>
            <?php foreach ($all_affiliated_companies as $affiliated_companies) {?>
          
            <div class="affiliated-area">
            	<img src="<?php echo base_url().$affiliated_companies->affiliated_companies_logo?>">
                <div class="aff-right">
                    <h2><?php echo $affiliated_companies->affiliated_companies_name?></h2>
                    <p><?php echo $affiliated_companies->affiliated_companies_short_desc?></p>
                    <a class="btn btn-aff" href="<?php echo $affiliated_companies->affiliated_companies_url?>" target="_blank">Company Website</a>
                    <a class="btn btn-aff" target="blank" href="<?php echo base_url().$affiliated_companies->affiliated_companies_pdf?>">View PDF</a>
                </div>
            </div>
              <?php }?>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

