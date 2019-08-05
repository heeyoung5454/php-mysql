<?php
require('../../lib/print.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>
    현재글::
    <?php
    print_title();
   ?>
 </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_community_write.css"/>
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
  <aside class="cate">
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
    <div class="top">
      <h3>현재글</h3>
      <a href="Nav_community_free.php"><input type="submit" value="글 목록 보기"></a>
    </div>

    <div class = "title">
      <h4>
      <?php
        print_title();
      ?>
      </h4>
      <span>작성자이름:누구냥</span>
      <span>2019.07.02</span>
    </div>

    <div class ="content">
      <div class="description">
      <p>
      <?php
        print_description();
      ?>
      </p>
    </div>

      <?php if(isset($_GET['id'])){
      ?>

      <div class ="control">
        <a href="update.php?id=<?=$_GET['id'] ?>"><input type="submit" value="글 수정하기"></a>
        <form action="delete_process.php" method="post">
          <input type="hidden" name="id" value="<?=$_GET['id']?>">
          <input type="submit" value="글 삭제하기">
        </form>

      </div>

      <?php }   ?>

      <div class="comment">
        <div class="best">
          <span>작성자 이름</span>
          <span>2019.07.02</span>
        </div>
        <p>이건 댓글 내용이다 뭐라고 썼을까?</p>
      </div>

      </div>
  </article>

</section>
</article>
<?php
require('../../view/footer.php');
?>
