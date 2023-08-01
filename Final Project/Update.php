<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>

<!-- navgation menu start  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-size:30px;"><strong>Course Management System</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="ADMIN_DASHBORD.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insert.php">Insert Course</a>
          <a class="dropdown-item" href="update.php">Update Course</a>
          <a class="dropdown-item" href="delect.php">Delete Course</a>
          <a class="dropdown-item" href="search.php">Search Course</a>
          
        </div>
        <li class="nav-item">
        <a class="nav-link" href="Faculty.php">Faculty Details</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="student.php">Student Details</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="index.php"class="btn btn-success my-2 my-sm-0" type="submit">Logout</a>
    </form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<body>
    <div class="container">
        <h1>COURSE UPDATE DASHBOARD</h1>
       
    </div>

    <div class="center">
        <form method="post">
            <div class="txt_field">
                <input type="number" name="COURSE_ID" required>
                <label>COURSE ID</label>
            </div>

            <div class="txt_field">
                <input type="text" name="COURSE_NAME" required>
                <label>COURSE NAME</label>
            </div>

            <div class="txt_field">
                <input type="text" name="COURSE_REQUIREMENT" required>
                <label>COURSE REQUIREMENT</label>
            </div>

            <input type="submit" value="UPDATE COURSE" name="submit">
        </form>
    </div>

    <div id="mainHolder">
        <?php
            $conn = oci_connect("scott", "tiger", "//localhost:1521/XE");
            if (!$conn) {
                echo 'Failed to connect to Oracle.' . "<br>";
            }

            if (isset($_POST['submit'])) {
                $courseID = $_POST['COURSE_ID'];
                $courseName = $_POST['COURSE_NAME'];
                $courseRequirement = $_POST['COURSE_REQUIREMENT'];

                // Prepare the UPDATE statement
                $stid = oci_parse($conn, "UPDATE COURSES SET COURSE_NAME = :courseName, COURSE_REQUIREMENT = :courseRequirement WHERE COURSE_ID = :courseID");

                // Bind the parameters
                oci_bind_by_name($stid, ":courseName", $courseName);
                oci_bind_by_name($stid, ":courseRequirement", $courseRequirement);
                oci_bind_by_name($stid, ":courseID", $courseID);

                // Execute the statement
                $result = oci_execute($stid);

                if ($result) {
                    echo "Course updated successfully.";
                } else {
                    echo "Failed to update course.";
                }
            }

            // Retrieve data from the database
            $stid = oci_parse($conn, "SELECT * FROM COURSES");
            oci_execute($stid);

            echo "<table>
                <tr>
                    <th>COURSE_ID</th>
                    <th>COURSE_NAME</th>
                    <th>COURSE_REQUIREMENT</th>
                </tr>";

            while (($row = oci_fetch_array($stid, OCI_ASSOC)) !== false) {
                echo "<tr>";
                echo "<td>" . $row['COURSE_ID'] . "</td>";
                echo "<td>" . $row['COURSE_NAME'] . "</td>";
                echo "<td>" . $row['COURSE_REQUIREMENT'] . "</td>";
                echo "</tr>";
            }

            echo "</table>\n";

            oci_close($conn);
        ?>
    </div>

   
</body>
</html>
