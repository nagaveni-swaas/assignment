<?php
session_start();
echo $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainBench</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1><center>BrainBench<center></h1>
                    </div>
                    <div class="card-body">
                    <form action="question1.php" id="form" method="post">
                        <?php
                        //session_start();
                        $localhost="127.0.0.1:3390";
                        $dbusername="root";
                        $dbpassword="";
                        $dbname="examPortal";
                        $connection=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
                        $sql="SELECT * FROM questions WHERE no='1'";
                        $result=mysqli_query($connection,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            foreach($result as $question1){
                                $questionNO=$question1['no'];
                                ?>
                                <?= $question1['question']; ?><br/><br/>
                                <input type="checkbox" name="question1[]" value="<?= $question1['option1']; ?>" /> <?= $question1['option1']; ?><br/><br/>
                                <input type="checkbox" name="question1[]" value="<?= $question1['option2']; ?>" /> <?= $question1['option2']; ?><br/><br/>
                                <input type="checkbox" name="question1[]" value="<?= $question1['option3']; ?>" /> <?= $question1['option3']; ?><br/><br/>
                                <input type="checkbox" name="question1[]" value="<?= $question1['option4']; ?>" /> <?= $question1['option4']; ?><br/><br/>
                                <?php
                            }
                        }
                        else
                        {
                            echo "no records found";
                        }
                    ?>
                    <div>
                        <input type="submit" class="btn btn-primary" name="Next" value="Next">
                    </div>
                    </form>
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
<?php
if(isset($_POST['Next']))
{
    if(empty($_POST['question1'])){
        echo "you have to select atleast one.";
    }else{
        $question1 = $_POST['question1'];
        $userEmail=$_SESSION["email"];
        //echo $_SESSION["email"];
        foreach($question1 as $answer1)
        {
            //echo $answer1."<br>";
            $query = "INSERT INTO selectedanswers (no,userEmail,answer) VALUES ('$questionNO','$userEmail','$answer1')";
            $query_run = mysqli_query($connection, $query);
        }

        if($query_run)
        {
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: question2.php");
        }
        else
        {
            $_SESSION['status'] = "Not Inserted";
            header("Location:question2.php");
        //header("Location: index.php");
        }
        //header("Location:question2.php"); 
    }
}
?>
</body>
</html>