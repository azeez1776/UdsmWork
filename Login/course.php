<?php
include "../config.php";
session_start();


if (isset($_POST['Reg'])) {
    $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $courseCode = mysqli_real_escape_string($conn, $_POST['courseCode']);
    $courseDesc = mysqli_real_escape_string($conn, $_POST['courseDesc']);
    $courseDept = mysqli_real_escape_string($conn, $_POST['courseDept']);
    $courseSem = mysqli_real_escape_string($conn, $_POST['courseSem']);
    $courseYear = mysqli_real_escape_string($conn, $_POST['courseYear']);
    $courseInst = mysqli_real_escape_string($conn, $_POST['courseInst']);
    $courseGrade = mysqli_real_escape_string($conn, $_POST['courseGrade']);

    $query = "INSERT into courseInfo(courseName, courseCode, courseDesc, courseDept, courseSem, courseYear, courseInst, courseGrade) VALUES('$courseName', '$courseCode', '$courseDesc', '$courseDept', '$courseSem', '$courseYear', '$courseInst', '$courseGrade')";

    if (mysqli_query($conn, $query)) {

        echo "Course Sucessfully uploaded";
    } else {
        echo "Error " . mysqli_error($conn);
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['userName']);
    unset($_SESSION['password']);
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Course</title>
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
    <div class="pForm">
        <form method="POST" class="f_reg" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Course Registration</h2>
            <div>
                <label for="courseName">Course Name</label>
                <input type="text" class="onename" name="courseName">
            </div>
            <div>
                <label for="courseCode">Course Code</label>
                <input type="text" class="twoname" name="courseCode">
            </div>
            <div>
                <label for="courseDesc" class="threelab">Course Desc</label>
                <!-- <textarea name="courseDesc" class="threename"></textarea> -->
                <input type="text" name="courseDesc" class="threename">
            </div>
            <div>
                <label for="courseDept">Course Dept</label>
                <input type="text" class="fourname" name="courseDept">
            </div>
            <div>
                <label for="courseSem">Course Semester</label>
                <input type="text" class="fivename" name="courseSem">
            </div>
            <div>
                <label for="courseYear">Academic Year</label>
                <input type="text" class="sixname" name="courseYear">
            </div>
            <div>
                <label for="courseInst">Course Instructor</label>
                <input type="text" class="sevenname" name="courseInst">
            </div>
            <div>
                <label for="courseGrade">Grade</label>
                <input type="text" class="eightname" name="courseGrade">
            </div>
            <input type="submit" value="ADD" name="Reg" class="form_sub">
        </form>
    </div>



</body>

</html>