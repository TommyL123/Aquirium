<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo asset("public/lib/bootstrap/css/bootstrap.css"); ?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo asset("public/css/style.css"); ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900" rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo asset("public/js/jquery-1.11.3.min.js"); ?>"></script>
<script src="<?php echo asset("public/js/responsiveslides.min.js"); ?>"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<!-- <script type="text/javascript" src="js/hover_pack.js"></script> -->
</head>


<?php
$category = isset($category) ? $category : "";
$filter = isset($filter) ? $filter : "";
$item = isset($item) ? $item : "";
$search_txt = isset($search_txt) ? $search_txt : "";
$category_id = isset($category_id) ? $category_id : "";
?>
<body>
<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay">
	  Search
		<select id="category_id">
			<option value="0"></option>
        <?php
        foreach ($category as $e) {
        ?>
			<option value="<?php echo $e->id; ?>" <?php if ($e->id == $category_id) { echo "selected"; } ?>>
            <?php echo $e->title; ?>
			</option>
        <?php
        }
        ?>
	   </select>
	  </div>  
	    
	    
	  <div class="stay_right">
		  <input type="text" value="<?php echo $search_txt; ?>" id="search_txt">  <!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" -->
		  <input type="submit" value="" onclick="search()">
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="main">
  <div class="content_top">
  	<div class="container">
	   <div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
			<div class="menu_box">
		    <h3 class="menu_head">Filters</h3>
			  <ul class="menu">
			  <?php
			  foreach ($filter as $e) {
			  ?>
			  		<li><a href="#" onclick="filter('<?php echo $e->id; ?>')">
			  		<?php
			  		echo $e->title; 
			  		?>
			  		</a></li>
	          <?php
			  }
			  ?>
				<!-- 
				<li class="item2"><a href="#"><img class="arrow-img" src="<?php echo asset("public/img/f_menu.png"); ?>" alt=""/>Books</a>
				</li>
				<li class="item3"><a href="#"><img class="arrow-img" src="<?php echo asset("public/img/f_menu.png"); ?>" alt=""/>Devices</a>
				</li>
				 -->
				<!-- 
				<li class="item7"><a href="#"><img class="arrow-img" src="<?php echo asset("public/img/f_menu.png"); ?>" alt=""/>Top Fashion</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				<li class="item8"><a href="#"><img class="arrow-img" src="<?php echo asset("public/img/f_menu.png"); ?>" alt=""/>Summer Collection</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">Cute Kittens </a></li>
						<li class="subitem2"><a href="#">Strange Stuff </a></li>
						<li class="subitem3"><a href="#">Automatic Fails </a></li>
					</ul>
				</li>
				 -->
			</ul>
		</div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
       </div>
       <div class="tlinks"></div>
	   </div> 
	   <div class="col-md-9 content_right">
	    <div class="top_grid2">
	    <?php
	    $i = 0;
	    foreach ($item as $e) {
	    ?>
        <div class="col-md-4 top_grid1-box1">
		<a href="#">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox">
		        <img src="<?php echo asset($e->title_img); ?>" class="img-responsive" alt="" style="height:12em"/> </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $e->title; ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p><small>$<?php echo $e->price; ?></small></p></li>
	     	  		<li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="View">View</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
        </a>
		</div>
        <?php
            if (++$i % 3 == 0) {
                echo "&nbsp;<div class='clearfix'> </div>";
            }
        }
        ?>
        <div class="clearfix"> </div>
        <div class="clearfix"> </div>
		<div class="clearfix"> </div>
	    </div> 
       </div>
	  </div>  	    
	</div>
</div>

</body>
<script>
function search() {
	var category_id = $("#category_id").val();
	var search_txt = $("#search_txt").val();
	location.href = "index?category_id=" + category_id + "&search_txt=" + search_txt;
}

function filter(filter_id) {
	var category_id = $("#category_id").val();
	var search_txt = $("#search_txt").val();
	if (category_id == 0) {
		location.href = "index?category_id=" + filter_id + "&search_txt=" + search_txt;
	} else {
		location.href = "index?category_id=" + category_id + "&filter_id=" + filter_id;
	}
}
</script>
</html>		