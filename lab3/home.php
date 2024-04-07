<?php
  $posts = [
    [
      'title' => 'The Road Ahead',
      'subtitle' => 'The road ahead might be paved - it might not be.',
      'img_modifier' => 'http://localhost:8001/static/imgs/matVogels.png',
      'author' => 'Mat Vogels',
      'when' => 'September 25, 2015',
      'classname' => 'main-featured-posts__box-1',
    ],
    [
      'title' => 'From Top Down',
      'subtitle' => 'Once a year, go someplace you’ve never been before.',
      'img_modifier' => 'http://localhost:8001/static/imgs/williamWong.png',
      'author' => 'William Wong',
      'when' => 'September 25, 2015',
      'classname' => 'main-featured-posts-box__2',
    ],
  ];
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

      <section class="main-featured-posts">
        <div class="container">
          <div class="container__inner">
            <div class="main-featured-posts__title-div div-title">
              <h2 class="main-featured-posts__title main-title">Featured Posts</h2>
            </div>
            <div class="main-featured-posts__box ">
              <?php 
                foreach ($posts as $post) {
                  include 'post_preview.php';
                }
              ?>
            </div>
          </div>
        </div>
      </section>

      <section class="main-most-recent">
        <div class="container">
          <div class="main-most-recent__title-div div-title">
            <h2 class="main-most-recent__title main-title">Most Recent</h2>
          </div>
          <div class="most-recent-boxes">
            <div class="most-recent-box most-recent-box-1">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/stillStanding.jpg"  alt="stillStanding"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Still Standing Tall</h3>
                  <p class="most-recent-box__inner-text--subtitle">Life begins at the end of your comfort zone.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/williamWong.png" alt="williamWong">
                    <p class="most-recent-box__inner-who--name">William Wong</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
            <div class="most-recent-box most-recent-box-2">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/sunnySide.png" alt="sunnySide"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Sunny Side Up</h3>
                  <p class="most-recent-box__inner-text--subtitle">No place is ever as bad as they tell you it’s going to be.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/matVogels.png" alt="matVogels">
                    <p class="most-recent-box__inner-who--name">Mat Vogels</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
            <div class="most-recent-box most-recent-box-3">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/watterFalls.png" alt="watterFalls"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Water Falls</h3>
                  <p class="most-recent-box__inner-text--subtitle">We travel not to escape life, but for life not to escape us.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/matVogels.png" alt="matVogels">
                    <p class="most-recent-box__inner-who--name">Mat Vogels</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
            <div class="most-recent-box most-recent-box-4">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/throughTheMist.png" alt="throughTheMist"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Through the Mist</h3>
                  <p class="most-recent-box__inner-text--subtitle">Travel makes you see what a tiny place you occupy in the world.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/williamWong.png" alt="williamWong">
                    <p class="most-recent-box__inner-who--name">William Wong</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
            <div class="most-recent-box most-recent-box-5">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/awakenEarly.png" alt="awakenEarly"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Awaken Early</h3>
                  <p class="most-recent-box__inner-text--subtitle">Not all those who wander are lost.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/matVogels.png" alt="matVogels">
                    <p class="most-recent-box__inner-who--name">Mat Vogels</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
            <div class="most-recent-box most-recent-box-6">
              <div class="most-recent-box__inner">
                <a href="#"><img class="most-recent-box__inner-image" src="/static/imgs/tryItAlways.png" alt="tryItAlways"></a>
                <div class="most-recent-box__inner-text">
                  <h3 class="most-recent-box__inner-text--title">Try it Always</h3>
                  <p class="most-recent-box__inner-text--subtitle">The world is a book, and those who do not travel read only one page.</p>
                </div>
                <div class="most-recent-box__inner-who">
                  <div class="most-recent-box__inner-who-info">
                    <img src="/static/imgs/matVogels.png" alt="matVogels">
                    <p class="most-recent-box__inner-who--name">Mat Vogels</p>
                  </div>
                  <p class="most-recent-box__inner-when">9/25/2015</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="footer-nav">
          <a href="http://localhost:8001/home"><h2 class="logo">Escape.</h2></a>
          <nav class="footer-navigation">
            <ul class="footer-navigation-lists">
              <li class="footer-navigation-list"><a href="http://localhost:8001/home">Home</a></li>
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
