<?php
$conn = mysqli_connect("localhost", "root", "", "pranesh");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {

    $name   = $_POST['student_name'];
    $room   = $_POST['room_number'];
    $mobile = $_POST['mobile_number'];
    $course = $_POST['course'];
    $year   = $_POST['year'];
    $block  = $_POST['block'];
    $food   = $_POST['food'];
    $parent = $_POST['parent_contact'];

    $sql = "INSERT INTO student
    (student_name, room_number, mobile_number, course, year_of_study, hostel_block, food_type, parent_contact)
    VALUES
    ('$name','$room','$mobile','$course','$year','$block','$food','$parent')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3 style='color:green;'>Registration Successful</h3>";
    } else {
        echo "<h3 style='color:red;'>Error: " . mysqli_error($conn) . "</h3>";
    }
}

mysqli_close($conn);
?>
