<?php
    $title = 'Makartistry Blog'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/blog.css">

</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> BLOG </div>
        <div id="headTitleWeb"> Learn and experience our journey </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <div class="servicesContainer">

            <div class="services">
                
                <div class="servicesContent" id="content1">
                    <div class="servicesLabel">The Candy Worp</div>
                    <a href="#"><div class="servicesView">READ</div></a>
                    <div class="servicesWriteUp">This new design reminds me of some creamy sweet goodness somewhre in the cosmos ...</div>
                </div>
            
                <div class="servicesContent" id="content2">
                    <div class="servicesLabel">The Art of Boxes</div>
                    <a href="blogArtOfBoxes.php"><div class="servicesView">READ</div></a>
                    <div class="servicesWriteUp">It’s more than just a box, it’s an entity of its own, with the ability to connect and ...</div>
                </div>
            
                <div class="servicesContent"  id="content3">
                    <div class="servicesLabel">NEW! Get a Quote </div>
                    <a href="#"><div class="servicesView">READ</div></a>
                    <div class="servicesWriteUp">We have a new feature! Get a price quote in seconds in 5 easy steps...</div>
                </div>
            
                <div class="servicesContent" id="content4">
                    <div class="servicesLabel">Our Story</div>
                    <a href="#"><div class="servicesView">READ</div></a>
                    <div class="servicesWriteUp">The story of Mak Artistry. where we are and where we are going, an  agent of change and ...</div>
                </div>
                
            </div>
    
        </div>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>

</body>
</php>