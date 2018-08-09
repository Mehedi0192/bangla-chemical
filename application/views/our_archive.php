
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-2.png">
            <h2>Archive</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Archive</h3>
        </section>
        <section class="inn-text-area">
            <h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Archive</h3>
             <?php $all_archive=$this->archive_model->select_all_archive();
                foreach ($all_archive as $archive) {?>
            <div class="archive-area">
                <h3><?php $archive->archive_name?></h3>
                <a class="btn btn-archive" href="<?php echo base_url().$archive->archive_pdf?>" target="_blank">View PDF</a>
                     <a class="btn btn-archive" href="<?php echo base_url().$archive->archive_pdf;?>" download="" target="_blank">Download</a>
            </div>
        <?php } ?>
        </section>
        <?php echo $footer;?>
    </div>
</div>
</body>
</html>

