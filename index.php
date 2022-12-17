<?php
    include './incs/dbconn.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        ECHO $_SERVER['REQUEST_METHOD'] . "<br>";
        if(isset($_POST['sendData'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            
            $insertQury = "INSERT INTO users VALUE(null, '$firstName', '$lastName', 'email')";
            // $insertRun = mysqli_query($conn, $insertQury);
            // if($insertRun){
                //     echo "Inserted.";
                // }
                if(mysqli_query($conn, $insertQury)){
                    // echo "done";
                    // $_SERVER['REQUEST_METHOD'] = '';
                    // ECHO "test + " . $_SERVER['REQUEST_METHOD'] . "<br>";
                    header('Location: index.php');
            }else{
                echo mysqli_error($conn);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="F-Name">
        <input type="text" name="lastName" id="lastName" placeholder="L-Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="sendData" value="Send">
    </form>

<script src="./js/script.js"></script>
</body>
</html>