<!DOCTYPE html>
<html lang="ko">
<head>
  <title>웹페이지</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/template.css"/>
  <link rel="stylesheet" href="../../css/Nav_intro.css"/>
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

  <section id ="banner">
    <div class="title">
      <h1>Intro</h1>
    </div>
  </section>
  </article>
  <?php
  require('../../view/footer.php');
  ?>
