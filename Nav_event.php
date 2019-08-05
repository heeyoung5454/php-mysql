<!DOCTYPE html>
<html lang="ko">
<head>
  <title>웹페이지</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_event.css"/>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

<section id ="banner">
  <div class="title">
    <h1>EVENT</h1>
  </div>
</section>

<section id="event">
    <div class = "event_content">
      <div class = "event_title">
      <h3>진행중인 이벤트</h3>
      <a class="more" title="더보기" href="" alt=" 더보기">+더보기</a>
      </div>
      <ul class="event_list">
        <li>
          <a href=""><img src="../../img/event1.png"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
        <li>
          <a href=""><img src="../../img/event2.png"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
        <li>
          <a href=""><img src="../../img/event1.png"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
      </ul>
  </div>

    <div class = "event_content">
      <div class = "event_title">
      <h3>종료된 이벤트</h3>
      <a class="more" title="더보기" href="" alt=" 더보기">+더보기</a>
      <ul class="event_list">
        <li>
          <a href=""><img src="../../img/event_book.jpg"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
        <li>
          <a href=""><img src="../../img/event_birthday.png"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
        <li>
          <a href=""><img src="../../img/event_movie.jpg"></a>
          <div class="event_info">
          <div class="title">이벤트 제목</div>
          <div class="when">진행기간</div>
        </div>
        </li>
      </ul>
    </div>
  </div>
  </section>
</article>

<?php
require('../../view/footer.php');
?>
