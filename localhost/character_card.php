<?php include "config.php";
 if($_GET["club"]){
      $str = "select * from `zvanie`, club where club.status = zvanie.id and club.id=" . $_GET["club"];
      $club_arr = mysqli_fetch_assoc(mysqli_query($connection,$str));

      $str= "SELECT * FROM message WHERE m_out_id=" . $club_arr["id"];
      $club_message = mysqli_query($connection,$str);
      /*var_dump($str);
      die();*/
 }
 else{
   $error=1;
 }
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "header.php" ?>
  <link rel="stylesheet" href="style1.css">
  <!-- bootstrap --->


  <title><?php if($error){
      echo "Ошибка!";
  }
  else{
    echo $club_arr["id"] . " = " . $club_arr["name"];
  }
  ?>
  </title>
</head>

  <?php include "menu.php" ?>
<body>

 <?php
  if($error){
      echo "<h1>Ошибка 404 Участник не был найден</h1>";
  }
  else{
    ?>

     <div class="container">

           <div class="my_container">
               <h2>Профиль Участника</h2>
                <div class="line">

                  <div class="line_img">

                    <img src="/image/<?php
                    if($club_arr['c_image']) echo $club_arr['c_image'];
                    else
                     echo "images.png";
                      ?>"/>

                  </div>
                  <div class="line_text">
                      <div class="my_text">ID Участника: <?php echo $club_arr['id']; ?></div>
                      <div class="my_text">ФИ: <?php echo $club_arr['name']; echo " " . $club_arr['surname']?></div>
                      <div class="my_text">Дата рождения: <?php echo $club_arr['z_date']; ?></div>
                      <div class="my_text">Звание: <?php echo $club_arr['z_nazv']; ?></div>
                      <div class="my_text">Вклад: <?php echo $club_arr['z_vklad']; ?></div>
                      <div class="my_text">Дата присоедения: <?php echo $club_arr['day']; ?></div>
                  </div>
                </div>
              <h2>Описание Участника:</h2>
              <div class="my_text"><?php echo $club_arr['about']; ?></div>
                <h2>Что он(а) готовил(а):</h2>
              <div class="my_text"><?php echo $club_arr['gotovka']; ?></div>
              <div class="line_massage">
                   <h2>Последние коментарии:</h2>
                  <?php
                  while($club = mysqli_fetch_assoc($club_message)){
                    ?>
                  <div class="article">
                  <div class="art_date"><?php echo $club['m_date']; ?></div>
                  <div class="art_description">
                  <?php echo $club['m_message']; ?>
                </div>
              </div>
            <?php } ?>
              </div>
          </div>
      </div>



<?php
  }
  ?>

</body>
</html>