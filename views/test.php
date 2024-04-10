<?php
if (isset($_POST['test'])) {
  
  if (move_uploaded_file($_FILES['arquivo']['tmp_name'],'./views/test_file/'.$_FILES['arquivo']['name'])) {
    echo 'success';
  }else {
    echo 'error';
  }
}
?>

<video src=".\views\test_file\41b7b44108e27e1716e206d157419d36.mp4" autoplay="autoplay" controls="controls"></video>

<form action="./teste" method="post" enctype="multipart/form-data">
  <input type="file" name="arquivo">
  <input type="submit" name="test" value="enviar">
</form>