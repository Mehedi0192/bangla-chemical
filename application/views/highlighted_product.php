
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="direction word-marg" data-spy="affix" data-offset-top="197">
        	<h3>All Highlighted Products</h3>
        </section>
        <section class="inn-text-area fixed-fotter">
            <h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i>All Highlighted Products</h3>
            <div class="highlighted-pro">
                <?php foreach($all_highlighted_product as $hproduct){?>
                <h1><?php echo $hproduct->hproduct_name?></h1>
                <p><?php echo $hproduct->hproduct_desc?></p>
            </div>
        <?php }?>
        </section>
        <?php echo $footer;?>
    </div>
</div>


<!--------------javascript---------------->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/base.js"></script>
<script src="js/main.js"></script>
</body>
</html>

