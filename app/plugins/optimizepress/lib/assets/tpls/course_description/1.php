<div id="<?php echo $id; ?>" class="course-description course-description-1">
    <img src="<?php echo $img; ?>"<?php echo (!empty($width) ? ' width="'.$width.'"' : '').(!empty($height) ? ' height="'.$height.'"' : ''); ?>>
    <div><p<?php echo $font; ?>><?php echo $title; ?></p></div>
    <p class="course-description-content"<?php echo $content_font; ?>><?php echo $content; ?></p>
</div>