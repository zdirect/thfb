<?php 
/*
Template Name: jobs
*/
get_header();
?>

<div class="back-home">
    <div class="aft-back-1">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back1.jpeg" alt="">
    </div>
    <div class="jobs-back">
        <div class="jobs-top">
            <h1><?php echo get_field('title')?></h1>
        </div>
        <div class="jobs-main">

            <div class="jobs-item">
                <div class="container-hd">
                    <div class="jobs-item-flex">
                        <div class="jobs-item-img">
                            <img src="<?php echo get_field('jobs-one')['image']['sizes']['jobs-image']?>" alt="<?php echo get_field('jobs-one')['image']['alt']?>">
                        </div>
                        <div class="jobs-item-txt">
                            <h4><?php echo get_field('jobs-one')['title']?></h4>
                            <?php echo get_field('jobs-one')['text']?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jobs-form">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="jobs-form-item">
                                <h3>THIS IS A SEPARATE PAGE</h3>
                                <form action="<?php echo admin_url('admin-ajax.php')?>" class="send-form-file" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="orders">
                                    <input id="token" type="hidden" name="token">
                                    <div class="form-input-style-two">
                                        <input type="text" placeholder="Your Name*" name="name">
                                        <input type="email" placeholder="Email*" name="email" required>
                                    </div>
                                    <div class="form-input-style-two">
                                        <input type="text" placeholder="Contact Telephone number*" name="phone">
                                        <input type="text" placeholder="Your Location*" name="location">
                                    </div>
                                    <div class="form-input-style-one">
                                        <input type="text" placeholder="What field is your main experience in?*" name="What field">
                                    </div>
                                    <div class="form-input-style-one">
                                        <input type="text" placeholder="What are your strongest skills?" name="skills">
                                    </div>
                                    <div class="form-input-style-one">
                                        <select name="interested">
                                            <option value="work1">Please indicate what type of position you are interested in*</option>
                                            <option value="work2">work2</option>
                                            <option value="work3">work3</option>
                                            <option value="work4">work4</option>
                                        </select>
                                    </div>
                                    <div class="form-input-style-one">
                                        <textarea name="" placeholder="Give more details that you consider importan" name="more details"></textarea>
                                    </div>
                                    <div class="form-input-style-it">
                                        <div class="file-style">
                                            <div class="form-group">
                                            <input type="file" name="file" id="file" class="input-file">
                                            <label for="file" class="btn btn-tertiary js-labelFile">
                                                <i class="icon fa fa-check"></i>
                                                <span class="js-fileName">АTTACH YOUR CV</span>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form_check">
                                            <input id="check-1" type="checkbox" name="privacy" value="1" checked="">
                                            <label for="check-1">I agree to the processing and <br>storage of personal data</label>
                                        </div>
                                    </div>
                                    <div class="form-input-captha">
                                        <div class="g-recaptcha" data-sitekey="6Ld_xYYbAAAAAFvRGNDmsKGQ2JoY4LbZP-DAbQpL"></div>
                                        <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                    </div>
                                    <div class="google-message">
                                        checking Google captcha
                                    </div>
                                    <div class="text-center">
                                        <button>Send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="jobs-form-img">
                                <img src="<?php echo get_field('image_form')['sizes']['jobs-image']?>" alt="<?php echo get_field('image_form')['alt']?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jobs-item">
                <div class="container-hd">
                    <div class="jobs-item-flex">
                        <div class="jobs-item-img">
                            <img src="<?php echo get_field('jobs-two')['image']['sizes']['jobs-image']?>" alt="<?php echo get_field('jobs-two')['image']['alt']?>">
                        </div>
                        <div class="jobs-item-txt">
                            <h4><?php echo get_field('jobs-two')['title']?></h4>
                            <?php echo get_field('jobs-two')['text']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aft-back-2">
        <img src="<?php echo TEMPLATE_PATH ?>/images/aft-back2.jpeg" alt="">
    </div>
</div>

<?php
get_footer();