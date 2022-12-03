<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>
<body>
    <?php include('nav.php') ?>
    <div class="pages-header" style="background-image: url(contact.jpg);">
        <div class="pages-header-text d-flex justify-content-center align-items-center">
            <h1>About Us</h1>
        </div>
    </div>
    <div class="about-page-section">
       <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="about-info-text">
                        <span class="about-subtitle">Our company information</span>
                        <h2>Why Aedius?</h2>
                        <span class='text-edits' contenteditable=true id='about-title'>About title</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, omnis. Nisi minus quam inventore dolorum atque nihil cumque sapiente quaerat, 
                            fugiat rem! At reiciendis quae, explicabo ducimus neque commodi earum.</p>
                        <span class='text-edits' contenteditable=true id='about-para-one'>First paragraph</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati voluptatibus velit qui
                             veritatis unde ea ex reiciendis animi. Officia iste iure aperiam voluptates ad 
                            facere consequatur nostrum quaerat quibusdam nihil.</p>
                        <span class='text-edits' contenteditable=true id='about-para-two'>Second paragraph</span>
                   </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-card" id="first-about-card">
                                <span class=" lni lni-briefcase about-icon"></span>
                                <h6>Mission</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat blanditiis nesciunt aliquam.</p>
                                <span class='text-edits' contenteditable='true' id='about-mission-text'>Mission text</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card" id="second-about-card">
                                <span class="lni lni-eye about-icon"></span>
                                <h6>Vission</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat blanditiis nesciunt aliquam.</p>
                                <span class='text-edits' contenteditable='true' id='about-vission-text'>Vission text</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card" id="last-about-card">
                                <span class="lni lni-anchor about-icon"></span>
                                <h6>Motto</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat blanditiis nesciunt aliquam.</p>
                                <span class='text-edits' contenteditable='true' id='about-motto-text'>Motto text</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-card" id="last-about-card">
                                <span class="lni lni-helmet about-icon"></span>
                                <h6>Our safety pledge</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore placeat.</p>
                                <span class='text-edits' contenteditable='true' id='about-pledge-text'>Pledge text</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <div class="work-pro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item">
                        <span class='number'>1</span>
                        <span class="work-process-icon lni lni-handshake"></span>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-one')?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, Tempore placeat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item">
                        <span class='number'>2</span>
                        <span class="work-process-icon lni lni-helmet"></span>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-two')?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, Tempore placeat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item" id="work-pro-item-one">
                         <span class='number'>3</span>
                        <span class="work-process-icon lni lni-invention"></span>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-three')?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, Tempore placeat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item " id="work-pro-item-two">
                        <span class='number'>4</span>
                        <span class="work-process-icon lni lni-network"></span>
                        <h3><?php accessValue($processCard,'process-title-four')?></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, Tempore placeat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section" style='display:none'>
        <span class="team-subtitle">Team</span>
        <h2>Speciallized team</h2>
        <div class="container">
            <div class="row box-shadow">
                <div class="col-md-6 col-lg-4">
                    <div class="team-img">
                        <img src="person_1.jpg" alt="">
                        <div class="team-content">
                            <span class='member-title'><?php accessValue($teamCard,'member-title')?></span>
                            <span class='text-edits' contenteditable='true' id='member-title'></span>
                            <h6><?php accessValue($teamCard,'member-name')?></h6>
                            <span class='text-edits' contenteditable='true' id='member-name'></span>
                            <p><?php accessValue($teamCard,'member-details')?></p>
                            <span class='text-edits' contenteditable='true' id='member-details'></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-img">
                        <img src="person_2.jpg" alt="">
                        <div class="team-content">
                            <span class='member-title'><?php accessValue($teamCard,'member-title-two')?></span>
                            <span class='text-edits' contenteditable='true' id='member-title-two'></span>
                            <h6><?php accessValue($teamCard,'member-name-two')?></h6>
                            <span class='text-edits' contenteditable='true' id='member-name-two'></span>
                            <p><?php accessValue($teamCard,'member-details-two')?></p>
                            <span class='text-edits' contenteditable='true' id='member-details-two'></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-img">
                        <img src="team-3.jpg" alt="">
                        <div class="team-content">
                            <span class='member-title'><?php accessValue($teamCard,'member-title-three')?></span>
                            <span class='text-edits' contenteditable='true' id='member-title-three'></span>
                            <h6><?php accessValue($teamCard,'member-name-three')?></h6>
                            <span class='text-edits' contenteditable='true' id='member-name-three'></span>
                            <p><?php accessValue($teamCard,'member-details-three')?></p>
                            <span class='text-edits' contenteditable='true' id='member-details-three'></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="Plugins/js/page.js"></script>
</body>
</html>