<?php 
include('header.php'); 
include('navbar.php'); 

session_start();
//echo session_id();

?>

<!-- // CONTACT -->
    <section id="contact">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="container">
        <br /><br />
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Formulir Pemesanan</h2>
            <p class="wow text-center fadeInDown">Untuk melakukan pemesana kepada kami, silahkan anda masukkan data lengkap anda pada Formulir Online di bawah ini. <br /> Untuk detail panduan cara pemesanan bisa dilihat <a href="<?php echo $baseUrl; ?>caraorder">disini</a></p>
            <br />
            <h4>Masukkan informasi lengkap anda</h4>
            <p style="margin: -10px -1px 10px;"><i>Setelah anda mengisikan formulir dibawah ini secara lengkap, anda akan memasuki</i> </p><br /> 
            <p style="margin: -43px 0 10px;"><i>halaman pemilihan template</i></p>

            <form action="<?php echo $baseUrl."record"; ?>" method="POST">
                <div class="row">
                    <input type="hidden" name="session_id" value="<?php echo session_id(); ?>">
                    <input type="hidden" name="uri_1" value="<?php echo $_GET['type']; ?>">
                    <input type="hidden" name="uri_2" value="<?php echo $_GET['id']; ?>">
                    <div class="col-md-6">
                        Nama Lengkap : <input type="text" name="nama" class="form-control" />
                        Email : <input type="email" name="email" class="form-control" />
                        Alamat : <textarea type="text" name="alamat" class="form-control" rows="5"></textarea>
                        <br />
                    </div>
                    <div class="col-md-6">
                        No Telepon / HP :
                        <input type="text" name="no_telp" class="form-control" />
                        Pin BB (<small><i>Jika ada</i></small>)
                        <input type="text" name="pinbb" class="form-control" style="width:120px;" />
                        Kepentingan : 
                        <select name="kepentingan" class="form-control">
                            <option>Pribadi</option>
                            <option>Perusahaan</option>
                            <option>Situs Berita</option>
                            <option>Online Shop</option>
                        </select>
                        <p  style="margin-top:8px;">Web yang anda pilih :</p>
                        <select name="jenisweb" class="form-control">
                            <option <?php if ($_GET['type']=='cp' && $_GET['id']=='1') { echo 'selected="selected"'; } ?> value="Profile Perusahaan Standar">Profile Perusahaan Standar</option>
                            <option <?php if ($_GET['type']=='cp' && $_GET['id']=='2') { echo 'selected="selected"'; } ?> value="Profile Perusahaan Business">Profile Perusahaan Business</option>
                            <option <?php if ($_GET['type']=='cp' && $_GET['id']=='3') { echo 'selected="selected"'; } ?> value="Profile Perusahaan Pro">Profile Perusahaan Pro</option>
                            <option <?php if ($_GET['type']=='cp' && $_GET['id']=='4') { echo 'selected="selected"'; } ?> value="Profile Perusahaan Ultra">Profile Perusahaan Ultra</option>
                            <option <?php if ($_GET['type']=='os' && $_GET['id']=='1') { echo 'selected="selected"'; } ?> value="Toko Online Standar">Toko Online Standar</option>
                            <option <?php if ($_GET['type']=='os' && $_GET['id']=='2') { echo 'selected="selected"'; } ?> value="Toko Online Business">Toko Online Business</option>
                            <option <?php if ($_GET['type']=='os' && $_GET['id']=='3') { echo 'selected="selected"'; } ?> value="Toko Online Pro">Toko Online Pro</option>
                            <option <?php if ($_GET['type']=='os' && $_GET['id']=='4') { echo 'selected="selected"'; } ?> value="Toko Online Ultra">Toko Online Ultra</option>
                            <option <?php if ($_GET['type']=='pb' && $_GET['id']=='1') { echo 'selected="selected"'; } ?> value="Situs Berita / News Standar">Situs Berita / News Standar</option>
                            <option <?php if ($_GET['type']=='pb' && $_GET['id']=='2') { echo 'selected="selected"'; } ?> value="Situs Berita / News Jurnalis">Situs Berita / News Jurnalis</option>
                            <option <?php if ($_GET['type']=='pb' && $_GET['id']=='3') { echo 'selected="selected"'; } ?> value="Situs Berita / News Pro">Situs Berita / News Pro</option>
                            <option <?php if ($_GET['type']=='pb' && $_GET['id']=='4') { echo 'selected="selected"'; } ?> value="Situs Berita / News Ultra">Situs Berita / News Ultra</option>
                            <option <?php if ($_GET['type']=='ib' && $_GET['id']=='1') { echo 'selected="selected"'; } ?> value="Iklan Baris Standar">Iklan Baris Standar</option>
                            <option <?php if ($_GET['type']=='ib' && $_GET['id']=='2') { echo 'selected="selected"'; } ?> value="Iklan Baris Business">Iklan Baris Business</option>
                            <option <?php if ($_GET['type']=='ib' && $_GET['id']=='3') { echo 'selected="selected"'; } ?> value="Iklan Baris Pro">Iklan Baris Pro</option>
                            <option <?php if ($_GET['type']=='ib' && $_GET['id']=='4') { echo 'selected="selected"'; } ?> value="Iklan Baris Ultra">Iklan Baris Ultra</option>
                        </select>
                    </div>
                </div>

                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="<?php echo $baseUrl; ?>syarat.php"></iframe>
                </div>
                <div class="col-md-6">
                    <br />
                    <input type="checkbox" class="big-checkbox" name="setuju" value="1" />
                    <p style="margin-top:-48px; margin-left:40px;"><strong>Dengan Mencentang pemberitahuan ini anda kami anggap setuju dengan ketentuan Kami</strong> dan anda akan diredirect ke halaman pemilihan template</p>
                </div>
                <div class="col-md-6">
                    <div class="g-recaptcha" style="margin-top:10px;padding-bottom:30px;" data-sitekey="6LeZHxUTAAAAAFPdnIwqZJqhtIYQMVWZz1rd-g10"></div>
                </div>
                <br />
                <br />
                <center>
                    <input type="submit" name="isiform" class="btn btn-success btn-lg" value="Submit dan Lanjut" />
                </center>
                <br />
                <br />
            </form>
        </div>

    </div>

    </section><!--/#bottom-->

<!-- // CONTACT END-->

<?php include('footer.php'); ?>