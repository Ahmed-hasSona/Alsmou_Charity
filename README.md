# Alsmou_Charity
AlSmou Charitable Organization



     $formError = array();

     if(strlen($name) <= 2){
         $formError[] = 'User Name Must be Larger Than 2 Charctar';
     }
    
     if(strlen($message) < 10){
        $formError[] = 'Message can’t be less than 10 charctar';
    }

    $header = 'From: ' . $email .'\r\n';
    $myemail = 'ahmedhassona719@gmail.com';
    $subject = 'Sign in';

    if(empty($formError)){
        mail($myemail ,$subject, $message , $header, $phone, $village, $city, $gender);

        $name = '';
        $email = '';
        $phone = '';
        $village = '';
        $message = '';
        $city = '';
        $gender = '';

        $success = '<div class="alert alert-success">We have Recive Your Message ^_^</div>';
    }

?>
