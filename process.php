<?php
include "db.php";

$message = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);
    $matric_number = trim($_POST['matric_number']);

  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = " Invalid email format. Please go back and try again";
        $status = "error";
       
    } else {
        $statement = $conn->prepare("INSERT INTO student_data (full_name, email, department, matric_number) VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssss", $full_name, $email, $department, $matric_number);
       
        if ($statement->execute()) {
            $message = " Student registered successfully!";
            $status = "success";
        } else {
            $message = " Error: " .$conn->error;
            $status = "error";
        }

        $statement->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Process Page</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

    body{
            font-family: Arial, Sans-serif;
            background: #0a0f1f;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 450px;
            background: white;
        }

        .success {
            background: #1c2236;
            color: #f1c40f;
            
        }

        .error {
            border: 6px solid green;
            color: #453757;
            background:#f9fbfb ;
        }

        h2 {
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            text-decoration: none;
            background: #3c6369;
            color: white;
            border-radius: 6px;
        }

        a:hover {
            background:  #453757;;
        }
    </style>
</head>

<body>

    <div class="box <?php echo $status; ?>">
        <h2><?php echo $message; ?></h2>
        <a href="view.php"> View Registered Students</a>
        <a href="index.php">Back to form</a>
    </div>

</body>

</html>