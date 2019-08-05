<?php

  $id = $_POST['id'];
  $password=$_POST['password'];
  if($id === 'heeyoung' and $password === '0058'){
    header('Location: ./index.php?id='.$_POST['id']);
  }
  else{
    echo("<script>
        alert('ID 혹은 비밀번호가 일치하지 않습니다.');
        history.back(-1);
       </script>
     ");
  }
 ?>
