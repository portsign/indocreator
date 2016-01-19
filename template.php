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
        $tipe = 'Toko Online';
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

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Arts School)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/arts-school.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-4">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/arts-school.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Auberge)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/auberge.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-5">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/auberge.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Beautyou)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/beautyou.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-6">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/beautyou.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Carrot)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/carrot.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-7">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/carrot.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Construction)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/construction.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-8">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/construction.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Dekor)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/dekor.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-9">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/dekor.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Deliccio)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/deliccio.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-10">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/deliccio.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Easy Recharge)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/easy_recharge.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-11">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/easy_recharge.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Elite Furniture)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/elite_furniture.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-12">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/elite_furniture.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Fitter)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/fitter.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-13">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/fitter.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Hallooou)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/hallooou.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-14">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/hallooou.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Home Decore)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/home_decore.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-15">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/home_decore.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Justice)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/justice.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-16">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/justice.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Legalized)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/legalized.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-17">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/legalized.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Luxus)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/luxus.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-18">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/luxus.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Motel)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/motel.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-19">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/motel.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Native Wild)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/native_wild.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-20">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-20" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/native_wild.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Residence)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/residence.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-21">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/residence.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Rugby)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/rugby.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-22">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/rugby.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Scientist)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/scientist.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-23">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-23" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/scientist.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Spasol)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/spasol.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-24">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-24" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/spasol.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Tutelage)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/tutelage.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-25">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-25" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/tutelage.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Company Profile (Yummy)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/CP/yummy.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-cp-26">Lihat Detail</button>
                </label> 
                <div class="modal fade bs-example-modal-lg-cp-26" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/CP/yummy.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>


                
            <?php 
                } else if ($_GET['type']=='os') {
                ?>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (E-shopper)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/E_SHOPPER.png" width="260" height="165" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-1">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/E_SHOPPER.png" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Amberegul)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/amberegul.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-2">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/amberegul.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Big Shope)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/bigshope.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-3">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/bigshope.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Bike Shop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/bike_shop.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-4">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/bike_shop.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Biruang)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/biruang.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-5">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/biruang.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Box Shop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/box_shop.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-6">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/box_shop.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Buy Shop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/buy_shop.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-7">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/buy_shop.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (E-Shop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/e-shop.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-8">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/e-shop.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Eagle Cloths)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/eaglecloths.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-9">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/eaglecloths.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (E-Shop UI Kit)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/eshop_uikit.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-10">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/eshop_uikit.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Extro Electronics)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/extro-electronics-web.jpg" width="260" height="165" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-11">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/extro-electronics-web.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Fashion Mania)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/fashion_mania.jpg" width="260" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-12">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/fashion_mania.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Foose Shoes)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/fooseshoes-web.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-13">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/fooseshoes-web.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Free Style)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/free_style.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-14">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/free_style.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Gifty)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/gifty.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-15">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/gifty.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Gretong)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/gretong.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-16">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/gretong.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Home Shoppe)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/home_shoppe-web1.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-17">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/home_shoppe-web1.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Leoshop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/leoshop-web.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-18">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/leoshop-web.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Lighting)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/lighting.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-19">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/lighting.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Lookz)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/lookz.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-20">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-20" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/lookz.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Luxury Furnish)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/luxury_furnish.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-21">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/luxury_furnish.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Markito)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/markito.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-22">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/markito.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Mobile Store)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/mobilestore-web.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-23">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-23" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/mobilestore-web.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (N Air)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/n_air.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-24">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-24" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/n_air.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (New Fashions)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/new_fashions.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-25">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-25" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/new_fashions.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (New Omnis Store)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/new_omnis_store.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-26">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-26" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/new_omnis_store.jpg" />
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <label class="btn btn-default">
                    <input type="radio" name="quality[25]" checked="checked" value="Toko Online (Nuevo Shop)" /> 
                    <img src="<?php echo $baseUrl; ?>images/portfolio/OS/nuevo_shop.jpg" width="260"  height="160" />
                    <button class="btn btn-primary" style="position:absolute; margin-left:-95px;" 
                    data-toggle="modal" data-target=".bs-example-modal-lg-os-27">Lihat Detail</button>
                </label>
                <div class="modal fade bs-example-modal-lg-os-27" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <img src="<?php echo $baseUrl; ?>images/portfolio/OS/nuevo_shop.jpg" />
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