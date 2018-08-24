<?php
use app\components\MenuWidget;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
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
		<div class="main">
    <div class="content">
      
    	<div class="content_top" >
            
        
    		<div class="heading">
    		<h3><?= $category->name; ?></h3>
    		</div>
    		<div class="sort">
    		<p>Сортировать по:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Кол-во на страницу:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
            
                <?php if ($pages->pageCount>1): ?>
    		<div class="page-no">
                        <p> Страницы: &nbsp;</p>
                        <?php echo LinkPager::widget(['pagination' => $pages]); ?>
    				<!--<ul> <li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p> -->
    		</div>
                <?php endif; ?>
    		<div class="clearfix"></div>
    	</div>
        <?php if (!empty($products)):  ?>
	      <div class="section group" >
                    <?php foreach($products as $product): ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?= Url::toRoute('single')?>/<?= $product->id ?>"><img src="/images/prod/<?= $product->img ?>" alt="" /></a>
					 <h2><?= $product->name ?> </h2>
					 <p><?= $product->description ?></p>
                                         <p><span class="strike"><?= $product->price ?> руб.</span><span class="price"><?= $product->price ?> руб.</span></p>
					  <div class="button add-to-cart" data-id="<?= $product->id ?>"><span><img src="images/cart.jpg" alt="" /><a href="<?= Url::toRoute('single')?>/<?= $product->id ?>" class="cart-button">В корзину</a></span> </div>
				     <div class="button"><span><a href="<?= Url::toRoute('single')?>/<?= $product->id ?>" class="details">Детали</a></span></div>
				</div>
                    <?php endforeach; ?>
                    <script> $('.add-to-cart').on('click', function(e) {
                        e.preventDefault();
                        var id = $(this).data('id');
                        alert('Ku-ku!!!-'+id); }); 
                    </script>
                    <div class="clearfix"></div>
		</div>
        <?php else: ?>
	      <div class="section group" >
				Категория пуста
		</div>
        

        <?php  endif; ?>

        <!-- Новые поступления в категории -->
        <?php if (!empty($products)):  ?>
        <?php $trigger=0; ?>
                    <?php foreach($products as $product): ?>
                        <?php if ($product->new=='1'): ?>
                                <?php if ($trigger==0): 
                                    $trigger=1;
                                ?>
	<div class="content_bottom">
    		<div class="heading">
    		<h3>Новые </h3>
    		</div>
    		<div class="sort">
    		<p>Sort by:
    			<select>
    				<option>Lowest Price</option>
    				<option>Highest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>Lowest Price</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="show">
    		<p>Show:
    			<select>
    				<option>4</option>
    				<option>8</option>
    				<option>12</option>
    				<option>16</option>
    				<option>20</option>
    				<option>In Stock</option>  				   				
    			</select>
    		</p>
    		</div>
    		<div class="page-no">
    			<p>Result Pages:<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> Next>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group" >
                                
                                <?php endif; ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?= Url::toRoute('single')?>/<?= $product->id ?>"><img src="/images/prod/<?= $product->img ?>" alt="" /></a>
					 <h2><?= $product->name ?> </h2>
					 <p><?= $product->description ?></p>
					 <p><span class="strike"><?= $product->price ?> руб.</span><span class="price"><?= $product->price ?> руб.</span></p>
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="<?= Url::toRoute('single')?>/<?= $product->id ?>" class="cart-button">Add to Cart</a></span> </div>
				     <div class="button"><span><a href="<?= Url::toRoute('single')?>/<?= $product->id ?>" class="details">Details</a></span></div>
				</div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if ($trigger==1): ?>
                    <div class="clearfix"></div>
		</div>
                    <?php endif; ?>
                  
        <?php else: ?>
	      <div class="section group" >
				
		</div>
        

        <?php  endif; ?>

		</div>
	</div>

<!-- begin hits -->            
        <?php if (!empty($hits)): ?>
                    <!-- <div class="best-sellers">
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
                    </div> -->
                    <div class="device">
			<div class="course_demo">
                            <ul id="flexiselDemo">
                                <?php foreach ($hits as $hit): ?>
                                    <li>
					<div class="ipad text-center">
                                            <a href="<?= Url::to('products')?>"> 
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
<!--   end of hits!!! -->    
		</div>
	</div>
