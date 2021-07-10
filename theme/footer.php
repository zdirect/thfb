<footer id="footer">
    <div class="container">
        <h2><?php echo get_field('footer_group', 'option')['title_footer']?></h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-maps">
                    <h3><?php echo get_field('footer_group', 'option')['title_maps']?></h3>
                    <div class="footer-maps-item">
                        <?php echo get_field('footer_group', 'option')['maps']?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-contact">
                    <h3><?php echo get_field('footer_group', 'option')['title_contact']?></h3>
                    <div class="footer-contact-back">
                        <div class="footer-contact-top">
                            <?php echo get_field('footer_group', 'option')['text']?>
                        </div>
                        <div class="footer-contact-phone">
                            <?php foreach( get_field('footer_group', 'option')['phones'] as $value ):?>
                                <a href="tel:<?php echo str_replace( array('+', ' ', '(', ')', '-'), null, $value['text'] )?>"><?php echo $value['text']?></a>
                            <?php endforeach?>
                        </div>
                        <div class="footer-contact-soc">
                            <?php foreach( get_field('footer_group', 'option')['socials'] as $value ):?>
                                <a href="<?php echo $value['link']?>" target="_blank"><img src="<?php echo $value['icon']['url']?>" alt="<?php echo $value['icon']['alt']?>" target="blank"></a>
                            <?php endforeach?>
                        </div>
                        <div class="footer-contact-policy">
                            <a href="<?php echo get_field('footer_group', 'option')['link']['url']?>"><?php echo get_field('footer_group', 'option')['link']['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-cont">
                    <h3>CONTACT FORM</h3>
                    <div class="footer-contact-form">
                        <form action="<?php echo admin_url('admin-ajax.php')?>" class="send-form" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="orders">
                            <div class="footer-inp">
                                <input type="text" placeholder="Your Full Name*" name="name">
                            </div>	
                            <div class="footer-inp">
                                <input type="text" placeholder="Contact Telephone*" name="phone">
                            </div>	
                            <div class="footer-inp">
                                <input type="email" placeholder="Email*" name="email" required>
                            </div>	
                            <div class="footer-textarea">
                                <textarea placeholder="Massage Details" name="details"></textarea>
                            </div>
                            <div class="google-captha">
                                <div class="g-recaptcha" data-sitekey="6Ld_xYYbAAAAAFvRGNDmsKGQ2JoY4LbZP-DAbQpL"></div>
                                <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                            <div class="google-message">
                                checking Google captcha
                            </div>
                            <button>Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-top anchor">
            <a href="#main">
                <img src="<?php echo TEMPLATE_PATH?>/images/scroll-top.svg" alt="">
            </a>
        </div>
        <div class="container">
            <?php echo get_field('footer_group', 'option')['copyright']?>
        </div>
    </div>
</footer>
<div id="thanks" style="display: none;">
    <h3><?php echo get_field('popup_thanks', 'option')['text']?></h3>
</div>

<script src="<?php echo TEMPLATE_PATH ?>/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo TEMPLATE_PATH ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo TEMPLATE_PATH ?>/js/slick.min.js"></script>
<script src="<?php echo TEMPLATE_PATH ?>/js/main.js"></script>

<?php 
wp_footer();