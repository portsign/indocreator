<?php 
include('header.php'); 
include('navbar.php'); ?>

<!-- // CARA PESAN -->
<br /><br />
<section id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">FAQ</h2>
        </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Berapa Lama Mas Proses Pengerjaanya?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        Pengerjaanya sekitar 20-30 hari atau bisa sampai 1.5 bulan tergantung banyak nya antrian, dan juga kesiapan data dari klient juga menentukan cepat lambat nya proses pembuatan. Setelah proses pembuatan boleh dilakukan revisi.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Data Apa Saja yang Perlu di Siapkan?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		      	<ul>
		      		<li>Nama Brand</li>
		      		<li>Email</li>
		      		<li>NO. HP / Telp</li>
		      		<li>PIN BB</li>
		      		<li>ALAMAT</li>
		      		<li>BANK (Bisa berisi Nama dan No rek atau di isi nama saja.)</li>
		      		<li>LOGO</li>
		      		<li>Gambar-gambar konten yang akan dimuat di website anda</li>
		      		<li>KATA KUNCI ,ex: Konveksi Murah Yogyakarta</li>
		      		<li>About US</li>
		      		<li>Untuk Lebih lengkapnya bisa hubungi <a href="<?= $baseUrl ?>contact">kontak kami</a></li>
		      	</ul>
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingThree">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Bagaimana Supaya website anda dikenal baik oleh google?
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		      <div class="panel-body">
		        Jika anda membeli website sudah saya sertakan panduan atau cara untuk SEO nya. Silahkan dipelajari agar website yang anda beli tidak sia-sia.
		      </div>
		    </div>
		  </div>
		</div>
    </div>        
</section>
<!-- // CARA PESAN END-->

<?php include('footer.php'); ?>