<!DOCTYPE html>
<?php include('sendmail.php');?>
<html lang="en">
    <?php include('head.php')?>
<body>
    <?php include('nav.php') ?>
    <div class="contact-page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h2>
                            Contact us about your next project!
                        </h2>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Physical address : <br> <?php accessValue($widgetContent,'footer-address')?></p>
                                <p>Email : <br> <?php accessValue($widgetContent,'footer-email')?></p>
                            </div>
                            <div class="col-md-6">
                                <p>Telephone number : <br> <?php accessValue($widgetContent,'footer-tell')?> </p>
                                <p>Phone number : <br> <?php accessValue($widgetContent,'footer-cell')?></p>
                            </div>
                        </div>
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name='name' class="input-text" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name='email' class="input-text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="" cols="30" rows="6" class="input-text" placeholder="Massage"></textarea>
                                </div>
                            </div>
                            <input type="submit" value="send massage" id="contact-btn">
                            <button id='login-btn'>Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.5277791537474!2d28.0572648150267!3d-26.049002583507104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573b3ffe39ca9%3A0xc4faf0e1f68440fe!2s377%20Rivonia%20Blvd%2C%20Rivonia%2C%20Johannesburg%2C%202128!5e0!3m2!1sen!2sza!4v1642449766022!5m2!1sen!2sza"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="Plugins/js/page.js"></script>
    <script src="Plugins/js/contact.js"></script>
</body>
</html>