<?php 
    $link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $baseUrl     = "http://$_SERVER[HTTP_HOST]/";
    $url = $link;
    $path = parse_url($url, PHP_URL_PATH);
    $segments = explode('/', rtrim($path, '/'));
?>
<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo $baseUrl; ?>images/main_header_logo_2.png" width="200" /></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if (end($segments)=='') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>">Home</a></li>
                        <li <?php if (end($segments)=='harga') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>harga">Harga Website</a></li>
                        <li <?php if (end($segments)=='desain') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>desain">Desain Website</a></li>
                        <li <?php if (end($segments)=='contact') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>contact">Kontak</a></li>
                        <li <?php if (end($segments)=='article') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>article">Artikel</a></li>
                        <li <?php if (end($segments)=='caraorder') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>caraorder">Cara Pesan</a></li>
                        <li <?php if (end($segments)=='tos') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>tos">TOS</a></li>
                        <li <?php if (end($segments)=='download') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>download">Download</a></li> 
                        <li <?php if (end($segments)=='faq') { echo 'class="scroll active"'; } ?> ><a href="<?php echo $baseUrl; ?>faq">FAQ</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->