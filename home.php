<!DOCTYPE html>
<html lang="en">
    <?php include('head.php')?>
<body>
    <?php include('nav.php') ?>
    <header id=home-header style='background-image:url(contact.jpg)'>
        <div class="container">
            <div class="hero-text">
                <h1> Aedius consulting</h1>
                <span class='text-edits header-edit' contenteditable='true' id='home-header-title'></span>
                <p>AEDiUS (Pty) Ltd is a mechanical engineering consultancy firm committed to deliver quality projects and
                    exceed clients expectations.  
                </p>
                <span class='text-edits header-edit' contenteditable='true' id='home-header-text'>Header text</span>
                <a class="hero-btn" href="about.html">Find Out More</a>
            </div> 
        </div>
    </header>
    <div class="service-section" id="service-section">
        <div class="container">
            <p class="body-subtitle">About Services we offer</p>
            <h2 id="service-title">Our Experties</h2>
            <div class="row"> 
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card d-flex flex-column justify-content-center align-items-center">
                        <i class="svr-big-icon glyph-icon flaticon-015-worker"></i>
                        <div class="service-text-one">
                            <span class="flaticon-015-worker service-icon"></span>
                            <h6>Engineering</h6>
                            <span class='text-edits' contenteditable='true' id='svrcard-onetitle'>Service title</span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, laboriosam cupiditate nam 
                                aliquam.</p>
                            <span class='text-edits' contenteditable='true' id='svrcard-onetext'>Service text</span>
                            <h5 class="service-btn read-more-svr">Read More </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card d-flex flex-column justify-content-center align-items-center">
                        <i class="svr-big-icon flaticon-040-oil-platform"></i>
                        <div class="service-text-two">
                            <span class="flaticon-040-oil-platform service-icon"></span>
                            <h6>Simulation</h6>
                            <span class='text-edits' contenteditable='true' id='svrcard-twotitle'>Service title</span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, laboriosam cupiditate nam 
                                aliquam.</p>
                            <span class='text-edits' contenteditable='true' id='svrcard-twotext'>Service text</span>
                            <h5 class="service-btn read-more-svr">Read More </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card d-flex flex-column justify-content-center align-items-center">
                        <i class="svr-big-icon flaticon-032-gears"></i>
                        <div class="service-text-three">
                            <span class="flaticon-032-gears service-icon"></span>
                            <h6>Metallurgy</h6>
                            <span class='text-edits' contenteditable='true' id='svrcard-threetitle'>Service title</span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, laboriosam cupiditate nam 
                                aliquam.</p>
                            <span class='text-edits' contenteditable='true' id='svrcard-threetext'>Service text</span>
                            <h5 class="service-btn read-more-svr">Read More </h5>
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
                        <i class="work-process-icon lni lni-handshake"></i>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-one')?></h3>
                        <span class='text-edits' contenteditable='true' id='process-title-one'>Process title</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, laboriosam.</p>
                        <span class='text-edits' contenteditable='true' id='process-text-one'>Process text</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item">
                        <span class='number'>2</span>
                        <span class="work-process-icon lni lni-helmet"></span>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-two')?></h3>
                        <span class='text-edits' contenteditable='true' id='process-title-two'>Process title</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur,</p>
                        <span class='text-edits' contenteditable='true' id='process-text-two'>Process text</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item" id="work-pro-item-one">
                         <span class='number'>3</span>
                        <span class="work-process-icon lni lni-invention"></span>
                        <div class="number-line"></div>
                        <h3><?php accessValue($processCard,'process-title-three')?></h3>
                        <span class='text-edits' contenteditable='true' id='process-title-three'>Process title</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur,</p>
                        <span class='text-edits' contenteditable='true' id='process-text-three'>Process text</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item " id="work-pro-item-two">
                        <span class='number'>4</span>
                        <span class="work-process-icon lni lni-network"></span>
                        <h3><?php accessValue($processCard,'process-title-four')?></h3>
                        <span class='text-edits' contenteditable='true' id='process-title-four'></span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur,</p>
                        <span class='text-edits' contenteditable='true' id='process-text-four'></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-section">
        <div class="container">
            <div class="project-title-box ">
                <div class="project-title">
                    <p class="body-subtitle">View list of our Work</p>
                    <h2>Projects we completed for our clients</h2>
                </div>
            </div>
            <div class="project-images">
                <i class="lni lni-chevron-left" id='prev-project'></i>
                <i class="lni lni-chevron-right" id='next-project'></i>
                <div class="project-imgs-row" id='project-imgs-row'>
                    <div class="project-card">
                        <img src="contact.jpg"alt="">
                        <div class="project-text">
                        <div class='project-subtext'>
                            <h5 class='card-pro-btn'><?php accessValue($proSideBar,'pro-titleOne')?></h5>
                        </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="tory-bishop.jpg" alt="">
                        <div class="project-text">
                            <div class='project-subtext'>
                                <h5 class='card-pro-btn'><?php accessValue($proSideBar,'pro-titletwo')?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="slider-2.jpg" alt="">
                        <div class="project-text">
                            <div class='project-subtext'>
                                <h5 class='card-pro-btn'><?php accessValue($proSideBar,'pro-titlethree')?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='project-btn-box'><a href='project.php' class="default-btn" id="home-pro-btn">view all projects</a></div>
            </div>
        </div>
    </div> 
    <div class="testimonial-section" style='background-color#fff; display:none'>
        <div class="container">
            <div class="testi-tittle">
                <span id="sub-text">Testimonial</span>
                <h2>What our clients say </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 testimonial-col">
                    <div class="testimonial-box">
                        <i class="lni lni-quotation qoute-marks"></i>
                        <p><?php accessValue($testimonials,'testi-one-text');?></p>
                        <span class='text-edits' contenteditable='true' id='testi-one-text'>Qoute</span>
                        <h3><?php accessValue($testimonials,'testi-one-name');?></h3>
                        <span class='text-edits' contenteditable='true' id='testi-one-name'>Clients name & surname</span>
                        <span class='clients-company'><?php accessValue($testimonials,'testi-one-title');?></span>
                        <span class='text-edits' contenteditable='true' id='testi-one-title'>Clients company</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 testimonial-col">
                    <div class="testimonial-box">
                        <i class="lni lni-quotation qoute-marks"></i>
                        <p><?php accessValue($testimonials,'testi-two-text');?></p>
                        <span class='text-edits' contenteditable='true' id='testi-two-text'>Qoute</span>
                        <h3><?php accessValue($testimonials,'testi-two-name');?></h3>
                        <span class='text-edits' contenteditable='true' id='testi-two-name'>Clients name & surname</span>
                        <span class='clients-company'><?php accessValue($testimonials,'testi-two-title');?></span>
                        <span class='text-edits' contenteditable='true' id='testi-two-title'>Clients company</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 testimonial-col">
                    <div class="testimonial-box">
                        <i class="lni lni-quotation qoute-marks"></i>
                        <p><?php accessValue($testimonials,'testi-three-text');?></p>
                        <span class='text-edits' contenteditable='true' id='testi-three-text'>Qoute</span>
                        <h3><?php accessValue($testimonials,'testi-three-name');?></h3>
                        <span class='text-edits' contenteditable='true' id='testi-three-name'>Clients name & surname</span>
                        <span class='clients-company'><?php accessValue($testimonials,'testi-three-title');?></span>
                        <span class='text-edits' contenteditable='true' id='testi-three-title'>Clients company</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script src="Plugins/js/page.js"></script>
    <script src="Plugins/js/script.js"></script>
</body>
</html>