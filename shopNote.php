<?php
    $title = 'Makartistry Shop'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/shop.css">
<link rel="stylesheet" href="assets/shopNote.css">
</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> Notepads <br> & Journals </div>
        <div id="headTitleWeb"> Notepads & Journals </div>
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
                <img src="images/mobile-images/shop_note_1.jpg" alt="#"> <br>
                <a href="shopNote2.php"><p>A5 hard cover bridesmaids journals</p></a>
                <span>N3,500</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_note_2.jpg" alt="#"> <br>
                <a href="#"><p>A5 Odds Notepad</p></a>
                <span>N1,500</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_note_3.jpg" alt="#"> <br>
                <a href="#"><p>A6 pocket notepad</p></a>
                <span>N750</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_note_4.jpg" alt="#"> <br>
                <a href="#"><p>A5 hard cover bridesmaids journals</p></a>
                <span>N3,500</span>
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