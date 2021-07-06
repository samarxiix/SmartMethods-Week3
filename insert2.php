<?PHP


//1 set up 
$host = "localhost";
$user = "root";
$pwd = "";
$db = "smartmethods";


//2 connect
$con = mysqli_connect($host, $user, $pwd, $db);



if(isset($_POST["forward"])){

    $direction1=$_POST["forward"];
    $query="INSERT INTO  movement (direction)
    VALUES ('$direction1')";
    mysqli_query($con ,$query);

} else if(isset($_POST["backward"])){

    $direction2=$_POST["backward"];    
    $query="INSERT INTO  movement (direction)
    VALUES ('$direction2')";
    mysqli_query($con ,$query);

} else if(isset($_POST["stop"])){

    $direction3=$_POST["stop"];
    $query="INSERT INTO  movement (direction)
    VALUES ('$direction3')";
    mysqli_query($con ,$query);

} else if(isset($_POST["left"])){

    $direction4=$_POST["left"];
    $query="INSERT INTO  movement (direction)
    VALUES ('$direction4')";
    mysqli_query($con ,$query);

} else if(isset($_POST["right"])){

    $direction5=$_POST["right"];
    $query="INSERT INTO  movement (direction)
    VALUES ('$direction5')";
    mysqli_query($con ,$query);

}






?>