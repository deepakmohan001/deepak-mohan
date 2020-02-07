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
    <h2>
        Edit
    </h2>
    <form method="GET">
    <table class="table">
        <tr>
            <td>
            Employee code:
            </td>
            <td>
                <input type="text" class="form-control"name="getEmployeeCode">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" class="btn btn-danger"name="submit">
                    Edit
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
    $EmployeCode=$_GET["getEmployeeCode"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb1";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="SELECT `Name`, `DOB`, `Email`, `District`, `Age`, `Username`, `password`, `Conformpassword` FROM `employee` WHERE `Employeecode`=$EmployeCode";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $Name=$row["Name"];
            $Dob=$row["DOB"];
            $Email=$row["Email"];
            $District=$row["District"];
            $Age=$row["Age"];
            $User=$row["Username"];
            $Password=$row["password"];
            $Conform=$row["Conformpassword"];
    
            echo "<form method='POST'><table class='table'> 
            <tr> <td> name</td> <td> <input type='text'name='updatename' value='$Name'/> </td> </tr>
            <tr> <td> Dob </td> <td><input type='text'name='updatedob' value='$Dob' </td> </tr>
            <tr> <td> email </td> <td> <input type='text'name='updateemail' value='$Email'</td> </tr>
            <tr><td>district</td><td><input type='text'name='updatedistrict'value='$District'</td></tr>
            <tr><td>age</td><td><input type='text'name='updateage'value='$Age'</td></tr>
            <tr><td>user</td><td><input type='text'name='updateuser'value='$User'</td></tr>
            <tr><td>password</td><td><input type='text'name='updatepassword'value='$Password'</td></tr>
            <tr><td>conform</td><td><input type='text'name='updateconform'value='$Conform'</td></tr>
            <tr><td><button type='submit' value='$EmployeCode' name='updatebutton' class='btn btn-success'/>
            update</button> </td></tr><br> </form>";    
        }
    }
    else{
        echo "invalid";

    }

}
if(isset($_POST["updatebutton"]))
{
    $upname=$_POST["updatename"];
    $updob=$_POST["updatedob"];
    $upemail=$_POST["updateemail"];
    $updistrict=$_POST["updatedistrict"];
    $upage=$_POST["updateage"];
    $user=$_POST['updateuser'];
    $password=$_POST['updatepassword'];
    $conform=$_POST['updateconform'];
    $empcode=$_POST['updatebutton'];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="mydb1";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="UPDATE `employee` SET `Name`='$upname',`DOB`= $updob,`Email`='$upemail',`District`='$updistrict',`Age`=$upage,`Username`='$user',
    `password`='$password',`Conformpassword`='$conform' WHERE `Employeecode`=$empcode";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo "successfuly updated";
    }
    else{
        echo "error";
    }

}
?>