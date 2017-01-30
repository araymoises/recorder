<?php
if(is_uploaded_file($_FILES['recording']['tmp_name'])){

  $ext = explode('/', $_FILES['recording']['tmp_name']);
  $name = end($ext);
  $ruta = "store/";
  $origen = $_FILES['recording']['tmp_name'];
  $destino = $ruta.$name.".wav";
  move_uploaded_file($origen, $destino);

  echo $name;
}
?>
		
