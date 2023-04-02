<html>
<head>
    <!-- External CSS -->
    <link rel = "stylesheet" href = "styles.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet"> 
</head>
<body>
    <br>
    <div class = formBoxTitle>
        FORM SUBMISSION
    </div>
    <br>
    <br>
    <div class = formBoxContent>
        <form action="formProcess.php" method = "post">
            Please provide the info below to proceed. <br><hr><br>
            First Name: <input type="text" name="nameFirst" class="formField"><br><br>
            Last Name: <input type="text" name="nameLast" class="formField"><br><br>
            E-Mail: <input type="text" name="email" class="formField"><br><br>
            Username: <input type="text" name="username" class="formField"><br><br>
            Password: <input type="password" name="password" class="formField"><br><br>
            Confirm Password: <input type="password" name="passwordconfirm" class="formField"><br><br><hr>
            <input type="submit" value="Submit Form" class="buttonSubmit"> <br>
        </form>
    </div>
</body>
</html>