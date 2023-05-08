<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            height: 10%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
        input[type=submit] {
            width: 5%;
            height: 5%;
            background-color: #0482ff;
            color: white;
            padding: 14px 14px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
            input[type=submit]:hover {
            background-color: #58799a;
        }
        .title{
            font-size: 6ch;

        }
        input:required {
        border-color: #0f0f0f;
        }
        input:required:invalid {
        border-color: #c00000;
        }
    </style>
</head>
<body>
    <div class="title">
        PHP FORM ACTIVITY
    </div>
    <form action="forms.php" method="post">
        <label for="fname">First Name <br></label>
        <Input type="text" name="fname" id="fname" required></Input>
        <br>
        <label for="lname">Last Name <br></label>
        <Input type="text" name="lname" id="lname" required></Input>
        <br>
        <label for="email">Email  Address <br></label>
        <Input type="email" name="email" id="email" required></Input>
        <br>
        <label for="pass">Password <br></label>
        <Input type="password" name="password" id="password" required></Input>

        <label for="cpass">Confirm Password <br></label>
        <Input type="password" name="cpassword" id="cpassword" required></Input>
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>