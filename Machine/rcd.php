<?php 

include('Config/Database.php');

if (isset($_POST['isiform'])) 
{

    session_start();
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['alamat'] = $_POST['alamat'];
    $_SESSION['no_telp'] = $_POST['no_telp'];
    $_SESSION['pin_bb'] = $_POST['pin_bb'];
    $_SESSION['kepentingan'] = $_POST['kepentingan'];
    $_SESSION['jenisweb'] = $_POST['jenisweb'];
    $_SESSION['setuju'] = $_POST['setuju'];
    $_SESSION['harga'] = $_POST['harga'];

    $session_id = $_POST['session_id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $pin_bb = $_POST['pin_bb'];
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

        header('Location: ../template/'.$uri_1.'/'.$uri_2.'');

    } else if ($_POST['setuju']=='') {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/req#requirement');

    } else {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/captcha#google');
    
    }


}