<?php
    $title = 'Makartistry Get A Quote'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/quote.css">

</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> GET A QUOTE </div>
        <div id="headTitleWeb"> GET A QUOTE </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <p id="p1">Get a qoute for our products and services by selecting your preferred options.</p>

        <p id="p2"> Select Category </p>

        <div class="categories">
            <a href="quoteBoxes.php"><div>Boxes & Packaging</div></a>
            <a href="quoteNotepad.php"><div>Notepads & Journals</div></a>
            <a href="quoteCards.php"><div>Cards & Prints</div></a>
            <a href="quoteDigitalArt.php"><div>Digital Art & Illustrations</div></a>       
        </div>
        
        <br> <br> <br>

        <?php include_once('assets/include/footer1.php'); ?>
        
    </div>
</body>
</html>