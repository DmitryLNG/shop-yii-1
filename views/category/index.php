<?php
use app\components\MenuWidget;
use yii\helpers\Url;
?>

<div class="wrap">
		<div class="navigation-strip">
			<h4>!!!Most Popular<i class="arrow"></i></h4>
                        
                       
			<div class="top-menu">
				<!-- start header menu -->
		<ul class="megamenu skyblue">
                        <?= MenuWidget::widget(["tpl" => "menu.php"]) ?>
                </ul> 
	</div>
		<div class="clearfix"></div>
		</div>
		<div class="main-top">
			<div class="col-md-8 banner">
				<!-- start slider -->
				<!----->
				<div class="slider">	  
					  <div class="callbacks_container">
						  <ul class="rslides" id="slider">
							 <li>
								 <img src="/images/slider1.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="/images/slider2.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="/images/slider3.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="/images/slider4.jpg" alt=""/>
							 </li>
						  </ul>	      
					  </div>
				</div>
				<!----->
				<!-- end  slider -->
		   </div>
		   <div class="col-md-4 right-grid">
				<div class="right-grid-top">
					<div class="r-sale text-center">
						<h6>Winter wear</h6>
						<h2>Sale</h2>
					</div>
					<div class="r-discount">
						<span>upto</span>
						<h2>50%</h2>
						<p>OFF</p>
						<a href="#">shop now<i class="go"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="right-grid-bottom">
					<div class="right-grid-bottom-left">
						<h3>Deal of the Day</h3>
						<p>Expires in 3:42:56</p>
						<h5>Wireless Headphones</h5>
						<h2>Extra 33% OFF</h2>
						<a href="single.html">shop now<i class="go"></i></a>
					</div>
					<div class="right-grid-bottom-right">
						<img src="/images/headset.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
		   </div>
		   <div class="clearfix"></div>
		</div>
		<div class="new-arrivals text-center">
			<div class="col-md-3 new-arrival-head">
				<h3>New Arrivals</h3>
				<a class="btn btn-1 btn-1d" href="products.html">View All</a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="/images/watch.jpg" class="img-responsive" alt="" /></a>
				<h3>Watches</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="/images/men-jacket.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>jackets</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="/images/shoes.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>Footwear</h3>
				<a href="single.html">Shop Now<i class="go"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
               
                <?php if (!empty($hits)): ?>
                    <div class="best-sellers">
			<div class="best-sellers-head">
				<h3>Bestsellers</h3>
			</div>
			<div class="best-sellers-menu">
				<ul>
					<li><a class="active" href="#">Electronics</a></li>
					<li><a href="#">Fashion</a></li>
					<li><a href="#">Books</a></li>
					<li><a href="#">Other</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
                    </div>
                    <div class="device">
			<div class="course_demo">
                            <ul id="flexiselDemo">
                                <?php foreach ($hits as $hit): ?>
                                    <li>
					<div class="ipad text-center">
                                            <a href="<?= Url::toRoute('products')?>"> 
						<img src="/images/prod/<?= $hit->img ?>" alt="" />
                                            </a>
                                            <h4><?= $hit->name ?></h4>
                                            <h3><?= $hit->price ?></h3>
                                            <ul>
						<li><i class="cart-1"></i></li>
						<li><a class="cart" href="#">Add To Cart</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <ul>
						<li><i class="heart"></i></li>
						<li><a class="cart" href="#">Add To Wishlist</a></li>
                                            </ul>
					</div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
	  <div class="clients">
		<div class="course_demo1">
		          <ul id="flexiselDemo1">	
					<li>
						<div class="client">
							<img src="/images/c1.jpg" alt="" />
						</div>
					</li>
					<li>
					    <div class="client">
							<img src="/images/c2.jpg" alt="" />
						</div>
					</li>	
					<li>
					    <div class="client">
							<img src="/images/c4.jpg" alt="" />
						</div>
					</li>	
					<li>
					    <div class="client">
							<img src="/images/c3.jpg" alt="" />
						</div>
					</li>	
					<li>
						<div class="client">
							<img src="/images/c5.jpg" alt="" />
						</div>
					</li>	
					<li>
						<div class="client">
							<img src="/images/c6.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="client">
							<img src="/images/c7.jpg" alt="" />
						</div>
					</li>
				</ul>
			</div>
			<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> -->
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 7,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			    
			});
		</script>
		<!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
		</div>
		<div class="transport-grid">
			<div class="col-md-4 shipping">
				<h3><i class="shipping-icon"></i>Free Shipping</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="col-md-4 shipping">
				<h3><i class="correct-icon"></i>100 % Original</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="col-md-4 return">
				<h3><i class="return-icon"></i>Free Return</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="clearfix"></div>
		</div>
	  </div>