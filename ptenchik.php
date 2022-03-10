<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
 <form method="post">
 <div>
 	<input type="text" name="name"><br>
 	<textarea name="chat" rows="6"></textarea><br>
 	<input type="submit" name="submit" value="Отправить"><br><br>
 </div>
 </form>
 <?php 
     
      if (isset($_POST['submit'])) {
      echo "<h1>На самом деле, мне всё равно, что ты напишешь. Я люблю Ксюшу!!!</h1>";
      ob_flush();
        flush();
        usleep(5000000);
         echo "<h1>Да-да, Ксюшу а не тебя;)</h1>";
        ob_flush();
        flush();
        usleep(5000000);
        echo "<h1>Я не шучу!</h1>";
        ob_flush();
        flush();
        usleep(5000000);
        echo "<h1>Правда люблю!</hi>)";
        ob_flush();
        flush();
        usleep(5000000);
        echo "<h1>Ладно, пора спать!</h1>";
        ob_flush();
        flush();
        usleep(5000000);
        echo "<h1>Люблю, целую, лови котика на последок!</h1>";
        ob_flush();
        flush();
        usleep(3000000);

        ?>
        <p><img src="https://i.pinimg.com/736x/1c/ae/23/1cae2362db236c6da7529b8c3aa5c680.jpg"></p>
        <?php
      }
  
  ?>
</body>
</html>