<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>

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

        .form-container{
            background: #1c2230;
            padding: 30px;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0 8px 16px rgba(0,0,0,0,4);
        }

        .form-container h2{
            text-align: center;
            margin-bottom: 20px;
            color: #f1c40f;
        }

        label{
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input{
            width: 95%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            margin-bottom: 15px;
            outline: none;
        }

        button{
            width: 100%;
            padding: 12px;
            background: #f1c40f;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover{
            background: #d4ac0d;
        }

       
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Student Information</h2>
        <form action="process.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" name="full_name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="department">Department</label>
            <input type="text" name="department" required>

            <label for="matric_number">Matric Number</label>
            <input type="text" name="matric_number" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>