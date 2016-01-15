<?php 

include('Config/Database.php');

if (isset($_POST['isiform'])) 
{

    $session_id = $_POST['session_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $kepentingan = $_POST['kepentingan'];
    $jenisweb = $_POST['jenisweb'];
    $setuju = $_POST['setuju'];
    $uri_1 = $_POST['uri_1'];
    $uri_2 = $_POST['uri_2'];

	$captcha = $_POST['g-recaptcha-response'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZHxUTAAAAAPheQqRht9iCRTgf34O1jpo-FXTl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $responseData = json_decode($response);
    
    if ($responseData->success && $_POST['setuju']==1) {
        
    	// mysqli_query($connecDB, "INSERT INTO ");

        echo 'Oke Lanjut';

    } else if ($_POST['setuju']=='') {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/req');

    } else {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/captcha');
    
    }


}