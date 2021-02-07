<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<center><h1>Exmaination Online System -Cairo Univeristy </h1></center>
    <form method="post">
    Student Name : <br/>
    <input type="text" name="txtname" required class="form-control" placeholder="Student name"/>
    <br/>
    <input type="submit" name="btnstart" class="btn btn-primary" value="Start Exam"/>
        <?php
            if(isset($_POST["btnstart"]))
            {
                $_SESSION["sname"]=$_POST["txtname"];
                header("Location:ExamOnlineRandom.php");   
            }


        ?>
    </form>
    </div>
</body>
</html>