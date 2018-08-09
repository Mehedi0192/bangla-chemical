
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Column & Article</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Column & Article</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i>Column & Article</h3>
            <div class="books-area-txt">
                            <h5><?php echo $column_article_detail->column_article_title?></h5>
                <p><strong><?php echo $column_article_detail->column_article_date?> </strong><br><br>
<?php echo $column_article_detail->column_article_desc?> <br><br>
</p>
            </div>
        </section>
        <?php echo $footer;?>
    </div>
</div>
</body>
</html>

