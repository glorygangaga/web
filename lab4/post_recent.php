<div class="most-recent-box">
  <div class="most-recent-box__inner">
    <a href="#"><img class="most-recent-box__inner-image" src=<?= $post['mainImg'] ?> alt=<?= $post['mainImg'] ?>></a>
    <div class="most-recent-box__inner-text">
      <h3 class="most-recent-box__inner-text--title"><?= $post['title'] ?></h3>
      <p class="most-recent-box__inner-text--subtitle"><?= $post['subtitle'] ?></p>
    </div>
    <div class="most-recent-box__inner-who">
      <div class="most-recent-box__inner-who-info">
        <img src=<?= $post['authorImg'] ?> alt=<?= $post['author'] ?>>
        <p class="most-recent-box__inner-who--name"><?= $post['author'] ?></p>
      </div>
      <p class="most-recent-box__inner-when"><?= $post['date'] ?></p>
    </div>
  </div>
</div>