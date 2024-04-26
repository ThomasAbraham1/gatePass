<?php
// Include database connection
include_once("conn.php");

// Check if the form is submitted
if ($_SERVER["DOCUMENT_ROOT"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['userName']) && isset($_POST['currentPassword']) && isset($_POST['newPassword'])) {
        // Sanitize user input
        $userName = $conn->real_escape_string($_POST['userName']);
        $currentPassword = $conn->real_escape_string($_POST['currentPassword']);
        $newPassword = $conn->real_escape_string($_POST['newPassword']);

        // Retrieve user data from the database
        $sql = "SELECT * FROM login WHERE username = '$userName'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // User found, verify the current password
            $row = $result->fetch_assoc();
            if (password_verify($currentPassword, $row['password'])) {
                // Current password matches, proceed to update the password
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateSql = "UPDATE login SET password = '$hashedPassword' WHERE username = '$userName'";

                if ($conn->query($updateSql) === TRUE) {
                    // Password updated successfully
                    echo "Password updated successfully!";

                    // Example of inserting into permission_details table
                    $rollnumber = "12345"; // Example roll number
                    $permissiontype = "Leave"; // Example permission type
                    $leavingdatetime = "2024-04-10 10:00:00"; // Example leaving date and time
                    $place = "Office"; // Example place
                    $reason = "Personal reasons"; // Example reason
                    $contactnumber = "9876543210"; // Example contact number

                    $insertPermissionSql = "INSERT INTO permission_details (sno, rollnumber, permissiontype, leavingdatetime, place, reason, contactnumber, status, outtime, datm, acceptedby, rejectedby) 
                                            VALUES ('{$row['sno']}', '$rollnumber', '$permissiontype', '$leavingdatetime', '$place', '$reason', '$contactnumber', 'Pending', NULL, NOW(), NULL, NULL)";

                    if ($conn->query($insertPermissionSql) === TRUE) {
                        echo "Permission details inserted successfully!";
                    } else {
                        echo "Error inserting permission details: " . $conn->error;
                    }
                } else {
                    echo "Error updating password: " . $conn->error;
                }
            } else {
                echo "Incorrect current password!";
            }
        } else {
            echo "User not found!";
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request!";
}

// Close connection
$conn->close();
?>
