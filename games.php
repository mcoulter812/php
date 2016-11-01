<?php
include 'header.php';

?>
<body>
<h2>Games</h2>
<p>I'm a pc gamer. I also have an xbox. #PcBruh</p>
<h3>Favourite Games</h3>
		<table>
      <tr>
        <td>
        Name
        </td>
        <td>
        Age Rating
        </td>
        <td>
        Steam Search
        </td>
        <td>
        Amazon Search
        </td>
         </tr>
         <?php
        include 'connection.php';
        $sql="SELECT * FROM games";
        $result=$conn->query($sql);

        if ($result->num_rows>0) {
            while($row=$result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["Name"]."</td>
                <td>".$row["Age"]."</td>
                <td>
                    <a href='http://store.steampowered.com/search/?term=".$row["Name"]."'>Go</a>
                </td>
                <td>
                    <a href='https://www.amazon.co.uk/s/?url=search-alias%3Daps&field-keywords=".$row["Name"]."'>Go</a>
                </td>
                </tr>";
            }
        }
         ?>
           
        </table>
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

