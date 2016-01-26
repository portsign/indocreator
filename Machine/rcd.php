<?php 

include('../Config/Database.php');

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
    $harga = $_POST['harga'];

    $uri_1 = $_POST['uri_1'];
    $uri_2 = $_POST['uri_2'];

	$captcha = $_POST['g-recaptcha-response'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZHxUTAAAAAPheQqRht9iCRTgf34O1jpo-FXTl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $responseData = json_decode($response);
    
    if ($responseData->success && $_POST['setuju']==1) {
        
    	mysqli_query($connecDB, "INSERT INTO carts (
                                 tipe_web
                                ,nama_lengkap
                                ,email
                                ,alamat
                                ,no_telp
                                ,pin_bb
                                ,kepentingan
                                ,setuju
                                ,session_id
                                ,harga
                                ,document_path
                                ,status
                                ,created
                                ,modified) 
        VALUES ('$jenisweb'
                ,'$nama'
                ,'$email'
                ,'$alamat'
                ,'$no_telp'
                ,'$pin_bb'
                ,'$kepentingan'
                ,'$setuju'
                ,'$session_id'
                ,'$harga'
                ,''
                ,'cart'
                ,NOW()
                ,NOW())")or die(mysqli_error());

        mysqli_query($connecDB, "INSERT INTO subscriber (email) VALUES ('$email')");
    


        header('Location: ../template/'.$uri_1.'/'.$uri_2.'');

    } else if ($_POST['setuju']=='') {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/req#requirement');

    } else {

        header('Location: ../order/'.$uri_1.'/'.$uri_2.'/false/captcha#google');
    
    }


}
if (isset($_POST['template_chose'])) {
    
    $id_invoice = str_pad(mt_rand(0, 999999), 5, '0', STR_PAD_LEFT);
    $templatez = $_POST['templatez'];
    $email = $_POST['email'];
    $session_id = $_POST['session_id'];

    $sd = mysqli_query($connecDB, "SELECT * FROM carts WHERE email = '$email' AND session_id = '$session_id'");
    $g = mysqli_fetch_array($sd);

    $nama = $g['nama_lengkap'];
    $dtime = $g['created'];
    $tipeWeb = $g['tipe_web'];
    $kode_unik = '220';
    $credit = '0';
    $harga = $g['harga'];
    $subtotal = $g['harga']+220;
    $total = $g['harga']+220;

    require('../Plugins/sendgrid-php/sendgrid-php.php');
    $sendgrid = new SendGrid('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');
    $mail    = new SendGrid\Email();
    $mail->addTo($email)
      ->setFrom("indocreator@indocreator.co.id")
      ->setSubject("Invoice Layanan IndoCreator")
      ->setHtml('<div style="width:825px;margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px;background-color:#E1E8ED;padding:20px;"><div style="width:500px;background-color:white; padding:0px; margin: auto;"><center><table><tr><td><img src="https://indocreator.co.id/images/REAL_LOGO_IC.png" width="50" /></td><td style="font-size:20px;color:#888">Selamat datang di IndoCreator</td></tr></table><div style="border-bottom:4px solid #dfdfdf; margin-top:5px;"></div></center><table style="padding:10px;"><tr><td><p align="left" style="color:#888;">Dear '.$nama.', Terimakasih telah melakukan order di IndoCreator.</p></td></tr><tr><td>Kami informasikan bahwa pada '.$nama.' kami telah menerbitkan invoice untuk layanan IndoCreator yang Anda gunakan. Berikut informasi detailnya :<br /><br /></td></tr><tr><td>INVOICE '.$id_invoice.'</td></tr><tr><td>Pemesanan Website - '.$tipeWeb.' - 1 tahun Rp '.$harga.'</td></tr><tr><td>Kode Unik Pembayaran Rp '.$kode_unik.',00<br />------------------------------------------------------<br />Sub Total: Rp '.$subtotal.',00<br />Credit: Rp '.$kredit.',00<br />Total: Rp '.$total.',00<br /><br /><i>Untuk tagihan berlangganan, keterlambatan pembayaran dapat menyebabkan layanan Anda dihentikan/disuspend secara otomatis oleh sistem. Silahkan lakukan pembayaran sebelum jatuh tempo.</i><h3>TOTAL : Rp '.$total.',00</h3></td></tr><tr><td style="background-color:#FFFF99; padding:10px;"><small><i>Catatan: Untuk pembayaran yang sudah lewat tanggal jatuh tempo, mohon konfirmasikan terlebih dahulu ke IndoCreator agar dapat dicek apakah layanan masih dapat diaktifkan kembali atau tidak.</i></small></td></tr><tr><td><br />Metode pembayaran: MANDIRI<br />No. Rek. 1390011344250 <br />a/n Ghani Nafiansyah</td></tr><tr><td><a href="https://indocreator.co.id/artikel" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #2780e3;color: #ffffff;background-color: #1967be;border-color: #1862b5;text-decoration: none;">Lihat Daftar Rekening</a>&nbsp;</td></tr><tr><td>Untuk pembayaran yang dilakukan dengan cara transfer via ATM Non-Tunai, Internet Banking, dan setoran tunai, silahkan kirim bukti screenshoot ke email kami info@indocreator.co.id atau konfirmasi lewat smartphone 089527329779. Pin BB : 7C1459C2<br /><br />Demikian informasi dari kami mengenai invoice atas layanan yang digunakan. Terima kasih telah menggunakan layanan IndoCreator.<br /><br />Jabat erat,<br />Customer Service<br />-------------------------<br /><a href="https://indocreator.co.id">https://indocreator.co.id</a><br /><br />Phone : <a href="tel:+6289527329779">+6289527329779</a><br />SMS : <a href="tel:+6289527329779">+6289527329779</a> (billing only)<br />Sales & Customer Service : <a href="mailto:info@indocreator.co.id">info@indocreator.co.id</a><br /> Technical Support : <a href="mailto:teknis@indocreator.co.id">teknis@indocreator.co.id</a> <br />Billing : <a href="mailto:billing@indocreator.co.id">billing@indocreator.co.id</a> <br />Abuse : <a href="mailto:abuse@indocreator.co.id">abuse@indocreator.co.id</a><br /></td></tr></table></div><center><p style="font-size:10px; color:#888">&copy; 2016 IndoCreator. Jambusari Indah, Jl.Jambu Mete, Maguwoharjo, Depok, Sleman, Yogyakarta 55283</p></center></div>');

    $sendgrid->send($mail);

    //--------------------------------- PDF GENERATE HERE --------------------------------------------------------------//








    //-------------------------------- END OF PDF GENERATE -------------------------------------------------------------//

    mysqli_query($connecDB, 
                "UPDATE carts SET 
                id_invoice = '$id_invoice'
                ,template = '$templatez'
                , session_id = 'NULL'
                , status = 'order'
                , modified = NOW() 
                WHERE email = '$email' 
                AND session_id = '$session_id'");
    session_start();
    session_unset();
    session_destroy();
    $baseID = base64_encode($id_invoice);
    header('Location: ../order/success/'.$baseID.'');
}

if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    $captcha = $_POST['g-recaptcha-response'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeZHxUTAAAAAPheQqRht9iCRTgf34O1jpo-FXTl&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    $responseData = json_decode($response);
    
    if ($responseData->success) {
        
        $shwEmail = mysqli_query($connecDB, "SELECT count(email) as j FROM subscriber WHERE email = '$email'");
        $e = mysqli_fetch_array($shwEmail);
        if ($e['j']>=1) {
            header('Location: ../em/#email');
        } else {   
            require('../Plugins/sendgrid-php/sendgrid-php.php');
            $sendgrid = new SendGrid('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');
            $mail    = new SendGrid\Email();
            $mail->addTo($email)
              ->setFrom("indocreator@indocreator.co.id")
              ->setSubject("IndoCreator")
              ->setHtml('<div style="width:825px;margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px;background-color:#E1E8ED;padding:20px;"><div style="width:500px;background-color:white; padding:0px; margin: auto;"><center><table><tr><td><img src="https://indocreator.co.id/images/REAL_LOGO_IC.png" width="50" /></td><td style="font-size:20px;color:#888">Selamat datang di IndoCreator</td></tr></table><div style="border-bottom:4px solid #dfdfdf; margin-top:5px;"></div></center><table style="padding:10px;"><tr><td><p align="left" style="color:#888;">Terimakasih telah subscribe kami.</p></td></tr><tr><td>Dapatkan informasi mengenai cara pemesanan website pada indoCreator. Kami melayani anda sebaik mungkin.Artikel-artikel terbaru akan kami kirimkan setiap minggunya.<br /><br /></td></tr><tr><td><a href="https://indocreator.co.id/artikel" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #2780e3;color: #ffffff;background-color: #1967be;border-color: #1862b5;text-decoration: none;">Artikel</a>&nbsp;<a href="https://indocreator.co.id/caraorder" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #2780e3;color: #ffffff;background-color: #3fb618;border-color: #3fb618;text-decoration: none;">Cara Pesan</a>&nbsp;<a href="https://indocreator.co.id/desain" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #2780e3;color: #ffffff;background-color: #ff7518;border-color: #ff7518;text-decoration: none;">Desain</a>&nbsp;<a href="https://indocreator.co.id/contact" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #2780e3;color: #ffffff;background-color: #ff0039;border-color: #ff0039;text-decoration: none;">Kontak</a>&nbsp;<a href="https://indocreator.co.id/harga" style="display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 10px 18px;font-size: 15px;line-height: 1.42857143;border-radius: 0;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;color: #ffffff;background-color: #2780e3;border-color: #FFF;color: #ffffff;background-color: #222222;border-color: #222222;text-decoration: none;">Price</a></td></tr></table></div><center><p style="font-size:10px; color:#888">&copy; 2016 IndoCreator. Jambusari Indah, Jl.Jambu Mete, Maguwoharjo, Depok, Sleman, Yogyakarta 55283</p></center></div>');

            $sendgrid->send($mail);

            mysqli_query($connecDB, "INSERT INTO subscriber (email) VALUES ('$email')");
            header('Location: ../sub');
        }
    } else {
        header('Location: ../req/#captcha');
    }
}