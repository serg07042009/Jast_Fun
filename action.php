<?php 
$a ="img src ='C:\xampp\htdocs\v1\Ксюша\1.png'";
	if (isset($_POST['submit'])) {
		echo "<h1>Мне всё равно, что ты напишешь я люблю Ксюшу</h1>";
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
        echo "<h1>Ладно пора спать</h1>";
        ob_flush();
        flush();
        usleep(5000000);
        echo "<h1>Люблю, целую, лови котика на последок!</h1>";
        ob_flush();
        flush();
        usleep(5000000);
        echo $a;
		}

?>