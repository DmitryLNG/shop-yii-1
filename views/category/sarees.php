<?php
use app\components\MenuWidget;
use yii\helpers\Url;
?>

	<!-- header-section-ends -->
	<div class="wrap">
		<div class="navigation-strip">
			<h4>Most Popular<i class="arrow"></i></h4>
			<div class="top-menu">
				<!-- start header menu -->
		<ul class="megamenu skyblue">

                        <?= MenuWidget::widget(["tpl" => "menu.php"]) ?>
                
                </ul> 
	</div>
		<div class="clearfix"></div>
		</div>
		<!-- start main -->
<div class="main_bg">
	<div class="main">	   		           	         
		<div class="latest-products">
		<h2 class="style top">latext designs</h2>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic1.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic2.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299 <span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic3.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic4.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic5.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="single.html">
					<img src="images/w_pic6.jpg" alt=""/>
					<h3>branded sarees</h3>
					<div class="price1">
						<h4>$299<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
	<div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<li class="item1"><a href="#">Curabitur sapien<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="products.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="products.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="products.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Dignissim purus <img class="arrow-img " src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="products.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="products.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="products.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Ultrices id du<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="products.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="products.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="products.html">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Cras iacaus rhone <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="products.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="products.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="products.html">Automatic Fails </a></li>
			</ul>
		</li>
				<li>
			<ul class="kid-menu">
				<li><a href="products.html">Tempus pretium</a></li>
				<li ><a href="products.html">Dignissim neque</a></li>
				<li ><a href="products.html">Ornared id aliquet</a></li>
			</ul>
		</li>
		<ul class="kid-menu ">
				<li><a href="products.html">Commodo sit</a></li>
				<li ><a href="products.html">Urna ac tortor sc</a></li>
				<li><a href="products.html">Ornared id aliquet</a></li>
				<li><a href="products.html">Urna ac tortor sc</a></li>
				<li ><a href="products.html">Eget nisi laoreet</a></li>
				<li><a href="products.html">Faciisis ornare</a></li>
				<li class="menu-kid-left"><a href="contact.html">Contact us</a></li>
			</ul>
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
					<div class=" chain-grid menu-chain text-center">
	   		     		<a href="products.html"><img class="img-responsive chain" src="images/phone.jpg" alt=" " /></a>	   		     		
	   		     		<div class="grid-chain-bottom chain-watch">
		   		     		<span class="actual dolor-left-grid">300$</span>
		   		     		<span class="reducedfrom">500$</span>  
		   		     		<h6>Lorem ipsum dolor</h6>  		     			   		     										
	   		     		</div>
	   		     	</div>
	   		     	 <a class="view-all all-product" href="products.html">VIEW ALL PRODUCTS<span> </span></a> 	
					  <div class="clearfix"> </div>
			</div>
	 <div class="clearfix"> </div>
</div>
</div>
</div>	
