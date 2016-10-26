<?php
include 'header.php';
?>

<body>
    <div class="content">
        <h2>Home</h2>
        <p>Welcome to my website. My name is Matthew Coulter. Please feel free to look around</p>
        <?php
        echo "Hello World";
        $name="Matthew";
        $age="15";
        echo "<br>Hello, My name is $name, I am $age years old";
        ?>
        <form>
            <input placeholder="How are you feeling?" type="textbox" name="mood"><button name="submit" type="submit"></button>
            <?php
            if(isset($_GET["mood"])){
                echo "I am feeling ".$_GET["mood"];
            }

            ?>
        </form>
        <img src="assets/images/bomb.png">
    </div>
</body>

</html>
<?php
include 'footer.php';
?>