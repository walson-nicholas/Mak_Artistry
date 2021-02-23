<?php
    $title = 'Makartistry Shop'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/shop.css">
<link rel="stylesheet" href="assets/shopBox.css">
</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> Boxes & Packaging </div>
        <div id="headTitleWeb"> Boxes & Packaging </div>
        <hr id="headLine2">

    </div>

    <div class="content">
        
        <div class="sort">
            <div>SORT <span id="caret">^</span> </div>
            <hr>
            <div> FILTER </div>
        </div>
    
        <div class="shopItemsContainer">

            <div class="shopItems">
                <img src="images/mobile-images/shop_box_1_header.jpg" alt="#"> <br>
                <a href="shopBox2.php"><p>Flip open satin ribbon box</p></a>
                <span>N2,650</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_box_2.jpg" alt="#"> <br>
                <a href="#"><p>Red stripped christmas boxes</p></a>
                <span>N3,000</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_box_3.jpg" alt="#"> <br>
                <a href="#"><p>Groomsmen boxes</p></a>
                <span>N1,700</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

        </div>
    
        <script>
            function like(x) {
                if (x.innerHTML === "🤍") {x.innerHTML="❤️";}
    
                else {x.innerHTML="🤍";} 
            }
        </script>

        <br> <br> <br> <br>
    </div>
</body>
</html>