<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['userName']) && isset($_POST['currentPassword']) && isset($_POST['newPassword'])) {
        // Include your database connection file
        include_once("conn.php");

        // Sanitize user input
        $userName = $conn->real_escape_string($_POST['userName']);
        $currentPassword = $conn->real_escape_string($_POST['currentPassword']);
        $newPassword = $conn->real_escape_string($_POST['newPassword']);

        // Retrieve user data from the database
        $sql = "SELECT * FROM login WHERE username = '$userName'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, verify the current password
            $row = $result->fetch_assoc();
            if (password_verify($currentPassword, $row['password'])) {
                // Current password matches, proceed to update the password
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateSql = "UPDATE login SET password = '$hashedPassword' WHERE username = '$userName'";

                if ($conn->query($updateSql) === TRUE) {
                    // Password updated successfully
                    echo "Password updated successfully!";
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "Incorrect current password!";
            }
        } else {
            echo "User not found!";
        }

        // Close connection
        $conn->close();
    } else {
        echo "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Change Password</h2>
        <form id="changePasswordForm">
            <div class="form-group">
                <label for="userName">Username:</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
            <div class="form-group">
                <label for="currentPassword">Current Password:</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
        <div id="changePasswordResult" class="mt-3"></div>
    </div>

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#changePasswordForm').submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: 'changepassword.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#changePasswordResult').html('<div class="alert alert-info">' + response + '</div>');
                    },
                    error: function(xhr, status, error) {
                        $('#changePasswordResult').html('<div class="alert alert-danger">Error: ' + error + '</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
