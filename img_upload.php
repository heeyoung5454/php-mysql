  <?php
  $uploadfile = $_FILES['userfile']['name'];
  if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
    echo "<img src={$_FILES['userfile']['name']}><p>
    파일이름:{$_FILES['userfile']['name']}<br/></p>";
  }
  else {
    echo "실패";
  }
 ?>
