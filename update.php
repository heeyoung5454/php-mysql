<?php
require('../../lib/print.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>
    새 글 쓰기
 </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_community_NewWrite.css"/>
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


<section id="writing">
  <aside>
    <h3>카테고리</h3>
    <ul class="category">
      <li><a href="">인기글 모음</a></li>
      <li><a href="">자유게시판</a></li>
      <li><a href="">사진게시판</a></li>
      <li><a href="">정보게시판</a></li>
      <li><a href="">익명게시판</a></li>
      <li><a href="">투표게시판</a></li>
    </ul>
  </aside>

  <article class = "main_board">
    <h3>현재글</h3>
    <div class ="title">
      <h4>
        <form action="update_process.php" method="post">
          <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?php print_title(); ?>" class="form_search">
        </p>
      </h4>
      <span>작성자이름:누구냥</span>
      <span>2019.07.02</span>
    </div>

    <div class ="content">
    <p>
      <textarea name="description" class="form_search"> <?php print_description(); ?></textarea>
    </p>
      <input type="submit" value="수정하기" class="form_search">
    </div>
    </form>
      <input type="submit" value="글목록보기">

  </article>
</section>
</article>

<?php
require('../../view/footer.php');
?>
