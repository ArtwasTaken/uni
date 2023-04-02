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
        FORM PROCESSING
    </div>
    <br>
    <br>
    <div class = formBoxContent>
            <?php
                //Validation of Request Method
                if ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    //Collecting and Processing of Form Data
                    $dataFirstName = $_POST['nameFirst'];
                    $dataLastName = $_POST['nameLast'];
                    $dataEmail = $_POST['email'];
                    $dataPasswordCount = strlen($_POST['password']);
                    $passwordValidation = ($_POST['password'] == $_POST['passwordconfirm']) ? 1 : 0;

                    //Printing of Data
                    echo "The data submitted via the form are as follows. <br><hr><br>";
                    echo "First Name: " . $dataFirstName . "<br><br>";
                    echo "Last Name: " . $dataLastName . "<br><br>";
                    echo "E-Mail: " . $dataEmail . "<br><br>";
                    echo "Password Character Count: " . $dataPasswordCount . "<br><br>"; 
                    if($passwordValidation == 1)
                    {
                        echo "The password input in the first field is equivalent to the password in the second field. <br>";
                    }
                    else if($passwordValidation == 0)
                    {
                        echo "The password input in the first field is inequivalent to the password in the second field. <br>";
                    }
                }
                else
                {
                    echo "Invalid access method.";
                }
            ?>
    </div>
</body>
</html>










