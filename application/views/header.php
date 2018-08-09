<section class="header-all">
    <div class="header-area">
        <nav class="head" data-spy="affix" data-offset-top="197"> 
            <ul class="nav navbar-nav">  
                <li><a class="btn btn-serial" href="<?php echo base_url()?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a class="btn btn-serial" href="#"><i class="fa fa-phone" aria-hidden="true"></i><strong>Hotline:</strong> +880-1972-262436</a></li>
                <li><a class="btn btn-serial" target="blank" href="https://www.google.com.bd/maps/place/Bangla+Chemical/@23.7419128,90.406973,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b88b0a784cef:0x1a31f3de9c4eb768!8m2!3d23.7419079!4d90.4091617?hl=en"><i class="fa fa-map-marker" aria-hidden="true"></i> Location Map</a>
            </ul>
            <div class="search-container">
                <form action="<?php echo base_url()?>ajaxsearch" method="post" accept-charset="utf-8">
                <input type="text" placeholder="Search Chemical Here…" name="search_text" id="search_text">
                <button  type="submit" ><i class="fa fa-search"></i></button>
            </form>
            </div>
            <div id="result"></div>
        </nav>
    </div>
</section>

<script>
    $(document).ready(function(){
        load_data();
        function load_data(query)
        { 
            $.ajax({   
            url: "<?php echo base_url()?>ajaxsearch/fetch",
            method: "POST",
            data: {query:query},
            success: function (data){
                $(#result).html(data);
            }
        })

    }

    $(#search_text).keyup(function(){
            var search= $(this).value();
            if(search !='')
            {
                load_data(search);
            }
            else {
                load_data();
            }
                    });

    });
</script>