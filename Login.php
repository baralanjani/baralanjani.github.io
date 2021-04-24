<!DOCTYPE html>
<!-- TestHTML5FormControls.html -->
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/default.css">
<script src="scripts/modernizr_inputtypes.js"></script>
<script>
function OutputTestResult(inputType)
{
if (Modernizr.inputtypes[inputType])
document.write("The input control shown below is available " +
"in this browser.");
else
document.write("Your browser does not support this control."
+ "<br>The control defaults to a simple text box.");
}
</script>
<title>login</title>
</head>
<body>
<script>

<hr>

<hr>
<h4>Trying <code>input</code> element of type <code>date</code>:</h4>
<script>OutputTestResult("date");</script>


<div>
  <form action="login.php" method="post">  Click to enter your birthday: 
  <input type="date" name="dob" id="dob">
Enter You First Name: 
<input type="text" name="fname">
    Enter You Last Name:
     <input type="text" name="lname">

    Enter You Email: <input type="text" name="email">
       <input type="submit" name="submit" value="Submit">
      </form>
       </div>
       <?php


// Create connection
$conn = new mysqli('baralanjani.github.io', 'root', '','cla');
$dob = $_POST['dob'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

$sql= "INSERT INTO `signup`(`id`, `dob`, `fname`, `lname`, `email`) VALUES ('0','$dob','$fname','$lname','$email')";
$rs=mysqli_query($conn,$sql); 
      
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
      </body>