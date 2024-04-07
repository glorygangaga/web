<div class="<?= $post['classname'] ?> featured-posts-boxes">
  <a class="<?= $post['classname'] ?>-title-link title-link" href='/post/?id=<?= $post['id'] ?>'></a>
  <?php if ($post['button']) {
    echo '<button class="main-featured-posts-box__2-button my-button">Adventure</button>';
  }
  ?>
  <h3 class="<?= $post['classname'] ?>-title featured-posts-boxes-title"><?= $post['title'] ?></h3>
  <p class="<?= $post['classname'] ?>-text featured-posts-box__text default-text"><?= $post['subtitle'] ?></p>
  <div class="<?= $post['classname'] ?>-info featured-posts-box__info">
    <div class="<?= $post['classname'] ?>-who featured-posts-box__who">
      <img src=<?= $post['img_modifier'] ?> alt=<?= $post['author'] ?>>
      <p class="<?= $post['classname'] ?>-who-wrote featured-posts-box__who-wrote default-text"><?= $post['author'] ?></p>
    </div>
    <p class="<?= $post['classname'] ?>-when featured-posts-box__when default-text"><?= $post['date'] ?></p>
  </div>
</div>
