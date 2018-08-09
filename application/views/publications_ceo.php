
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>Publications of CEO</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Publications of CEO</h3>
        </section>
        <section class="inn-text-area">
            <h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Our CEO <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Publications of CEO</h3>
          	<div class="left-news">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#educational">Columns & Articles</a><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                    <li><a data-toggle="tab" href="#cultural">Published Books</a><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                </ul>
                <div class="tab-content">
                    <div id="educational" class="tab-pane fade in active" style="height:400px !important;">
                        <div class="news-inner">
                            <?php foreach($all_column_article as $column_article){?>
                            <div class="news-inner-1">
                                <h1><?php echo $column_article->column_article_title?></h1>
                                <div class="time-line">
                                    <h4><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $column_article->column_article_date?></h4>
                                </div>
                                <h5><?php echo $column_article->column_article_source?></h5>
                                <p><?php echo $column_article->column_article_desc?></p>
                                <a class="btn btn-media" href="<?php echo base_url("details-column-article/$column_article->column_article_id")?>" target="_blank">Read More</a>
                    			<a class="btn btn-media" href="<?php echo base_url("pdfexample/index/$column_article->column_article_id")?>">Download</a>
                                <a class="btn btn-media" href="<?php echo $column_article->column_article_media_link?>" target="_blank">Published Media Link</a>
                            </div>
                        <?php }?>

                            <div class="blog-inner-1">
                                <div class="col-md-5">
                                    <div class="number-page">

                                        <?php echo $this->pagination->create_links(); ?>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                    <div id="cultural" class="tab-pane fade in" style="height:315px !important;">

                    	<div class="book-box">
                            <h4>Click on each book to view its Contents …</h4>
                            <?php foreach($all_books as $books){?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            	<a href="<?php echo base_url("books-details/$books->books_id")?>">
                                    <div class="key-box book-in">
                                        <img src="<?php echo base_url().$books->books_image?>">
                                        <div class="key-text">
                                            <h4><?php echo $books->books_title?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

