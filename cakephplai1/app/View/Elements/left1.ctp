<ul class="list-group">
	<?php
	 	$categories = $this->requestAction('categories/');
	 	foreach ($categories as $category) {
	 		?>
	 		<li class="list-group-item">
	 		<a href="<?php echo $this->webroot;?>categories/view/<?php echo $category['Category']['id'];?>"><?php echo $category['Category']['name'];?>
	 		</a>
	 		</li>
	 <?php
	 	}
	?>
	</ul>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="./img/hoa.jpg" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Middle aligned media</h4>
    ...
  </div>
</div>
