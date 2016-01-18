<?php 
include('header.php'); 
include('navbar.php'); 
session_start();

if (empty($_SESSION['nama']) &&
empty($_SESSION['email']) &&
empty($_SESSION['alamat']) &&
empty($_SESSION['no_telp']) &&
empty($_SESSION['pin_bb']) &&
empty($_SESSION['kepentingan']) &&
empty($_SESSION['jenisweb']) &&
empty($_SESSION['setuju'])) {
    header('Location: '.$baseUrl.'');
}

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
            <button class="btn btn-primary">Submit</button><br /><br />
            <div class="row">
            <div class="btn-group" data-toggle="buttons">


            <?php 
                if (isset($_GET['type'])) {
                    if ($_GET['type']=='cp') {
            ?>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Torque)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/Torque.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-1">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-cp-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/Torque.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Acuario)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/acuario.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-2">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-cp-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/acuario.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Appest)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/appest.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-3">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/appest.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                
            <?php 
                }
            }
            ?>

            </div>
            <br />
            <br />
            <center><button class="btn btn-primary btn-lg">Submit</button></center>

            </div>
        </div>

    </div>

    </section><!--/#bottom-->

<!-- // CONTACT END-->

<?php include('footer.php'); ?>