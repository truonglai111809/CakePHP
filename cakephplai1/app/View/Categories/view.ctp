
<?php if (!empty($category['Product'])): ?>
	
		<div class="row">
		  <?php
		    foreach ($category['Product'] as $product)
		    {
		    	?>

		  <div class="col-md-4">
		    <div class="thumbnail">
		      <img src="<?php echo $this->webroot.'files/product/image/'.$product['id'].'/'.$product['image'];?>" style="height:250px;">
		      <div class="caption">
		        <h4> <?php echo ($product['name']); ?><br></h4>
		        <p><h4>Giá:<?php echo ($product['price']); ?><br></h4></p>
		        <p>
		          <a href="<?php echo $this->webroot;?>products/view/<?php echo $product['id'];?>" class="btn btn-primary" role="button">Chi tiết</a>

		           <a href="javascript:;" onclick="simpleCart.add({name:'<?php echo $product['name'];?>', price: '<?php echo $product['price'];?>',thumb:'<?php echo 'files/product/image/'.$product['id'].'/'.$product['image'];?>'});" class="btn btn-success" role="button">Mua hàng</a>
		        </p>
		      </div>
		    </div>
		</div>
		<?php
		    }
		?>

<?php endif; ?>
		</div>
		






