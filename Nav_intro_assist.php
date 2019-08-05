<!DOCTYPE html>
<html lang="ko">
<head>
  <title>웹페이지</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_intro_assist.css"/>
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
    <h1>intro</h1>
  </div>
</section>

<section id ="admin">
  <h2>이미지 출저 및 참고 사이트</h2>
  <div class="assist_list">
    <h3>웹페이지 디자인</h3>
    <ul>
      <li><a href="http://www.baskinrobbins.co.kr/">베스킨라빈스</a></li>
      <li><a href="https://pann.nate.com/">네이트판</a></li>
    </ul>
  </div>
  <div class="assist_list">
    <h3>이미지 출처</h3>
  <ul>
    <li><a href="https://pixabay.com/ko/">pixabay></a></li>
    <li><a href="https://www.flaticon.com/">flaticon></a></li>
  </ul>
</div>
<div class="assist_list">
  <h3>참고 사이트</h3>
  <ul>
    <li><a href="https://www.w3schools.com/">w3schools</li>
    <li><a href="https://www.codingfactory.net/">개인블로그</a></li>
    <li><a href="https://www.opentutorials.org/course/3332">생활코딩-node.js</a></li>
  </ul>
</section>
</article>
<?php
require('../../view/footer.php');
?>
