<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Search Users</h1>
        <form method="GET" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php
        if (isset($_GET['username'])) {
            $username = $_GET['username'];
            
            // Database connection
            $servername = "localhost";
            $dbname = "users";
            $dbusername = "root";
            $dbpassword = "default";

            // Create connection
            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query vulnerable to SQL injection
            $sql = "SELECT * FROM user_info WHERE username = '$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table mt-3'>";
                echo "<thead><tr><th>ID</th><th>Username</th><th>Password</th></tr></thead>";
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p class='mt-3'>No results found</p>";
            }

            $conn->close();
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
