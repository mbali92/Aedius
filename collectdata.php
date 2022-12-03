<?php
    include('conn.php'); 
    
    function collectData(){
        global $conn;
        global $heroText;
        global $svrCardOne;
        global $svrCardTwo;
        global $svrCardThree;
        global $processCard;
        global $testimonials;
        global $widgetContent;
        global $aboutPageInfo;
        global $aboutCard;
        global $teamCard;
        global $engCard;
        global $simuSvrDetails;
        global $techSvrDetails;
        global $proPageTitle;
        global $simuCard;
        global $bulkDetails;
        global $bulklist;
        global $processDetails;
        global $processlist;
        global $mechDetails;
        global $mechlist;
        global $finiteDetails;
        global $finitelist;
        global $descreteDetails;
        global $descretelist;
        global $techDetails;
        global $techlist;
        global $proSideBar;
        global $proSideList;
        global $proBrief;
        global $proDetails;

        $sql_select = "SELECT * FROM aediustable"; 
        $results = mysqli_query($conn,$sql_select);
        if(mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_assoc($results)){
                $row['page'] =='hero-text'? $heroText = json_decode($row['pageContent'],true) :'';
                $row['page'] =='service-text-one'? $svrCardOne = json_decode($row['pageContent'],true) :'';
                $row['page'] =='service-text-two'? $svrCardTwo = json_decode($row['pageContent'],true) :'';
                $row['page'] =='service-text-three'? $svrCardThree = json_decode($row['pageContent'],true) :'';
                $row['page'] =='work-pro-item'? $processCard = json_decode($row['pageContent'],true) :'';
                $row['page'] =='testimonial-box'? $testimonials = json_decode($row['pageContent'],true) :'';
                $row['page'] =='widget-content'? $widgetContent= json_decode($row['pageContent'],true) :'';
                $row['page'] =='about-info-text'? $aboutPageInfo= json_decode($row['pageContent'],true) :'';
                $row['page'] =='about-card'? $aboutCard = json_decode($row['pageContent'],true) :'';
                $row['page'] =='team-content'? $teamCard = json_decode($row['pageContent'],true) :'';
                $row['page'] =='eng-card-text'? $engCard = json_decode($row['pageContent'],true) :'';
                $row['page'] =='simulation-svr'? $simuSvrDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] =='tech-svr'? $techSvrDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'project-page-title' ? $proPageTitle = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'simu-card-text' ? $simuCard = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'bulk-svr' ? $bulkDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'bulk-list' ? $bulklist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'process-svr' ? $processDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'process-list' ? $processlist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'mech-svr' ? $mechDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'mech-list' ? $mechlist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'finite-svr' ? $finiteDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'finite-list' ? $finitelist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'descrete-svr' ? $descreteDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'descrete-list' ? $descretelist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'tech-svr' ? $techDetails = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'tech-list' ? $techlist = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'project-sidebar' ? $proSideBar = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'project-sidelist' ? $proSideList = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'pro-brief' ? $proBrief = json_decode($row['pageContent'],true) :'';
                $row['page'] == 'project-page-img-box' ? $proDetails = json_decode($row['pageContent'],true) :'';
            }
        }
    }
    collectData();

    function accessValue($parentBox, $idValue){
        if($parentBox){
            for($i=0; $i < count($parentBox); $i++){ echo $parentBox[$i]['id'] == $idValue ? $parentBox[$i]['value']:'';}
        }
    } 
    function accessList($parentBox){
        if($parentBox){
            for ($i=0; $i < count($parentBox) ; $i++) { 
               echo '<li><span class="lni lni-check-mark-circle"></span>'.$parentBox[$i].'<span class="lni lni-close"></span></li>';
            }
        }
    }

?>
