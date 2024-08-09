<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 
<h2>PHP Form</h2>
<form action="" method="POST">  
  Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?> ">
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?> ">   
  <br><br>
  Website: <input type="text" name="website" value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website'], ENT_QUOTES) : ''; ?>  ">   
  <br><br>
  Classes: <textarea name="classes" rows="5" cols="40">
  <?php echo isset($_POST['classes']) ? htmlspecialchars($_POST['classes'], ENT_QUOTES) : ''; ?>    
  </textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="other") echo "checked";?> value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    $classes=$_POST['classes'];
    $gender=$_POST['gender'];
    echo "<h2>Your given Values are as:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $classes;
    echo "<br>";
    echo $gender;
}
    ?>
