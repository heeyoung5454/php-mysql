<!DOCTYPE html>
<html lang="ko">
<head>
  <title>웹페이지</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_community.css"/>
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
    <h1>Community</h1>
  </div>
</section>


<section id="community">
  <article class="Mainimage">
    <div class = "image" id="image1">
      <a href="/"><img src="../../img/community_travel.jpg"></a>
      <p>여행준비 A부터 Z까지</p>
    </div>
    <div class = "image" id="image2">
      <a href="/"><img src="../../img/community_photo.jpg"></a>
      <p>사진 잘 찍는 법 </p>
    </div>
    <div class = "image" id="image3">
      <a href="/"><img src="../../img/community_travel.jpg"></a>
      <p>여행준비 A부터 Z까지</p>
    </div>
  </article>
  <article class="Mainboard">
  <div class = "board" id="board1">
    <h3>인기글모음</h3>
    <a class="more" title="게시판 더보기" href="" alt="자유게시판 더보기">+더보기</a>
    <ul class = "board_list">
      <li><a href="">내용1 </a></li>
      <li><a href="">내용2 </a></li>
      <li><a href="">내용3 </a></li>
    </ul>
  </div>
  <div class = "board" id="board2">
      <h3>자유게시판</h3>
      <a class="more" title="사진 더보기" href="" alt="사진 더보기">+더보기</a>
      <ul class = "board_list">
        <li><a href="">내용1 </a></li>
        <li><a href="">내용2 </a></li>
        <li><a href="">내용3 </a></li>
    </ul>
  </div>
  <div class = "board" id="board3">
      <h3>사진게시판</h3>
      <a class="more" title="비디오 더보기" href="" alt="비디오 더보기">+더보기</a>
    <ul class = "board_list">
      <li><a href="">내용1 </a></li>
      <li><a href="">내용2 </a></li>
      <li><a href="">내용3 </a></li>
    </ul>
  </div>
  <div class = "board" id="board4">
    <h3>정보게시판</h3>
    <a class="more" title="게시판 더보기" href="" alt="자유게시판 더보기">+더보기</a>
    <ul class = "board_list">
      <li><a href="">내용1 </a></li>
      <li><a href="">내용2 </a></li>
      <li><a href="">내용3 </a></li>
  </div>
  <div class = "board" id="board5">
      <h3>익명게시판</h3>
      <a class="more" title="사진 더보기" href="" alt="사진 더보기">+더보기</a>
      <ul class = "board_list">
        <li><a href="">내용1 </a></li>
        <li><a href="">내용2 </a></li>
        <li><a href="">내용3 </a></li>
    </ul>
  </div>
  <div class = "board" id="board6">
      <h3>투표게시판</h3>
      <a class="more" title="비디오 더보기" href="" alt="비디오 더보기">+더보기</a>
    <ul class = "board_list">
      <li><a href="">내용1 </a></li>
      <li><a href="">내용2 </a></li>
      <li><a href="">내용3 </a></li>
    </ul>
  </div>
  </article>
</section>
</article>

<?php
require('../../view/footer.php');
?>
