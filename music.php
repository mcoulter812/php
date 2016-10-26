<?php
include 'header.php';
?>
<body>
<h2>Music</h2>
<p>I live on Spotify</p>
<img src="assets/images/deadmau5.png
">
<?php 
$names=[
"Matthew" =>"Wallace High School",
"Paul" =>"QUB",
"James"=>"GCD",
"John"=>"Coca Cola"
];
foreach ($names as $name){
    print($name);
}
print($names["James"]);
 ?>
</body>
<?php
include 'footer.php';
?>