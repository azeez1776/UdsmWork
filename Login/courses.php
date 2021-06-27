<?php
include '../config.php';

$result = mysqli_query($conn, "SELECT * FROM courseInfo");
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body class="home">
    <nav class="nav">
        <div class="nav_elem">
            <a href="../index.php">HOME</a>
            <a href="../AboutMe/index.php">ABOUT ME</a>
            <a href="../abdi.pdf">CV</a>
            <a href="../AboutMe/index.php">CONTACTS</a>
            <a href="./courses.php">COURSES</a>
            <a href="course.php?logout=<?php echo true ?>">LOG OUT</a>
        </div>
    </nav>
    <h1 style="text-align:center; position:absolute; top:2em; left:18em; margin:0;">Courses</h1>
    <?php foreach ($rows as $row) : ?>
        <div class="mcard">
            <h3 style="text-align:center; "><?php echo $row['courseName'] ?></h3>
            <p>Course Code: <?php echo $row['courseCode'] ?></p>
            <p>Course Descrption: <?php echo $row['courseDesc'] ?></p>
            <p>Course Department: <?php echo $row['courseDept'] ?></p>
            <p>Course Semester: <?php echo $row['courseSem'] ?></p>
            <p>Course Year: <?php echo $row['courseYear'] ?></p>
            <p>Course Instructor: <?php echo $row['courseInst'] ?></p>
            <p>Course Grade: <?php echo $row['courseGrade'] ?></p>
        </div>
    <?php endforeach ?>
    <div>
        <button class="add"><a href="./course.php">ADD COURSE</a></button>
    </div>
</body>

</html>