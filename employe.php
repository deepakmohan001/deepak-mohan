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
              <a class="nav-link" href="employee.html">Employee Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.html">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete.html">Delete</a>
            </li>
          </ul>
    </nav>

    <table class="table">
        <tr>
            <td>
                Employee code:
            </td>
            <td>
                <input type="number"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                Name:
            </td>
            <td>
                <input type="text"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                Dob:
            </td>
            <td>
                <input type="date"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <input type="email"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                district
            </td>
            <td>
                <select>
                    <option value="Tvm">Trivndram</option>
                    <option value="klm">kollam</option>
                    <option value="ptmta">pathanamthitta</option>
                    <option value="Alappy">Alappuzha</option>
                    <option value="kotym">kottayam</option>
                    <option value="idukki">idukki</option>
                    <option value="ekm">ernakulam</option>
                    <option value="tsr">thrissur</option>
                    <option value="palkad">palakkad</option>
                    <option value="malprm">malappuram</option>
                    <option value="clkt">calicut</option>
                    <option value="wynad">wayanand</option>
                    <option value="kannur">kannur</option>
                    <option value="kasargod">kasargod</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td>
                <input type="number"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                User name
            </td>
            <td>
                <input type="text"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password"class="form-control">
            </td>
        </tr>
        <tr>
            <td>
                Conform Password
            </td>
            <td>
                <input type="password"class="form-control">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button class="btn btn-danger">
                    Register
                </button>
            </td>
        </tr>
    </table>
</body>
</html>