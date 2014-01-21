<?php include('style.inc.php'); ?>

<blockquote id="<?php echo $id; ?>" class="testimonial testimonial-style-4 testimonial-style-serif">
	<div class="testimonial-content">
		<img width="26" height="17" alt="quote-tip" class="quote-tip" src="<?php echo OP_ASSETS_URL ?>images/testimonials/quote-tip.png">
		<?php echo $content ?>
	</div>
	<cite><span>- <?php echo $name ?>, <a href="<?php echo $href ?>" target="_blank"><?php echo $company ?></a></span></cite>
</blockquote>