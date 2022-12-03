<!DOCTYPE html>
<html lang="en">
    <?php include('head.php')?>
<body>
    <?php include('nav.php') ?>
    <div class="pages-header" style="background-image: url(tory-bishop.jpg);">
        <div class="pages-header-text d-flex justify-content-center align-items-center">
            <h1>Our Projects</h1>
        </div>
    </div>
    <div class="project-page-sect">
        <div class="container">
           <span class='lni lni-arrow-right'  id='project-backbtn'></span>
            <div class="project-page-cotent" id='project-page-content'>
                <div class="project-page-title">
                    <h4>The list of projects we have done for clients</h4>
                    <p><?php accessValue($proPageTitle,'project-page-title')?></p>
                    <span class='text-edits' contenteditable='true' id='project-page-title'></span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-page-cards">
                            <img src="slider-2.jpg" alt="">
                            <div class="pro-page-cardtext">
                                <h6>Project one</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima quam pariatur laudantium vitae ab
                                     odit.
                                </p>
                                <!--<span class='read-pro-details'>Read more<i class='lni lni-arrow-right'></i></span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-page-cards">
                            <img src="tory-bishop.jpg" alt="">
                            <div class="pro-page-cardtext">
                                <h6>Project two</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima quam pariatur laudantium vitae ab
                                     odit.</p>
                                <!--<span class='read-pro-details'>Read more<i class='lni lni-arrow-right'></i></span>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-page-cards">
                            <img src="contact.jpg" alt="">
                            <div class="pro-page-cardtext">
                                <h6>Project three</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minima quam pariatur laudantium vitae ab
                                     odit.</p>
                                <!--<span class='read-pro-details'>Read more<i class='lni lni-arrow-right'></i></span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="project-sidebar">
                            <h4><?php accessValue($proSideBar,'pro-titleOne')?></h4>
                            <span class='text-edits' contenteditable='true' id='pro-titleOne'></span>
                            <ul class='project-description'>
                                <li class='project-sidelist'>
                                    <div class='d-flex flex-row justify-content-between'>
                                        <p><span class="fa fa-user"></span> Client</p>
                                        <p><?php accessValue($proSideList,'clientname-one')?> </p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='clientname-one'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p><span class="fa fa-tag"></span> Diliverables</p>
                                        <p><?php accessValue($proSideList,'pro-descrOne')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-descrOne'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p> <span class="fa fa-calendar"></span> Date completed</p>
                                        <p class="pro-desc-list"><?php accessValue($proSideList,'pro-dateOne')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-dateOne'></span>
                                </li>
                            </ul>
                            <div class="pro-brief">
                                <h3>Project Brief</h3>
                                <p><?php accessValue($proBrief,'probriefOne')?></p>
                                <span class='text-edits' contenteditable='true' id='probriefOne'></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="project-page-img-box">
                           <img src="<?php accessValue($proDetails,'pro-img-one')?>" alt="" class="main-propage-img">
                           <input type="file" class='file-edit' id='pro-img-one'> 
                           <div class="pro-state">
                                <h3>Problem Statement</h3>
                                <p><?php accessValue($proDetails,'pro-stateOne')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-stateOne'></span>
                           </div>
                           <div class="mod-box">
                                <img src="<?php accessValue($proDetails,'pro-modimg-one')?>" alt="">
                                <img src="<?php accessValue($proDetails,'pro-modimg-two')?>" alt="">
                                <input type="file" class='file-edit' id='pro-modimg-one'> 
                                <input type="file" class='file-edit' id='pro-modimg-two'> 
                                <h3><?php accessValue($proDetails,'two-img-titleOne')?></h3>
                                <span class='text-edits' contenteditable='true' id='two-img-titleOne'></span>
                                <p><?php accessValue($proDetails,'pro-modellingOne')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-modellingOne'></span>
                           </div>
                           <div class="solu-box">
                                <h3>Solution</h3>
                                <p><?php accessValue($proDetails,'pro-solutionOne')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-solutionOne'></span>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="project-sidebar">
                            <h4><?php accessValue($proSideBar,'pro-titletwo')?></h4>
                            <span class='text-edits' contenteditable='true' id='pro-titletwo'></span>
                            <ul class='project-description'>
                                <li class='project-sidelist'>
                                    <div class='d-flex flex-row justify-content-between'>
                                        <p><span class="fa fa-user"></span> Client</p>
                                        <p><?php accessValue($proSideList,'clientname-two')?> </p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='clientname-two'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p><span class="fa fa-tag"></span> Diliverables</p>
                                        <p><?php accessValue($proSideList,'pro-descrtwo')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-descrtwo'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p> <span class="fa fa-calendar"></span> Date completed</p>
                                        <p class="pro-desc-list"><?php accessValue($proSideList,'pro-datetwo')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-datetwo'></span>
                                </li>
                            </ul>
                            <div class="pro-brief">
                                <h3>Project Brief</h3>
                                <p><?php accessValue($proBrief,'probrieftwo')?></p>
                                <span class='text-edits' contenteditable='true' id='probrieftwo'></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="project-page-img-box">
                           <img src="<?php accessValue($proDetails,'pro-img-two')?>" class="main-propage-img"  alt="">
                           <input type="file" class='file-edit' id='pro-img-two'>
                           <div class="pro-state">
                                <h3>Problem Statement</h3>
                                <p><?php accessValue($proDetails,'pro-statetwo')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-statetwo'></span>
                           </div>
                           <div class="mod-box">
                               <img src="<?php accessValue($proDetails,'pro-modimg-three')?>" alt="">
                               <img src="<?php accessValue($proDetails,'pro-modimg-four')?>" alt="">
                               <input type="file" class='file-edit'  id="pro-modimg-three">
                               <input type="file" class='file-edit'  id="pro-modimg-four">
                               <h3><?php accessValue($proDetails,'two-img-titletwo')?></h3>
                               <span class='text-edits' contenteditable='true' id='two-img-titletwo'></span>
                               <p><?php accessValue($proDetails,'pro-modellingtwo')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-modellingtwo'></span>
                           </div>
                           <div class="solu-box">
                                <h3>Solution</h3>
                                <p><?php accessValue($proDetails,'pro-solutiontwo')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-solutiontwo'></span>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="project-sidebar">
                            <h4><?php accessValue($proSideBar,'pro-titlethree')?></h4>
                            <span class='text-edits' contenteditable='true' id='pro-titlethree'></span>
                            <ul class='project-description'>
                                <li class='project-sidelist'>
                                    <div class='d-flex flex-row justify-content-between'>
                                        <p><span class="fa fa-user"></span> Client</p>
                                        <p><?php accessValue($proSideList,'clientname-three')?> </p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='clientname-three'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p><span class="fa fa-tag"></span> Diliverables</p>
                                        <p><?php accessValue($proSideList,'pro-descrthree')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-descrthree'></span>
                                </li>
                                <li class='project-sidelist'>
                                    <div class="d-flex flex-row justify-content-between">
                                        <p> <span class="fa fa-calendar"></span> Date completed</p>
                                        <p class="pro-desc-list"><?php accessValue($proSideList,'pro-datethree')?></p>
                                    </div>
                                    <span class='text-edits' contenteditable='true' id='pro-datethree'></span>
                                </li>
                            </ul>
                            <div class="pro-brief">
                                <h3>Project Brief</h3>
                                <p><?php accessValue($proBrief,'probriefthree')?></p>
                                <span class='text-edits' contenteditable='true' id='probriefthree'></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="project-page-img-box">
                           <img src="<?php accessValue($proDetails,'pro-img-three')?>" alt="" class="main-propage-img">
                           <input type="file" class='file-edit' id='pro-img-three'>
                           <div class="pro-state">
                                <h3>Problem Statement</h3>
                                <p><?php accessValue($proDetails,'pro-statethree')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-statethree'></span>
                           </div>
                           <div class="mod-box">
                                <img src="<?php accessValue($proDetails,'pro-modimg-five')?>" alt="">
                                <img src="<?php accessValue($proDetails,'pro-modimg-six')?>" alt="">
                                <input type="file" class='file-edit' id="pro-modimg-five">
                                <input type="file" class='file-edit' id="pro-modimg-six">
                                <h3><?php accessValue($proDetails,'three-img-titlethree')?></h3>
                                <span class='text-edits' contenteditable='true' id='three-img-titlethree'></span>
                                <p><?php accessValue($proDetails,'pro-modellingthree')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-modellingthree'></span>
                           </div>
                           <div class="solu-box">
                                <h3>Solution</h3>
                                <p><?php accessValue($proDetails,'pro-solutionthree')?></p>
                                <span class='text-edits' contenteditable='true' id='pro-solutionthree'></span>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
    <script src="Plugins/js/project.js"></script>
    <script src="Plugins/js/page.js"></script>
</body>
</html>