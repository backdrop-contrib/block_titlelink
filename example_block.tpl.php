<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
  <?php if ($block->subject): ?>
    <h2 class="title">
      <?php if (isset($block->title_link)): ?>
        <a href="<? print $block->title_link ?>">
          <?php print $block->subject; ?>
        </a>
      <?php else: ?>
        <?php print $block->subject; ?>
      <?php endif; ?>
    </h2>
  <?php endif; ?>
  <div class="content">
    <?php print $block->content; ?>
  </div>
</div> <!-- /#block-<?php print $block->module .'-'. $block->delta; ?> -->