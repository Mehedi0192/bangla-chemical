
<div class="body-area-all">
	<div class="full-data-body">
		<?php echo $header;?>
        <section class="inn-banner">
            <img src="images/banner/banner-1.png">
            <h2>Key Personnel</h2>
        </section>
        <section class="direction" data-spy="affix" data-offset-top="197">
        	<h3>Key Personnel</h3>
        </section>
        <section class="inn-text-area">
        	<h3>Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i> About Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Key Personnel</h3>
           <?php $ceo=$this->admin_model->select_key_personnel_ceo();?>
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="top-key">
                    <div class="key-box">
                        <img src="<?php echo base_url().$ceo->key_personnel_image;?>">
                        <div class="key-text">
                            <h4>
                                <strong><?php echo $ceo->key_personnel_name;?></strong><br>
                                CEO<br>
                                <strong>E-mail:</strong> <?php echo $ceo->key_personnel_email;?><br>
                                <strong>Mobile:</strong> <?php echo $ceo->key_personnel_contact_one;?><br>
                                <strong>Mobile:</strong> <?php echo $ceo->key_personnel_contact_two;?><br>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
      <?php $exe_dir=$this->admin_model->select_key_personnel_executive_director();?>
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="second-key">
                    <div style="padding:0;" class="col-md-6 col-sm-6 col-xs-12">
                        <div class="key-box">
                            <img src="<?php echo base_url().$exe_dir->key_personnel_image?>">
                            <div class="key-text">
                                <h4>
                                    <strong><?php echo $exe_dir->key_personnel_name?></strong><br>
                                	Executive Director<br>
                                    <strong>E-mail:</strong> <?php echo $exe_dir->key_personnel_email?><br>
                                    <strong>Mobile:</strong> <?php echo $exe_dir->key_personnel_contact_one?><br>
                                    <strong>Mobile:</strong> <?php echo $exe_dir->key_personnel_contact_two?><br>
                                </h4>
                            </div>
                        </div>
                    </div>
        <?php $gen_man=$this->admin_model->select_key_personnel_general_manager();?>
                    <div style="padding:0;" class="col-md-6 col-sm-6 col-xs-12">
                        <div class="key-box">
                            <img src="<?php echo base_url().$gen_man->key_personnel_image?>">
                            <div class="key-text">
                                <h4>
                                    <strong><?php echo $gen_man->key_personnel_name?></strong><br>
                                	<?php echo $gen_man->key_personnel_designation?><br>
                                    <strong>E-mail:</strong> <?php echo $gen_man->key_personnel_email?><br>
                                    <strong>Mobile:</strong> +<?php echo $gen_man->key_personnel_contact_one?><br>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="third-key">
        <?php $mang_asst_mang=$this->admin_model->select_key_personnel_manager();?>
                    <div style="padding:0;" class="col-md-4 col-sm-4 col-xs-12">
                        <div class="key-box">
                            <img src="<?php echo base_url().$mang_asst_mang->key_personnel_image?>">
                            <div class="key-text">
                                <h4>
                                    <strong><?php echo $mang_asst_mang->key_personnel_name?></strong><br>
                                	<?php echo $mang_asst_mang->key_personnel_designation?><br>
                                    <strong>E-mail:</strong><?php echo $mang_asst_mang->key_personnel_email?><br>
                                    <strong>Mobile:</strong> <?php echo $mang_asst_mang->key_personnel_contact_one?><br>
                                </h4>
                            </div>
                        </div>
                    </div>

             <?php foreach ($asst_mang as $v_asst_mang) {?>
                <div style="padding:0;" class="col-md-4 col-sm-4 col-xs-12">
                        <div class="key-box">
                            <img src="<?php echo base_url().$v_asst_mang->key_personnel_image?>">
                            <div class="key-text">
                                <h4>
                                    <strong><?php echo $v_asst_mang->key_personnel_name?></strong><br>
                                    <?php echo $v_asst_mang->key_personnel_designation?><br>
                                    <strong>E-mail:</strong><?php echo $v_asst_mang->key_personnel_email?><br>
                                    <strong>Mobile:</strong> <?php echo $v_asst_mang->key_personnel_contact_one?><br>
                                </h4>
                            </div>
                        </div>
                    </div>

             <?php }?>

                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="row">
                    <?php foreach($all_executive as $executive) {?>
                    <div style="padding:0;" class="col-md-3 col-sm-3 col-xs-12">
                        <div class="key-box">
                            <img src="<?php echo base_url().$executive->key_personnel_image?>">
                            <div class="key-text">
                                <h4>
                                    <strong><?php echo $executive->key_personnel_name?></strong><br>
                                	<?php echo $executive->key_personnel_designation?><br>
                                    <strong>E-mail:</strong> <?php echo $executive->key_personnel_email?><br>
                                    <strong>Mobile:</strong><?php echo $executive->key_personnel_contact_one?><br>
                                </h4>
                            </div>
                        </div>
                    </div>
                 <?php }?>
                </div>
            </div>
            
        </section>
        <?php echo $footer;?>
    </div>
</div>

</body>
</html>

