<?php
$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);
if(!$con)
{
    die("connection to this failed due to".mysqli_connect_error());
}
else
{
    // echo"sucees dbms";
}
    $name=$_POST['name'];
    $topic=$_POST['topic'];
    $content=$_POST['content'];

    $sql="INSERT INTO `project1`. `upload` (`name`, `topic`, `content`) VALUES ('$name', '$topic', '$content');";
    // echo $sql;

    if($con->query($sql)==true){
        // echo"success insereted";
        $insert=true;
    }
$con->close();}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ibolg</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="top">
        <div class="head">
            iBloG
        </div>
        <div class="nav">
            <ul class="center">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="upload.php">UPLOAD</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <?php
        if($insert==true){
        echo"<p style='font-size: 2vw; color: black; text-align: center;'>your post will be upadate after verification</p>";
        }
        ?>
            <form action="upload.php" method="POST">
                <div class="form">
                    <input type="text" name="name" placeholder="your name">
                </div>
                <div class="form">
                    <input type="text" name="topic" placeholder="topic name">
                </div>
                <div class="form">
                    <textarea name="content" cols="30" rows="10" placeholder="content"></textarea>
                </div>
                <div class="form">
                    <button type="submit">upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        copyright@pankaj
    </div>

</body>

</html>