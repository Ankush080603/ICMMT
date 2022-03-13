<?php
                if(isset($_POST['name'])){
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
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $message = $_POST['message'];
                    $sql = "INSERT INTO `unaux_31272816_icmmt`.`contact`(`Name`, `Email`, `Mobile`, `Message`) VALUES ('$name','$email','$mobile','$message');";
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