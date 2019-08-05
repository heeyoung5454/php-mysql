<!DOCTYPE html>
<html lang="ko">
<head>
  <title>php_index</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/index.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js">
  </script>
  <script>
  <!--sub_menu slide -->
$(document).ready(function(){
  $("#menu_all").mouseenter(function(){
    $(".panel").slideDown(500);
  });
  $("#menu_all").mouseleave(function(){
    $(".panel").slideUp(500);
  });
});
</script>
</head>

<body>
<article class ="main_all">
  <?php
  require('../../view/header.php');
  ?>

<section>
  <div class="slide">
    <input type="radio" name="pos" id="pos1" checked>
    <input type="radio" name="pos" id="pos2">
    <input type="radio" name="pos" id="pos3">
    <input type="radio" name="pos" id="pos4">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <p class="bullet">
      <label for="pos1">1</label>
      <label for="pos2">2</label>
      <label for="pos3">3</label>
      <label for="pos4">4</label>
    </p>
  </div>
</section>

<section class="event">
  <h3 class="title"><strong>EVENT</strong></h3>
  <div class="event_list">
    <ul>
      <li>
        <div class="event_info">
        <figure><img src="../../img/event1.png"><a href="/"></a></figure>
        <span class="icon"><img alt="icon" src="../../img/event.png"></span>
        <span class="title">이벤트 제목</span>
        <div class="when">진행기간</div>
        </div>
      </li>
      <li>
        <div class="event_info">
        <figure><img src="../../img/event2.png"><a href="/"></a></figure>
        <span class="icon"><img alt="icon" src="../../img/event.png"></span>
        <span class="title">이벤트 제목</span>
        <div class="when">진행기간</div>
       </div>
      </li>
      <li>
        <div class="event_info">
        <figure><img src="../../img/event1.png"><a href="/"></a></figure>
        <span class="icon"><img alt="icon" src="../../img/event.png"></span>
        <span class="title">이벤트 제목</span>
        <div class="when">진행기간</div>
      </div>
      </li>
      <li>
        <div class="event_info">
        <figure><img src="../../img/event2.png"><a href="/"></a></figure>
        <span class="icon"><img alt="icon" src="../../img/event.png"></span>
        <span class="title">이벤트 제목</span>
        <div class="when">진행기간</div>
      </div>
      </li>
    </ul>
  </div>
</section>

<section class="recommend">
  <h3 class="title"><strong>BEST</strong></h3>
  <div class="recommend_list">
    <span class="recommend_book">
      <a href=""><img class="recommend_item"alt="post" src="../../img/white.png"></a>
      <div class="best">
        <h3>Book</h3>
        <p>이달의 추천 도서</p>
      </div>
    </span>
    <span class="recommend_movie">
      <a href=""><img class="recommend_item" alt="post" src="../../img/white.png"></a>
      <div class="best">
        <h3>Movie</h3>
        <p>이달의 추천 영화</p>
      </div>
    </span>
    <span class="recommend_food">
      <a href=""><img class="recommend_item" alt="post" src="../../img/white.png"></a>
      <div class="best">
        <h3>Food</h3>
        <p>이달의 추천 음식</p>
      </div>
    </span>
  </div>
</section>
</article>

  <?php
  require('../../view/footer.php');
  ?>
