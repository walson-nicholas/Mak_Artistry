<?php
    $title = 'Makartistry Shop'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/shop.css">
<link rel="stylesheet" href="assets/shopCard.css">
</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> Cards & Prints </div>
        <div id="headTitleWeb"> Cards & Prints </div>
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
                <img src="images/mobile-images/shop_card_1_header.jpg" alt="#"> <br>
                <a href="shopCard2.php"><p> A6/A5 Striding Bridesmaid Card</p></a>
                <span>N400 - N1,200</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_card_2.jpg" alt="#"> <br>
                <a href="#"><p>A6/A5 Bad & Boujee card</p></a>
                <span>N400 - N1,200</span>
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