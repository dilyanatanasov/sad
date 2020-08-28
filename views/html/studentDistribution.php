<?php

require "controllers/StudentController.php";
require "shared/helper.php";

$student = new StudentController();
$result = $student->getAllStudents();
?>

<html>
<head>
    <title></title>
    <link rel='stylesheet' type='text/css' href='../style/studentDistribution.css'>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8d316c453c.js" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class='container'>
        <h1 class="mt-4 mb-4">Student Assignment Distribution System</h1>
        <div class="form-group">
            <label for="topicList">Add Topics</label>
            <i class="fas fa-question float-right" data-toggle="tooltip" data-placement="top" title="Pass coma separated topics list to be uploaded"></i>
            <textarea class="form-control" id="topicList" rows="3"></textarea>
        </div>
        <button class="btn btn-primary mb-4">Submit</button>
        <div class="form-group">
            <label for="studentsList">Add Students</label>
            <i class="fas fa-question float-right" data-toggle="tooltip" data-placement="top" title="Pass a coma separated list of students or a single one to be uploaded"></i>
            <textarea class="form-control" id="studentsList" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
        <table class="table mt-2">
            <thead class="thead-light">
            <tr>
                <th scope="col">Group</th>
                <th scope="col">First</th>
                <th scope="col">Second</th>
                <th scope="col">Third</th>
                <th scope="col">Topic</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>";

