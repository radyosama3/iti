<?php 
$fname = $_POST['first_name'];
$lname=$_POST['last_name'];
$address=$_POST['address'];
$skils= $_POST['skils'];
$dep= $_POST['department'];

foreach ($_POST as $key => $value) {
    if($_POST["$key"] =="" ){
    header("Location: index.php");
    die();
}}

if($_POST["valid"]!=123){
    header("Location: index.php");
    die();
}

if($_POST["gender"]=="male"){
    $title="Mr";
}else{
    $title="Mrs";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div>
        <p>thanks <?php echo "$title .$fname.$lname"?>
        <br>
        please review your information 
        <br>
        Name:<?php echo"$fname.$lname";?>
        <br>
        Address:<?php echo " $address"?>
        <br>
        your skils :<?php 
        foreach ($skils as $key => $value) {
        echo"$value";
        }
        ?>
        <br>
        departments :<?php  echo"$dep"?>
        </p>
    </div>
</body>
</html>