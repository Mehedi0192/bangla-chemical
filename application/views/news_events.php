
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="<?php echo base_url()?>asset/images/banner/banner-1.png">
            <h2>News & Events</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>News & Events</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> News & Events</h3>
            <div class="left-news news-humble">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#educational">News</a><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                    <li><a data-toggle="tab" href="#cultural">Events</a><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                </ul>
                <div class="tab-content">
                    <div id="educational" class="tab-pane fade in active" style="height:412px !important;">
                        <?php foreach($all_news as $news){?>
                    <div class="news-content">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="news-area-content news-first-content">
                                        <div class="image-box-area">
                                            <img src="<?php echo base_url().$news->news_events_image?>">
                                        </div>
                                    <h3><?php echo $news->news_events_title?></h3>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <h4><?php echo $news->news_events_desc?>
                                </h4>
                            </div>
                        </div>
                    <?php }?>
                        
                        <div class="blog-inner-1 news-number">
                            <div class="col-md-5">
                                <div class="number-page">
                                    <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                <div id="cultural" class="tab-pane fade" style="height:412px !important;">
                    <?php foreach($all_events as $events){?>
                        <div class="news-content">
                            <h4><?php echo $news->news_events_desc?></h4>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="news-area-content">
                                        <div class="image-box-area">
                                            <img src="<?php echo base_url().$news->news_events_image?>">
                                        </div>
                                   
                                    <h3><?php echo $news->news_events_title?></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="news-area-content">
                                	
                                        <div class="image-box-area">
                                            <img src="<?php echo base_url().$news->news_events_image_two?>">
                                        </div>
                                    
                                    <h3><?php echo $news->news_events_title?></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="news-area-content">
                                	
                                        <div class="image-box-area">
                                            <img src="<?php echo base_url().$news->news_events_image_three?>">
                                        </div>
                                   
                                    <h3><?php echo $news->news_events_title?></h3>
                                </div>
                            </div>
                        </div>
                     <?php }?>
                        <div class="blog-inner-1 news-number">
                            <div class="col-md-5">
                                <div class="number-page">
                                 <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                          
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

