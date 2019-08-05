<?php
rename('../../data/free/'.$_POST['old_title'], '../../data/free/'.$_POST['title']);
file_put_contents('../../data/free/'.$_POST['title'],$_POST['description']);
header('Location: ./Nav_community_write.php?id='.$_POST['title']);

 ?>
