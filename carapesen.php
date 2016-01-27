<?php 
include('header.php'); 
include('navbar.php'); ?>

<!-- // CARA PESAN -->
<br /><br />
<section id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Cara Pemesanan</h2>
            <p class="text-center">Ada dua cara pemesanan website pada <a href="<?= $baseUrl ?>">IndoCreator</a>, mengisikan formulir secara online atau <br />Mendownload Formulir Pemesanan secara menual</p>
            <br />
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1default" data-toggle="tab">Formulir Online</a></li>
                    <li><a href="#tab2default" data-toggle="tab">Manual</a></li>
                </ul>
            </div>
            <div class="panel-body" style="margin-top:-27.5px;">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1default">
                    <h4>Formulir Online</h4>
                    <p>Dibawah ini adalah beberapa langkah cara pemesanan website pada IndoCreator</p>
                    <ol>
                        <li>Pilih Kategori yang anda inginkan <a href="<?php echo $baseUrl; ?>harga">http://indocreator.local/harga</a>, lalu klik tombol <strong>ORDER NOW</strong></li>
                        <li>Isikan data lengkap anda, pastikan anda mencentang syarat dan ketentuan yang kami buat.
                        <br /><br />
                        <img class="thumbnail" src="<?= $baseUrl; ?>images/how_to_1.png" style="width:50%" />
                        </li>
                        <li>Pilih <a href="<?= $baseUrl; ?>desain">Template</a> yang anda inginkan</li>
                        <li>Setelah itu anda akan mendapatkan email konfirmasi dari detail pemesanan anda pada <a href="<?= $baseUrl; ?>">IndoCreator</a></li>
                        <li>Setelah anda melakukan pembayaran uang inisiasi projek dengan jumlah yang tercantum di email anda, silahkan konfirmasi kepada kami
                            <div class="row"><br />
                                <div class="col-md-6">
                                    <ul>
                                        <li><strong>Nama Bank :</strong> Bank Mandiri</li>
                                        <li><strong>No Rekening :</strong> 1390011344250</li>
                                        <li><strong>Atas Nama : </strong>Ghani Nafiansyah</li>
                                    </ul>    
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><strong>Nama Bank :</strong> Muamalat</li>
                                        <li><strong>No Rekening :</strong> 5370002857</li>
                                        <li><strong>Atas Nama :</strong> Ghani Nafiansyah</li>
                                    </ul>
                                </div>
                            </div>
                        </li><br />
                        <li>Konfirmasi Via Contact / WA : 089527329779 atau BBM : 7C1459C2</li>
                    </ol>
                    </div>
                    <div class="tab-pane fade" id="tab2default">
                    <h4>Pemesanan Manual</h4>
                    <p>Silahkan download formulir pemesanan website dibawah ini</p><br />
                    <center>
                        <a href="<?= $baseUrl ?>Files/Formulir_Pendaftaran.docx"><h3><i class="glyphicon glyphicon-file"></i> FORMULIR_PEMESANAN_WEB_INDOCREATOR</h3></a>
                    </center><br />
                    Isi Formulir tersebut lalu kirim ke <a href="mailto:info@indocreator.co.id">info@indocreator.co.id</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</section>
<!-- // CARA PESAN END-->

<?php include('footer.php'); ?>