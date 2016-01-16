<?php 
include('header.php'); 
include('navbar.php'); 
session_start();

if (isset($_GET['type'])) {
    if ($_GET['type']=='os') {
        $tipe = 'Online Shop';
    }
    if ($_GET['type']=='cp') {
        $tipe = 'Profil Perusahaan (Company Profile)';
    }
    if ($_GET['type']=='pb') {
        $tipe = 'Situs Berita / Portal Berita';
    }
    if ($_GET['type']=='ib') {
        $tipe = 'Iklan Baris';
    }
}

?>

<!-- // CONTACT -->
    <section id="contact">
    <div class="container">
        <br /><br />
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Pemilihan Template</h2>
            <p class="wow text-center fadeInDown">Dibawah ini merupakan template yang kami sediakan untuk kategori <strong><?php echo $tipe; ?></strong> silahkan anda pilih sesuai keinginan anda.</p>
            <br />
            <h4>Template Kategori <?php echo $tipe; ?></h4>
            <p style="margin: -10px -1px 10px;"><i>Setelah anda memilih template, anda akan menerima email berupa</i> </p><br /> 
            <p style="margin: -43px 0 10px;"><i>laporan pendaftaran Anda</i></p>

            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="1" /> 
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label> 
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="2" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label> 
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="3" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label> 
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="4" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label> 
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="5" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="4" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label> 
                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" value="5" />
                    <img src="http://placehold.it/260x180" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;">Lihat Detail</button>
                </label>
            </div>
            
        </div>

    </div>

    </section><!--/#bottom-->

<!-- // CONTACT END-->

<?php include('footer.php'); ?>