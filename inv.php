<?php
require_once('Plugins/tcpdf/tcpdf.php');
require_once('Config/Database.php');

function rupiah($angka)
{
 	$jadi = "Rp " . number_format($angka,2,',','.');
	return $jadi;
}

$getID_INV = base64_decode($_GET['id']);
$showdata = mysqli_query($connecDB, "SELECT * FROM carts WHERE id_invoice = '$getID_INV'")or die(mysqli_error());
$x = mysqli_fetch_array($showdata);
$nama = $x['nama_lengkap'];
$email = $x['email'];
$alamat = $x['alamat'];

$duedate = '2016-01-27 00:57:30';
$duedate = date('Y-m-d H:i:s', strtotime('+1 month', strtotime($duedate)));
$duedate = date('d/m/Y', strtotime($duedate));
$created_date = date('d/m/Y', strtotime($x['created']));

$harga = rupiah($x['harga']);
$total = rupiah($x['harga']);
$kode_unik = rupiah(220);
$subtotal = rupiah($x['harga']+220);
$kredit = rupiah(0);
$total_keseluruhan = rupiah($x['harga']+220);



$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('IndoCreator');
$pdf->SetTitle('IndoCreator Invoice UNPAID');
$pdf->SetSubject('Invoice Website Order');
$pdf->SetKeywords('Invoice, website, order, indocreator, unpaid');
$pdf->SetHeaderData(PDF_HEADER_LOGO, '60', 'IndoCreator', PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
// ---------------------------------------------------------
$pdf->SetFont('helvetica', 'B', 20);
$pdf->AddPage();
$tbl = <<<EOD
<h3 style="color:red">UNPAID</h3>
EOD;
$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Write(0, 'Invoice #534829', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Write(0, 'Invoice Date: '.$created_date.'', '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Due Date: '.$duedate.'', '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, ' ', '', 0, 'L', true, 0, false, false, 0);


$pdf->Write(0, 'Invoiced To
'.$email.'
ATTN: '.$nama.'
'.$alamat.'
Indonesia

', '', 0, 'L', true, 0, false, false, 0);
$id = $_GET['id'];


// -----------------------------------------------------------------------------
$tbl = <<<EOD
<table border="1" style="padding:10px;">
    <tr>
    	<td><strong>Description</strong></td>
    	<td><strong>Total</strong></td>
    </tr>
    <tr>
    	<td>Pemesanan Website - Profile Perusahaan Business - 1 tahun $harga</td>
    	<td>$total</td>
    </tr>
    <tr>
    	<td>Kode unik pembayaran</td>
    	<td>$kode_unik</td>
    </tr>
    <tr>
    	<td align="right" style="background-color:#dfdfdf;"><strong>Sub Total</strong></td>
    	<td style="background-color:#dfdfdf;">$subtotal</td>
    </tr>
    <tr>
    	<td align="right" style="background-color:#dfdfdf;"><strong>Credit</strong></td>
    	<td style="background-color:#dfdfdf;">$kredit</td>
    </tr>
    <tr>
    	<td align="right" style="background-color:#dfdfdf;"><strong>Total</strong></td>
    	<td style="background-color:#dfdfdf;">$total_keseluruhan</td>
    </tr>
</table>
<h3>Transactions</h3>
<table border="1" style="padding:10px;">
	<tr>
    	<td><strong>Transaction Date</strong></td>
    	<td><strong>Gateway</strong></td>
    	<td><strong>Transaction ID</strong></td>
    	<td><strong>Amount</strong></td>
    </tr>
    <tr>
    	<td colspan="4" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Related Transactions Found</td>
    </tr>
    <tr>
    	<td></td>
    	<td></td>
    	<td align="right"><strong>Balance</strong></td>
    	<td><strong>$total_keseluruhan</strong></td>
    </tr>
</table>
<br />
<p align="center"><small>PDF Generated on $created_date</small></p>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+