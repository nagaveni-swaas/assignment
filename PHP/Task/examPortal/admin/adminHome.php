<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta question="viewport" content="wnoth=device-wnoth, initial-scale=1.0">
    <title>BrainBench</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> BrainBench </h1>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">no</th>
                            <th scope="col">question</th>
                            <th scope="col">option1</th>
                            <th scope="col">option2</th>
                            <th scope="col">option3</th>
                            <th scope="col">option4</th>
                            <th scope="col">correct_option</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                              $localhost="127.0.0.1:3390";
                              $dbusername="root";
                              $dbpassword="";
                              $dbname="examportal";
                              $connection=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

                                $sql = "select * from questions";
                                $result = mysqli_query($connection, $sql);
                                
                                $id= 1;
                                
                                while($row = mysqli_fetch_array($result))                                
                                {
                                    $qno = $id;
                                    $question = $row['question'];
                                    $option1 = $row['option1'];
                                    $option2 = $row['option2'];
                                    $option3 = $row['option3'];
                                    $option4 = $row['option4'];
                                    $correct_option = $row['correct_option'];
                                    
                                ?>

                                   <tr>
                                        <td><?php echo $qno ?></td>
                                        <td><?php echo $question?></td>
                                        <td><?php echo $option1 ?></td>
                                        <td><?php echo $option2 ?></td>
                                        <td><?php echo $option3 ?></td>
                                        <td><?php echo $option4 ?></td>
                                        <td><?php echo $correct_option ?></td>
                                        <td>
                                        <button type="submit" name="submit" class="btn btn-success"> <a href='edit.php?edit=<?php echo $qno ?>' class="text-light"> Edit </a> </button> &nbsp;
                                        <button class="btn btn-danger"><a href='delete.php?del=<?php echo $qno ?>' class="text-light"> Delete </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                        <button type="submit" name="submit" class="btn btn-success"> <a href='add.php?' class="text-light"> Add </a> </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>