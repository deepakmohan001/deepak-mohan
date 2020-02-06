<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="employee.php">Employee Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete.php">Delete</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit.php">Edit</a>
            </li>
          </ul>
    </nav>
    <form method="GET">
     <table class="table">
        <tr>
            <td>
                Employee code:
            </td>
            <td>
                <input type="number"class="form-control"name="getEmployeeCode">
            </td>
        </tr>
        <tr>
            <td>
                Name:
            </td>
            <td>
                <input type="text"class="form-control"name="getName">
            </td>
        </tr>
        <tr>
            <td>
                Dob:
            </td>
            <td>
                <input type="date"class="form-control"name="getDob">
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="email"class="form-control"name="getEmail">
            </td>
        </tr>
        <tr>
            <td>
                district
            </td>
            <td>
                <select name="getDistrict">
                    <option value="Trivandram">Trivandram</option>
                    <option value="kollam">Kollam</option>
                    <option value="pathanamthitta">Pathanamthitta</option>
                    <option value="Alappuzha">Alappuzha</option>
                    <option value="kottayam">Kottayam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Eranakulam">Ernakulm</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Malappuram">Malappuram</option>
                    <option value="Kozhikkode">Kozhikoodu</option>
                    <option value="Wayanad">Wayanad</option> 
                    <option value="Kazaragode">Kazharghoad</option> 
                    </select>
            </td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td>
                <input type="number"class="form-control"name="getAge">
            </td>
        </tr>
        <tr>
            <td>
                Username
            </td>
            <td>
                <input type="text"class="form-control"name="getUserName">
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password"class="form-control"name="getPassword">
            </td>
        </tr>
        <tr>
            <td>
                ConformPassword
            </td>
            <td>
                <input type="password"class="form-control"name="getPass">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" name="submit" class="btn btn-danger">
                    Register
                </button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
  $Employee=$_GET["getEmployeeCode"];
  $Name=$_GET["getName"];
  $Dob=$_GET["getDob"];
  $Email=$_GET["getEmail"];
  $District=$_GET["getDistrict"];
  $Age=$_GET["getAge"];
  $User=$_GET["getUserName"];
  $Password=$_GET["getPassword"];
  $Conform=$_GET["getPass"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="mydb1";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="INSERT INTO `employee`( `EmployeeCode`, `Name`, `Dob`, `Email`, `District`, `Age`, `Username`, `Password`, `Conformpassword`) 
  VALUES ($Employee,'$Name','$Dob','$Email','$District',$Age,'$User','$Password','$Conform')";
  $result=$connection->query($Sql);
  if($result===TRUE)
  {
      echo "successfully inserted";
  }
  else
  {
      echo $connection->error;
  }
 
}
?>
