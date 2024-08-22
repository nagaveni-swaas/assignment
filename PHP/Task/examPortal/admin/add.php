<?php
    //$connection = mysqli_connect("localhost","root","");
    //$db = mysqli_select_db($connection,"dbcrud");
    $localhost="127.0.0.1:3390";
    $dbusername="root";
    $dbpassword="";
    $dbname="examportal";
    $connection=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    if(isset($_POST['submit']))
        {
          $no = $_POST['no'];
          $question = $_POST['question'];
          $option1 = $_POST['option1'];
          $option2 = $_POST['option2'];
          $option3 = $_POST['option3'];
          $option4 = $_POST['option4'];


           $sql = "INSERT INTO questions(no,question,option1,option2,option3,option4)VALUES('$no','$question','$option1','$option2','$option3','$option4')";

           if(mysqli_query($connection,$sql))
           {
                echo '<script> location.replace("adminHome.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
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
                        <h1>BrainBench </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" id="form" method="post">
                        <div class="form-group">
                            <label>no</label>
                            <input type="text" name="no" class="form-control"  placeholder="Enter Question Number" id="no">
                            <small class="form-text text-danger" id="name-error"></small> 
                        </div>
                        <div class="form-group">
                            <label>question</label>
                            <input type="text" name="question" class="form-control"  placeholder="Enter question" id="question"> 
                            <small class="form-text text-danger" id="email-error"></small>
                        </div>
                        <div class="form-group">
                            <label>option1</label>
                            <input type="text" name="option1" class="form-control"  placeholder="option1" id="option1"> 
                        </div>
                        <div class="form-group">
                            <label>option2</label>
                            <input type="text" name ="option2" class="form-control"  placeholder="option2" id="option2"> 
                            <small class="form-text text-danger" id="mobile-error"></small>
                        </div>
                        <div class="form-group">
                            <label>option3</label>
                            <input type="text" name="option3" class="form-control"  placeholder="option3" id="option3"> 
                            <small class="form-text text-danger" id="address-error"></small>
                        </div>
                        <div class="form-group">
                            <label>option4</label>
                            <input type="text" name="option4" class="form-control"  placeholder="option4" id="option4">
                            <small class="form-text text-danger" id="password-error"></small> 
                        </div>
                        <br/>
                        <div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Add">
                        </div>
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
</body>
</html>