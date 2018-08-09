
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Works & Affiliations</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Works & Affiliations</h3>
        </section>
        <section class="inn-text-area">
            <h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Our CEO <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Works & Affiliations</h3>
            <div class="membership">
                <?php foreach($all_works_affiliation as $works_affiliation){?>
                <a target="_blank" href="<?php echo $works_affiliation->works_affiliation_url?>"><h4><i class="fa fa-share-square"></i><?php echo $works_affiliation->works_affiliation_title?></h4></a>
            <?php }?>
                <p class="work-for-apple"></p>
            </div>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

