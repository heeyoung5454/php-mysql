

<!DOCTYPE html>
<html lang="ko">
<head>
 <title>자유게시판-Mysql</title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="../../css/template.css"/>
 <link rel="stylesheet" href="../../css/Nav_community_free.css"/>
 <link rel="stylesheet" href="../../css/community_common.css"/>

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
  include('../../view/header.php');
  ?>

  <section id ="banner">
    <div class="title">
      <h1>Community</h1>
    </div>
  </section>

  <section id="posting">
    <?php
    require('../../view/write_category.php');
    ?>

    <article class = "popular_board" id="board1">
      <h3>랜덤글</h3>
      <a class="more" title="게시판 더보기" href="" alt="자유게시판 더보기">+더보기</a>
      <ol class = "popular_list">
        <?php
        $write = scandir('../../data/free/');
        $n=0;
        while($n<4){
        $rand_num=mt_rand(2, count($write)-1);
          echo "<li><a href=\"../Community/Nav_community_write.php?id=$write[$rand_num]\">$write[$rand_num]</a></li>";
          $n=$n+1;
        }

        ?>
      </ol>
    </article>

    <article class="content_board">
      <h3>글 목록</h3>
      <table class="writing_list">
        <colgroup>
          <col width="80">
          <col width="700">
          <col width="100">
          <col width="100">
        </colgroup>
        <thead>
          <tr>
            <th>글번호</th>
            <th>제목</th>
            <th>닉네임</th>
            <th>작성일</th>
          </tr>
        </thead>
        <tbody>
         <?php

          $i=0;
          $write_list = scandir('../../data/free/');
          $write_date = date("Y-m-d");

          while ($i < count($write_list)) {
            $title =htmlspecialchars($write_list[$i]);

            if($write_list[$i] !='.'){
              if($write_list[$i] !='..'){
               echo
               "<tr>
                 <td>n번</td>
                 <td><a href=\"../Community/Nav_community_write.php?id=$title\">$title</a></td>
                 <td>닉명</td>
                 <td>";
               echo $write_date;
               echo "</td></tr>";
               }
             }
           $i = $i+1;
           }
           ?>
        </tbody>
      </table>


      <a class = "btn_write" href="create_write.php">
        <img width="30" height="30" alt="글쓰기" src="../../img/btn_write.png">
      </a>

      <div class="page_space">
        <strong class="current">1</strong>
        <a class ="page_num" title="2페이지" href="">2</a>
        <a class ="page_num" title="3페이지" href="">3</a>
        <a class ="page_num" title="4페이지" href="">4</a>
        <a class ="page_num" title="5페이지" href="">5</a>
        <a class ="btn_page_next" title="다음 페이지" href="">다음</a>
      </div>
      <div clas="search_writing">
        <form action="" method="post">
        <p><input type="text" name="title" class="form_search">
          <input type="submit" value="검색" class="btn_search">
        </p>
      </form>
      </div>
    </section>
</article>

  <?php
  require('../../view/footer.php');
  ?>
