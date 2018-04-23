<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?= URLROOT?>/pages/about">link</a>
  <h1><?php echo $data['title']; ?></h1>
  <ul>
  <?php foreach( $data['posts'] as $post): ?>
  <li><?= $post->title;?></li>

  <?php endforeach; ?>
  </ul>
<?php require APPROOT . '/views/inc/footer.php'; ?>
