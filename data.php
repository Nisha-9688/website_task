<?php
    include('db.php');
    $name = $email = $comment = "";
    $errors = [];
    $success = "";
    $dbError = "";
 if(isset($_POST['submit']))
    {
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $comment=trim($_POST['comment']);

            if($name == ""){
                $errors['name'] = "Name is required";
            }
            if($email == ""){
                $errors['email'] = "Email is required";
            }
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid email format";
            }
            elseif (!preg_match('/\.[a-zA-Z]{3}$/', $email)) {
                 $errors['email'] = "Email must end with 3 letters after dot";
            }
            if($comment == ""){
                $errors['comment'] = "Comment is required";
            }
        

        if(empty($errors))
        {
            $stmt = $conn->prepare("INSERT INTO `register` (`name`,`email`,`comment`)VALUES (?,?,?)" );

            if($stmt)
            {
                $stmt->bind_param("sss",$name,$email,$comment);
                if($stmt->execute())
                {
                    $success = "Form submitted successfully";
                    $name = $email = $comment = "";
                }
                else
                {
                    // $dbError = "Something went wrong. Please try again.";
                    $dbError = $stmt->error;
                }
                $stmt->close();
            }
            else
            {
                // $dbError = "Something went wrong. Please try again.";
                $dbError = $conn->error;
            }
        }
    }

?>