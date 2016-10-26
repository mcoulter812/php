<?php
include 'header.php';
?>
<body>
<h2>Games</h2>
<p>I'm a pc gamer. I also have an xbox. #PcBruh</p>
<h3>Favourite Games</h3>
		<ol>
			<li>Halo 3</li>
			<li>Skyrim</li>
			<li>Destiny</li>
	 	</ol>
        <form>
        <p>Enter the 1st number</p>
        <input type="textbox" name="first">
        <p>Enter the 2nd number</p>
        <input type="textbox" name="second">
        <button name="submit" type="submit">CALCULATE!</button>
        </form>
        <?php
        $first;
        $second;
        $result;  
            if (isset($_GET["first"])) {
                $first=$_GET["first"];
            }else{
                echo "You did not enter anything in the 1st box";
            } 
            if (isset($_GET["second"])) {
                $second=$_GET["second"];
            }else{
                echo "You did not enter anything in the second box";
            }
            $result=$first+$second;
            echo $result;
        ?>
        <form><button value="time" name="time">Get your time</button></form>
        <?php 
        echo date ("G:i:s.u");
         ?>
         <form><button value="textbox" name="textbox"></button></form>
        </body>
        <?php
        include 'footer.php';
        ?>

