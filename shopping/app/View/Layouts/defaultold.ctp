
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('stylecart');
		echo $this->Html->css('side_bar');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<body>
	<?php echo $this->element('side_bar');?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>