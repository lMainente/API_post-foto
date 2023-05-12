<?php

define('UPLOAD_DIR', 'fotos/');
$img = $_FILES['foto']['tmp_name'];
$assistidaId = $_POST['assistidaId'];
$file = UPLOAD_DIR . $assistidaId . '.jpg';

if (move_uploaded_file($img, $file)) {
  $_SESSION['FOTO'] = $file;
  print 'Foto salva com sucesso';
} else {
  print 'Não foi possível salvar a foto';
}



?>