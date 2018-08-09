
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Published Books</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Published Books</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i>Published Books</h3>
            <a class="btn btn-back-to-page" href="<?php echo base_url("page/publications_ceo")?>">Go Back to Publications of CEO</a>

            <div class="books-area-txt">
            	<img src="<?php echo base_url().$books_details->books_image?>">
                <h5><?php echo $books_details->books_title?></h5>
                <p><strong><?php echo $books_details->books_desc?> </strong><br><br> <br><br>

<!--<strong>Abul Barkat, Ph.D.</strong><br>
Professor <br>
Economics Department,<br>
University of Dhaka. <br>-->
</p>
            </div>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

