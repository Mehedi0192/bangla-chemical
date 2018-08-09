<?php ob_start(); ?>
        <section class="inn-text-area">
            <div class="books-area-txt">
                            <h5><?php echo $article->column_article_title?></h5>
                <p><strong><?php echo $article->column_article_date?> </strong><br><br>
<?php echo $article->column_article_desc?> <br><br>
</p>
            </div>
        </section>
