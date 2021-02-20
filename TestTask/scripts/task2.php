<?php 
  //подключаем другие нужные файлы
  include('head.php');
  include('navbar.php');

  //file 20000x20000 pixels
  $image = imagecreatefrompng("..\img\logo.png");    //загрузка изобр
  $img = imagescale($image, 200, 100,IMG_NEAREST_NEIGHBOUR);  // масштабируем  делаем 200x100 пикс.
      
  ob_start();
  imagepng($img);
  $data = ob_get_contents(); //получаем hex  изображение
  ob_end_clean();
  
  echo '<br><br><img src="data:image/png;base64, ' .  base64_encode($data) . '"'. ">'"; //кодируем в base64 и выводим на экран
  

?>