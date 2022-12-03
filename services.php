<!DOCTYPE html>
<html lang="en">
    <?php include('head.php')?>
<body>
    <?php include('nav.php')?>
    <div class="pages-header" style="background-image: url(contact.jpg);">
        <div class="pages-header-text d-flex justify-content-center align-items-center">
            <h1>Our Services</h1>
        </div>
    </div>
    <div class="service-page-text">
       <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <ul class="srv-sidebar">
                        <li class="service-page-link"> <p>Engineering</p> <span class='lni lni-arrow-right'></span></li>
                        <li class="service-page-link"> <p>Simulation</p><span class='lni lni-arrow-right'></span></li>
                        <li class="service-page-link"> <p>Project management</p><span class='lni lni-arrow-right'></span></li>
                    </li>
                </div>
                <div class="col-md-9" id="svr-link-Error">
                    <h6>Service You Clicked is currently not offered</h6>
                </div>
                <div class="col-lg-9 col-md-12  service-details" style='display: none;' id='Engineering'>
                    <div class="eng-svr-deatils" id='eng-svr-deatils'>
                        <div class="eng-card">
                            <img src="<?php accessValue($engCard, 'eng-img-one');?>" alt="">
                            <div class="eng-card-text">
                                <input type="file" class='file-edit' id="eng-img-one">
                                <h4>Title one </h4>
                                <span class='text-edits' contenteditable='true' id='eng-cardtitle'>Bulk engineering</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ducimus modi explicabo ab perspiciatis officia 
                                    ipsa architecto.</p>
                                <span class='text-edits' contenteditable='true' id='eng-cardtext'>Text</span>
                                <!--<span class='eng-svrbtn' id='Bulk'>Read more</span>-->
                            </div>
                        </div>
                        <div class="eng-card">
                            <img src="<?php accessValue($engCard, 'eng-img-two');?>" alt="">
                            <div class="eng-card-text">
                                <input type="file" class='file-edit' id="eng-img-">
                                <h4>Title two</h4>
                                <span class='text-edits' contenteditable='true' id='eng-cardtitletwo'>Mechanical title </span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ducimus modi explicabo ab perspiciatis officia 
                                    ipsa architecto.</p>
                                <span class='text-edits' contenteditable='true' id='eng-cardtexttwo'>Text</span>
                                <!--<span class='eng-svrbtn' id='Mechanical'>Read more</span>-->
                            </div>
                        </div>
                        <div class="eng-card">
                            <img src="<?php accessValue($engCard,'eng-img-three');?>" alt="">
                            <div class="eng-card-text">
                                <input type="file" class='file-edit' id="eng-img-three">
                                <h4>Title three</h4>
                                <span class='text-edits' contenteditable='true' id='eng-cardtitleThree'>Process title</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ducimus modi explicabo ab perspiciatis officia 
                                    ipsa architecto.</p>
                                <span class='text-edits' contenteditable='true' id='eng-cardtextthree'>Text</span>
                                <!--<span class='eng-svrbtn' id='Process'>Read more</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="svr-slide-arrows d-flex flex-row justify-content-end">
                        <i class="lni lni-chevron-left" id='prev-svr-btn'></i>
                        <i class="lni lni-chevron-right" id='next-svr-btn'></i>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details" style='display: none;' id='Simulation'>
                    <div class="simu-svr-deatils" id='simu-svr-deatils'>
                        <div class="simu-card">
                            <img src="<?php accessValue($simuCard, 'simu-img-one');?>" alt="">
                            <div class="simu-card-text">
                                <input type="file" class='file-edit' id='simu-img-one'>
                                <h4>Title one</h4>
                                <span class='text-edits' contenteditable='true' id='simu-cardtitle'>Descrete engineering title</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ducimus modi explicabo ab perspiciatis officia 
                                    ipsa architecto.</p>
                                <span class='text-edits' contenteditable='true' id='simu-cardtext'>Text</span>
                                <!--<span class='simu-svrbtn' id='Finite'>Read more</span>-->
                            </div>
                        </div>
                        <div class="simu-card">
                            <img src="<?php accessValue($simuCard, 'simu-img-two')?>" alt="">
                            <div class="simu-card-text">
                                <input type="file" class='file-edit' id='simu-img-two'>
                                <h4>Title two</h4>
                                <span class='text-edits' contenteditable='true' id='simu-cardtitletwo'>Title</span>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ducimus modi explicabo ab perspiciatis officia 
                                    ipsa architecto.</p>
                                <span class='text-edits' contenteditable='true' id='simu-cardtexttwo'>Text</span>
                                <!--<span class='simu-svrbtn' id='Descrete'>Read more</span>-->
                            </div>
                        </div>
                    </div>
                    <div class="svr-slide-arrows flex-row justify-content-end">
                        <i class="lni lni-chevron-left" id='prev-svr-btn'></i>
                        <i class="lni lni-chevron-right" id='next-svr-btn'></i>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Bulk'>
                    <div class='bulk-svr'>
                        <img src="<?php accessValue($engCard, 'eng-img-one');?>" alt="" class='svr-big-imgs'>
                        <h2><?php accessValue($engCard, 'eng-cardtitle');?></h2>
                        <p><?php accessValue($bulkDetails, 'bulk-scttext');?></p>
                        <span class='text-edits' contenteditable='true' id='bulk-scttextt'>Text</span>
                        <ul class='bulk-list'>
                            <?php accessList($bulklist)?>
							<span class='text-edits' contenteditable='true' id='list-item'> List of items</span>
                        </ul>
                        <button style='display:none' class="default-btn">read more</button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Process'>
                    <div class='process-svr'>
                        <img src="<?php accessValue($engCard,'eng-img-three');?>" alt="" class='svr-big-imgs'>
                        <h2><?php accessValue($engCard, 'eng-cardtitleThree');?></h2>
                        <span class='text-edits' contenteditable='true' id='process-title'>Third Engineering title</span>
                        <p></p>
                        <span class='text-edits' contenteditable='true' id='process-scttextt'>Text</span>
                        <ul class='process-list'>
                            <?php accessList($processlist)?>
							<span class='text-edits' contenteditable='true' id='list-item'>List of items</span>
                        </ul>
                        <button style='display:none' class="default-btn">read more</button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Mechanical'>
                    <div class='mech-svr'>
                        <img src="<?php accessValue($engCard, 'eng-img-two');?>" alt="" class='svr-big-imgs'>
                        <h2><?php accessValue($engCard, 'eng-cardtitletwo');?></h2>
                        <p><?php accessValue($mechDetails,'mech-scttext');?></p>
                        <span class='text-edits' contenteditable='true' id='mech-scttextt'>Text</span>
                        <ul class='mech-list'>
                            <?php accessList($mechlist)?>
							<span class='text-edits' contenteditable='true' id='list-item'>List of items</span>
                        </ul>
                        <button style='display:none' class="default-btn">read more</button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Finite'>
                    <div class='finite-svr'>
                        <img src="<?php accessValue($simuCard,'simu-img-one')?>" alt="" class='svr-big-imgs'>
                        <h2><?php accessValue($simuCard, 'simu-cardtitle')?></h2>
                        <p><?php accessValue($finiteDetails,'finite-scttext');?></p>
                        <span class='text-edits' contenteditable='true' id='finite-scttextt'>Text</span>
                        <ul class='finite-list'>
                            <?php accessList($finitelist)?>
							<span class='text-edits' contenteditable='true' id='list-item'>List of items</span>
                        </ul>
                        <button style='display:none' class="default-btn">read more</button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Descrete'>
                    <div class='descrete-svr'>
                        <img src="<?php accessValue($simuCard, 'simu-img-two')?>" alt="" class='svr-big-imgs'>
                        <h2><?php accessValue($simuCard, 'simu-cardtitletwo')?></h2>
                        <p><?php accessValue($descreteDetails,'descrete-scttext');?></p>
                        <span class='text-edits' contenteditable='true' id='descrete-scttextt'>Text</span>
                        <ul class='descrete-list'>
                            <?php accessList($descretelist)?>
							<span class='text-edits' contenteditable='true' id='list-item'>List of items</span>
                        </ul>
                        <button style='display:none' class="default-btn">read more</button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12  service-details"  style='display: none;' id='Project management'>
                    <div class='tech-svr'>
                        <img src="<?php accessValue($techDetails, 'manage-img');?>" alt="" class='svr-big-imgs'>
                        <input type="file" class='file-edit' id='manage-img'>
                        <h2>Title one</h2>
                        <span class='text-edits' contenteditable='true' id='tech-scttitle'></span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt minus aliquam ea vitae aspernatur! Ratione natus 
                            obcaecati, modi totam architecto illum necessitatibus consequatur 
                            excepturi explicabo autem? Atque tempora ex consequuntur!
                        </p>
                        <span class='text-edits' contenteditable='true' id='tech-scttext'>Text</span>
                        <ul class='tech-list'>
                            <?php accessList($techlist)?>
							<span class='text-edits' contenteditable='true' id='list-item'>List of items</span>
                        </ul> 
                        <button class="default-btn">read more</button>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <?php include('footer.php')?> 
    <script src="Plugins/js/service.js"></script>
    <script src="Plugins/js/page.js"></script>
</body>
</html>