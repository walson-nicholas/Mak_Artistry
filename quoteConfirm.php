<?php
    $title = 'Makartistry Get A Quote'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/quoteConfirm.css">
</head>

<body>
    <div class="header" style="background-image: url(images/mobile-images/quote_boxes_header.jpg);">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> Notepads <br> & Journals </div>
        <div id="headTitleWeb"> Notepads & Journals </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <div class="confirmQuote">

            <p>CONFIRM QUOTE</p>

            <span id="closeConfirm">×</span>

            <textarea name="additional" id="additional" class="additional" placeholder="Add Additional Details" cols="30" rows="10"></textarea>

            <a href="#">
                <div class="email">
                    <i class="fas fa-envelope"></i>
                    <span>Email</span>
                </div>
            </a>

            <a href="#">
                <div class="whatsApp">
                    <i class="fab fa-whatsapp"></i>
                    <span>whatsApp</span>
                </div>
            </a>

        </div>

        <a href="./MAquote2.html">
            <pre id="back"> &#x2190;     Back to Get A Quote </pre>
        </a>

        <br><br>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>

</body>
</html>