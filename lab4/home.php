<?php
$posts = [
  [
    'id' => 1,
    'title' => 'The Road Ahead',
    'subtitle' => 'The road ahead might be paved - it might not be.',
    'img_modifier' => '/static/imgs/matVogels.png',
    'author' => 'Mat Vogels',
    'date' => 'September 25, 2015',
    'classname' => 'main-featured-posts__box-1',
    'button' => FALSE,
  ],
  [
    'id' => 2,
    'title' => 'From Top Down',
    'subtitle' => 'Once a year, go someplace you’ve never been before.',
    'img_modifier' => '/static/imgs/williamWong.png',
    'author' => 'William Wong',
    'date' => 'September 25, 2015',
    'classname' => 'main-featured-posts-box__2',
    'button' => TRUE,
  ],
];

$postRecent = [
  [
    'id' => 1,
    'mainImg' => '/static/imgs/stillStanding.jpg',
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'author' => 'William Wong',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/williamWong.png',
  ],
  [
    'id' => 2,
    'mainImg' => '/static/imgs/sunnySide.png',
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/matVogels.png',
  ],  
  [
    'id' => 3,
    'mainImg' => '/static/imgs/watterFalls.png',
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/matVogels.png',
  ],
  [
    'id' => 4,
    'mainImg' => '/static/imgs/throughTheMist.png',
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'author' => 'William Wong',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/williamWong.png',
  ],
  [
    'id' => 5,
    'mainImg' => '/static/imgs/awakenEarly.png',
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/matVogels.png',
  ],
  [
    'id' => 6,
    'mainImg' => '/static/imgs/stillStanding.jpg',
    'title' => 'Try it Always',
    'subtitle' => 'The world is a book, and those who do not travel read only one page.',
    'author' => 'Mat Vogels',
    'date' => '9/25/2015',
    'authorImg' => '/static/imgs/matVogels.png',
  ]
]
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/style.css">

  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__main-part">
          <a href="/home"><h2 class="logo">Escape.</h2></a>
          <nav class="header__navigation">
            <ul class="header__main-part--lists">
              <li class="header__main-part--list"><a href="/home">Home</a></li>
              <li class="header__main-part--list"><a href="#">Categories</a></li>
              <li class="header__main-part--list"><a href="#">About</a></li>
              <li class="header__main-part--list"><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="title-part">
        <div class="container">
          <div class="title-part__main">
            <h1 class="title-part__main-title">Let's do it together.</h1>
            <p class="title-part__main-text">We travel the world in search of stories. Come along for the ride.</p>
            <button class="title-part__main-button my-button">View Latest Posts</button>
          </div>
        </div>
      </section>
      
      <div class="main-navigation">
        <div class="container">
          <nav class="main-navigation__nav">
            <ul class="main-navigation__nav-lists">
              <li class="main-navigation__nav-list">Nature</li>
              <li class="main-navigation__nav-list">Photography</li>
              <li class="main-navigation__nav-list">Relaxation</li>
              <li class="main-navigation__nav-list">Vacation</li>
              <li class="main-navigation__nav-list">Travel</li>
              <li class="main-navigation__nav-list">Adventure</li>
            </ul>
          </nav>
        </div>
      </div>

      <section class="featured-posts">
        <div class="container">
          <div class="container__inner">
            <div class="featured-posts__title-div div-title">
              <h2 class="featured-posts__title main-title">Featured Posts</h2>
            </div>
            <div class="featured-posts__box ">
              <?php 
                foreach ($posts as $post) {
                  include 'post_preview.php';
                }
              ?>
            </div>
          </div>
        </div>
      </section>

      <section class="most-recent">
        <div class="container">
          <div class="main-most-recent__title-div div-title">
            <h2 class="main-most-recent__title main-title">Most Recent</h2>
          </div>
          <div class="most-recent-boxes">
            <?php
            foreach ($postRecent as $post) {
              include 'post_recent.php';
            }
            ?>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="footer-nav">
          <a href="/home"><h2 class="logo">Escape.</h2></a>
          <nav class="footer-navigation">
            <ul class="footer-navigation-lists">
              <li class="footer-navigation-list"><a href="/home">Home</a></li>
              <li class="footer-navigation-list"><a href="#">Categories</a></li>
              <li class="footer-navigation-list"><a href="#">About</a></li>
              <li class="footer-navigation-list"><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
  </body>
</html>
