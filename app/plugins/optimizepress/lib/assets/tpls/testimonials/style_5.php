<?php include('style.inc.php'); ?>

<blockquote id="<?php echo $id; ?>" class="testimonial testimonial-image-style-4">
	<img alt="" src="<?php echo $image ?>" />
	<?php echo $content ?>
	<cite><strong><?php echo $name ?></strong>, <a href="<?php echo $href ?>" target="_blank"><?php echo $company ?></a></cite>
</blockquote>