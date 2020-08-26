<?php

require "controllers/StudentController.php";
require "shared/helper.php";

$student = new StudentController();
$result = $student->getAllStudents();

echo "<html>
<head>
    <title></title>
    <link rel='stylesheet' type='text/css' href='../style/studentDistribution.css'>
</head>
<body>
    <div class='container'>
        <h1>Student Distribution</h1>";
foreach ($result as $singleStudent) {
    echo "<p>Student ${singleStudent['id']} ${singleStudent['first_name']} ${singleStudent['last_name']}</p>";
}
echo "</div>
</body>
</html>";

