<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
<ul class="navigation">
  <li class="nav-item"><a href="../spisok.php">Список Участников</a></li>
  <li class="nav-item"><a href="logout.php">Выход</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<div class="site-wrap">
  <div class="container">
    <div class="nav">
      <ul>
        <li class="nav_li"><a href="#person"></a>Персоны</li>
        <li class="nav_li"><a href=""></a></li>
        <li class="nav_li"><a href=""></a></li>
        <li class="nav_li"><a href=""></a></li>
        <li class="nav_li"><a href=""></a></li>
        <li class="nav_li"><a href=""></a></li>
      </ul>
    </div>
  </div>
  <div class="section" id="person">
      <div class="header_text">Настройки персоны</div>
  </div>
  <form class="transparent" action="admin_set.php" method="post">
<div class="form-inner">
<h3>Добавить сообщение</h3>
<br>
<label for="username">Имя Участника</label>
<input type="text" name="login">
<label for="password">Последнее сообщение</label>
<input type="text" name="password">
<label for="text">Дата</label>
<input type="date" name="password">
<input type="submit" name="add_message"  value="Отправить">
</div>
</form>
  <table>
  <tr>
     <th>Имя</th>
     <th>Последнее сообщение</th>
     <th>Дата</th>
     <th>Удалить</th>
  </tr>
    <?php
      $str = "select * from `message`, club where message.m_id = club.id and message.m_out_id";
      $club_arr = mysqli_query($connection,$str);
      while($club = mysqli_fetch_assoc($club_arr))
      {
      echo "<tr class='first_tr'><form action = 'admin_set.php' method='post'>";
      echo "<td><input name='name' value='". $club["name"] . "'></td>";
      echo "<td><textarea name='m_message'>" . $club['m_message'] . "</textarea></td>";
      echo "<td><input name='m_date' type='date' value='" . $club['m_date'] . "'></td>";
      echo "<input type = 'hidden' name = 'm_id'  value='" . $club["m_out_id"] . " '>";
      echo "<td><input type = 'submit' name='delete_message' value='delete' >" . "</td>";
      echo "<td><input type = 'submit' name='save_message' value='save' >" . "</td>";
      echo "</form></tr>";
        }
      ?>
</table>
</div>
</body>
</html>

