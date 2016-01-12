<?php 
include('header.php'); 
include('navbar.php'); ?>

<!-- // CONTACT -->
    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="-7.743335" data-longitude="110.411032"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Indocreator, Corp.</strong><br>
                              Jambusari Indah, Jl Jambumete No B12.<br>
                              Maguwoharjo, Depok, Sleman, Yogyakarta<br>
                              <abbr title="Phone">P:</abbr> 089527329779<br /><br />

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

<!-- // CONTACT END-->

<?php include('footer.php'); ?>