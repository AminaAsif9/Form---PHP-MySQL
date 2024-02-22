<!DOCTYPE html>
<html>
<head>
    <title> MySQL Data</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data from MySQL Database</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $conn = mysqli_connect('localhost','root','','db_student');

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $query = "SELECT * FROM student_record";               
            
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    
                    
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $student_id = $row['id'];
                        
                        echo "<tr>";
                        echo "<td>" . $student_id . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No data found";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
