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