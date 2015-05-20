<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
    <div class="col-sm-12"><?php print $content['top']; ?></div>
  </div>
  <div class="row row-middle">
    <div class="col-sm-6"><?php print $content['left']; ?></div>
    <div class="col-sm-6"><?php print $content['right']; ?></div>
  </div>
  <div class="row">
    <div class="col-sm-12"><?php print $content['bottom']; ?></div>
  </div>
</div>
