<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Record</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        <div class="header1">
            <h1>Stephen Kanja Primary And Junior School</h1>
            <h3>Aim Higher</h3>
        </div>
    </div>
    <div class="home">
        <div class="dashboard">
            <h2>Dashboard</h2>
            <a href="index.php">Home</a>
            <a href="Students.php">Students</a>
            <a href="Admin.php">Teachers Panel</a>
            <a href="HOIAccess.php">HOI Panel</a>
            <a href="ViewResults.php">Results</a>
        </div>
        <div class="results">
            <form method="GET" action="">
                <label>Select Grade</label>
                <select name="grade" required>
                    <option value="ca">--Choose Grade--</option>
                    <option value="1">Grade 1</option>
                    <option value="2">Grade 2</option>
                    <option value="3">Grade 3</option>
                    <option value="4">Grade 4</option>
                    <option value="5">Grade 5</option>
                    <option value="6">Grade 6</option>
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                </select>

                <label>Select Exam Type</label>
                <select name="exam" required>
                    <option value="">--Choose Exam type--</option>
                    <option value="opener">Opener</option>
                    <option value="midterm">Midterm</option>
                    <option value="endterm">Endterm</option>
                    <option value="other">Other</option>
                </select>

                <label>Select Term</label>
                <select name="Term" required>
                    <option value="Term 1">Term 1</option>
                    <option value="Term 2">Term 2</option>
                    <option value="Term 3">Term 3</option>
                </select>

                <label>Select Year</label>
                <select name="year" required>
                    <option value="">--Select year--</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>

                <label>Select Subject</label>
                <select name="subject" required>
                    <option value="">--Choose subject--</option>
                    <option value="math">Math</option>
                    <option value="eng">English</option>
                    <option value="kisw">Science</option>
                    <option value="scie">Kiswahili</option>
                    <option value="sst">Social Studies</option>
                    <option value="ca">Creative</option>
                    <option value="agri">Agriculture</option>
                    <option value="rel">Religion</option>
                    <option value="pretec">Pretechnical Studies</option>

                </select>

                <button class="record">Check Record</button>
            </form>
            <form method="GET" action="">
                <input type="text" name="name" class="learner" placeholder="Search by Assesment No">
                <button>Search Learner</button>
            </form>
            <?php
                include 'conn.php';
                $name=$_GET['name']??'';

                if($name){
                    $name=mysqli_real_escape_string($conn,trim($name));
                    $sql="SELECT * FROM exam WHERE  Assesment='$name'";
                    $result=mysqli_query($conn,$sql);
                    

                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo "
                              <table>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Maths</th>
                                    <th>Eng</th>
                                    <th>Kisw</th>
                                    <th>Scie</th>
                                    <th>S/ST</th>
                                    <th>AGRI</th>
                                    <th>C/A</th>
                                </tr>
                                <tr>
                                <td>{$row['firstName']}</td>
                                <td>{$row['lastName']}</td>
                                <td>{$row['math']}</td>
                                <td>{$row['eng']}</td>
                                <td>{$row['kisw']}</td>
                                <td>{$row['scie']}</td>
                                <td>{$row['sst']}</td>
                                <td>{$row['agri']}</td>
                                <td>{$row['ca']}</td>
                                </tr>
                           ";
                        }
                    }

                }
            ?>

            <h1 class="h1"> Learners Progress Records</h1>
                
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Exam Type</th>
                    <th>Perfomance</th>
                    <th>Year</th>
                </tr>

                <?php
                include 'conn.php';

                $year    = $_GET['year'] ?? '';
                $exam    = $_GET['exam'] ?? '';
                $grade   = $_GET['grade'] ?? '';
                $term    = $_GET['Term'] ?? '';
                $subject = $_GET['subject'] ?? '';

                if ($term && $year && $grade && $exam && $subject) {
                    $term    = mysqli_real_escape_string($conn, trim($term));
                    $year    = mysqli_real_escape_string($conn, trim($year));
                    $exam    = mysqli_real_escape_string($conn, trim($exam));
                    $grade   = mysqli_real_escape_string($conn, trim($grade));
                    $subject = mysqli_real_escape_string($conn, trim($subject));

                    $sql = "SELECT * FROM exam 
                            WHERE year='$year' 
                              AND term='$term' 
                              AND exam_type='$exam' 
                              AND grade='$grade'";
                    $sql2="SELECT * FROM exam2 
                            WHERE year='$year' 
                              AND term='$term' 
                              AND exam_type='$exam' 
                              AND grade='$grade'";
                    $result = mysqli_query($conn, $sql);
                    $result2=mysqli_query($conn, $sql2);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['firstName']}</td>
                                <td>{$row['lastName']}</td>
                                <td>{$row['exam_type']}</td>
                                <td>{$row[$subject]}</td>
                                <td>{$row['year']}</td>
                            </tr>";
                        }

                     if (mysqli_num_rows($result2) > 0) {
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo "<tr>
                                <td>{$row['firstName']}</td>
                                <td>{$row['lastName']}</td>
                                <td>{$row['exam_type']}</td>
                                <td>{$row[$subject]}</td>
                                <td>{$row['year']}</td>
                            </tr>";
                        }
                    } 
                }
                else {
                        echo "<p>No records found.</p>";
                    }
            }
                       ?>
            </table>
        </div>
    </div>
</body>
</html>
