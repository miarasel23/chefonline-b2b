<?php
// Database connection parameters
$servername = "18.135.191.8"; // Change this to your MySQL server hostname
$username = "srs_admin"; // Change this to your MySQL username
$password = "Q85vb03_g"; // Change this to your MySQL password
$database = "muhib_test_database"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM info";
$result = $conn->query($sql);

?>

<!-- HTML code for the section starts here -->
<section id="section">
    <div class="section">
        <div class="comment-drop-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kh-who-we-are">
                            <h3 class="text-center kh-line" style="color: #1B1B6C">Mega Medical Camp Bangladesh 2024</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-box">
                <div class="container"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="enqiry" style="width: 100%;">
                                <div class="contact-title">
                                    <h4>Registration</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Table starts here -->
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Phone</th>
                                            <th>Emergency Contact Name</th>
                                            <th>Emergency Contact Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Check if there are rows in the result
                                        if ($result->num_rows > 0) {
                                            // Loop through each row of the result
                                            while ($row = $result->fetch_assoc()) {
                                                // Output data of each row
                                                echo "<tr>";
                                                echo "<td>" . $row["name"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>" . $row["phone"] . "</td>";
                                                echo "<td>" . $row["emergency_name"] . "</td>";
                                                echo "<td>" . $row["emergency_telephone"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Table ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HTML code for the section ends here -->

<?php
// Close connection
$conn->close();
?>
