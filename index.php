<?php 
include('header.php'); 
include('navbar.php'); 
if (isset($_GET['sub'])) {} else {
include('slider.php'); } ?>

<!-- // HOME PAGE -->
<?php 
$link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = $link;
$path = parse_url($url, PHP_URL_PATH);
$segments = explode('/', rtrim($path, '/'));
?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">

            <?php if (isset($_GET['sub'])) { ?>

            <h3>Terimakasih telah subscribe IndoCreator. <small>Cek email anda untuk mendapatkan informasi yang lebih detail</small></h3>
            <a href="<?= $baseUrl ?>" class="btn btn-primary">Kembali ke Home</a>
            <?php } else { ?>
                <div class="col-sm-9">
                    <h2>Kenapa Memilih Kami?</h2>
                    <p>Kami memiliki pengalaman 5 tahun lebih dalam membuat website yang dinamis, elegan serta user friendly dan mudah untuk anda kelola. Kami mengutamakan keamanan pada website anda. website merupakan sarana untuk menjual produk dan jasa, berinteraksi dengan calon customer, Sebagai media perkenalkan profil perusahaan dan masih banyak sekali keuntungan dalam memiliki sebuah website. oleh karena itu kami akan membantu anda dalam mewujudkan impian anda.
                    </p>
                    <h4>Please Subscribe</h4>
                    <form action="<?= $baseUrl; ?>record" method="POST">
                        <?php 
                        if (end($segments)=='em') {
                            echo '<br /><span style="color:orange">Email anda sudah terdaftar</span>';
                        }
                        ?>
                        <input id="email" type="email" name="email" class="form-control col-3-form" Placeholder="Email Anda" required />
                        <?php 
                        if (end($segments)=='req') {
                            echo '<br /><span style="color:red">pastikan anda bukan robot</span>';
                        }
                        ?>
                        <div id="captcha" class="g-recaptcha" style="margin-top:10px;" data-sitekey="6LeZHxUTAAAAAFPdnIwqZJqhtIYQMVWZz1rd-g10"></div>
                        <input type="submit" class="btn btn-primary btn-subscribe" name="subscribe" value="Subscribe" />
                    </form>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="<?php echo $baseUrl; ?>harga">Lihat Harga!</a>
                </div>
            <?php } ?>
            </div>
        </div>
    </section><!--/#cta-->

<!-- // HOME PAGE END-->

<?php include('footer.php'); ?>