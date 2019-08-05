<?php
  function print_title(){
    if(isset($_GET['id'])){
     echo htmlspecialchars($_GET['id']);
    } else {
     echo "글 제목 예시";
    }
  }
?>

<?php
  function print_description(){
    if(isset($_GET['id'])){
      echo file_get_contents("../../data/free/".$_GET['id']);
    } else {
      echo "글 내용 예시";
    }
  }
?>
