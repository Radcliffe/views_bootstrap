<?php if (!empty($title)): ?>
  <h3><?php print $title ?></h3>
<?php endif ?>

<div id="views-bootstrap-media-<?php print $id ?>" class="<?php foreach($classes as $key => $value) { print $value; } ?>">
  <ul class="media-list">
    <?php foreach ($items as $key => $item): ?>
      <li class="media">
        <?php if ($item['image_field']): ?>
          <div class="media-left">
            <?php print $item['image_field'] ?>
          </div>
        <?php endif ?>

        <div class="media-body">
          <?php if ($item['heading_field']): ?>
            <h4 class="media-heading">
              <?php print $item['heading_field'] ?>
            </h4>
          <?php endif ?>

          <?php print $item['body_field'] ?>
        </div>
      </li>
    <?php endforeach ?>
  </ul>
</div>
