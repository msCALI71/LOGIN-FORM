<?php
$file = "students.txt";
$message = "";

if (isset($_POST['clear'])) {
    file_put_contents($file, ""); 
    $message = "All student records cleared!";
}

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $id     = $_POST['student_id'];
    $course = $_POST['course'];
    $year   = $_POST['year'];

    $data = "Name: $name | ID: $id | Course: $course | Year: $year\n";
    file_put_contents($file, $data, FILE_APPEND);
    $message = "Student Registered Successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container">
    <div class="form-wrap">
      <h1>Student Registration</h1>
      <p>Fill in the details below</p>

      <?php if (!empty($message)) echo "<p style='color:green; text-align:center;'>$message</p>"; ?>

      <form method="post">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" required>
        </div>

        <div class="form-group">
          <label>Student ID</label>
          <input type="text" name="student_id" required>
        </div>

        <div class="form-group">
          <label>Course</label>
          <input type="text" name="course" required>
        </div>

        <div class="form-group">
          <label>Year Level</label>
          <select name="year" required>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
          </select>
        </div>

        <button type="submit" name="submit">Register</button>
      </form>

      <form method="post" style="margin-top:10px;">
        <button type="submit" name="clear">Clear File</button>
      </form>

    </div>
  </div>
</body>
</html>