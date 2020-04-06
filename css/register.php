

<?php

// include('includes/settings.php');

extract($_POST);



// $to = "jawwad@cybeinc.com,";

$to = "sumeet@cybeinc.com";

// $to = "ali@cybeinc.com";

$subject = 'New Registration from Website';



$from = $email;

 

// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 

// Create email headers

$headers .= 'From: '.$from."\r\n".

    'Reply-To: '.$from."\r\n" .

    'X-Mailer: GDEX Website/' . phpversion();

 

// Compose a simple HTML email message

$message = '<html><body>';

$message .= '<p>Hello, You have received a new registration data from website';

$message .= '<table>';

$message .= '<tr><td>Name:</td><td><strong>'.$name."</strong></td></tr>";

$message .= '<tr><td>Contact:</td><td><strong>'.$contact."</strong></td></tr>";

$message .= '<tr><td>Email:</td><td><strong>'.$email."</strong></td></tr>";

$message .= '<tr><td>City:</td><td><strong>'.$city."</strong></td></tr>";

$message .= '<tr><td>Business Name:</td><td><strong>'.$businessname."</strong></td></tr>";

// $message .= '<tr><td>Education:</td><td><strong>'.$education."</strong></td></tr>";

$message .= '</table>';

$message .= '</body></html>';

 

// // //Save To Database

// $sql = "insert into ".$partnertable." (storeId, partnerId, name, contact, email, city, businessname, education, date, time) values (?,?,?,?,?,?,?,?, DATE(NOW()), CURRENT_TIME())";

// $stmt = $dbhconnection->prepare($sql);

// $result = $stmt->execute([$parterstoreId, $partnerId, $name, $contact, $email, $city, $businessname]);


// Sending email

if(mail($to, $subject, $message, $headers))

{


   $return_arr['status'] = "success";



} else{



    $return_arr['status'] = "failed";

}



echo json_encode($return_arr);



?>

