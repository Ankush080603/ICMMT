<?php
    if(isset($_POST['fname'])){
    // Set connection variables
    $server = "sql204.unaux.com";
    $username = "unaux_31272816";
    $password = "unauxSanket";


    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $affiliation = $_POST['affiliation'];
    $designation = $_POST['designation'];
    $amounttype = $_POST['amounttype'];
    $amount = $_POST['amount'];
    $payment = $_POST['payment'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $UTR = $_POST['UTR'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sql = "INSERT INTO `unaux_31272816_icmmt`.`guest`(`FName`, `MName`, `LName`, `Affiliation`, `Designation`, `AmountType`, `Amount`, `Payment`, `Country`, `State`, `UTR`, `Email`, `Mobile`) VALUES ('$fname','$mname','$lname','$affiliation','$designation','$amounttype','$amount','$payment','$country','$state','$UTR','$email','$mobile')";
    // echo $sql;

    // Execute the query
    if(mysqli_query($con, $sql)){
        // echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
        }
    else{
            echo "ERROR: $sql <br> $con->error";
        }
                    
    // Close the database connection
    $con->close();
    }
?>