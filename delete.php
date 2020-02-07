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
    <h4>
        Do you wish to delete!!!!!
    </h4>
    <form method="GET">
    <table class="table">
        <tr>
            <td>
                Employee code:
            </td>
            <td>
                <input type="number"class="form-control"name="getEmpCode">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" name="submit" class="btn btn-warning">
                    Delete
                </button>
            </td>
        </tr>

    </table>
    </form>
</body>
</html>
<?php
if(isset($_GET["getsubmit"]))
{
    $empcode=$_GET["getEmpCode"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb1";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="DELETE FROM `employee` WHERE `Employeecode`=$empcode";
    $result=$connection->query($sql);
      if($result===TRUE)
      {
          echo"details deleted";
      }
      else
      {
          echo $connection->error;
      }
}
?>