<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: "Arial";
        }
        input {
            font-size: 1,5em;
            height: 50px;
            width: 200px;
        }
        </style>
</head>
<body>
    <h3>Welcome to the Student Management System. Input your details here to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name</label><input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name</label><input type="text" name="lastName"></p>
        <p><label for="gender">Gender</label><input type="text" name="gender"></p>
        <p><label for="yearLevel">Year Level</label><input type="text" name="yearLevel"></p>
        <p><label for="dreamjob">Dream Job</label><input type="text" name="dreamjob"></p>
        <p><label for="salary">Salary</label><input type="text" name="salary"></p>
        <p><label for="course">Course</label><input type="text" name="course">
            <input type="submit" name="insertNewStudentBtn">
    </p>
    </form>
    <table style="width: 50%; margin-top: 50px">
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Year Level</th>
            <th>Dream Job</th>
            <th>Salary</th>
            <th>Course</th>
        </tr>
        <?php $seeAllStudentRecords = seeAllStudentRecords($pdo); ?>
        <?php foreach ($seeAllStudentRecords as $row) ?>
        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['year_level']; ?></td>
            <td><?php echo $row['dreamjob']; ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['course']; ?></td>
        </tr>
    



    </table>
</body>
</html>



<!-- CREATE TABLE student_records(
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(50),
    year_level VARCHAR(50),
    section VARCHAR(50),
    adviser VARCHAR(50),
    religion VARCHAR(50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->