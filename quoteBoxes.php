<?php
    $title = 'Makartistry Get A Quote'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/quoteGenerate.css">
</head>

<body>
    <div class="header" style="background-image: url(images/mobile-images/quote_boxes_header.jpg);">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> Boxes & <br> Packaging </div>
        <div id="headTitleWeb"> Boxes & Packaging </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <p id="p1"> Select Options </p>

        <div id="orderDetails">

            <div class="group">

                <div id="sizesBtn" class="preference" onclick="mad()" onkeydown="myFunction()">
                    Type
                    <span id="span1">&#9660;</span>
                </div>

                <ul id="sizes">
                    <li><a onclick="crazy(this)" href="#">Greeting Cards</a></li>
                    <li><a onclick="crazy(this)" href="#">Complimetary Cards</a></li>
                    <li><a onclick="crazy(this)" href="#">Thank you cards</a></li>
                    <li><a onclick="crazy(this)" href="#">Book Marks</a></li>
                    <li><a onclick="crazy(this)" href="#">Wrapping paper</a></li>
                    <li><a onclick="crazy(this)" href="#">Post Cards</a></li>
                </ul>

            </div>

            <div class="group">

                <div id="stylesBtn" class="preference" onclick="mad2()" onkeydown="myFunction2()">
                    Style
                    <span id="span2">&#9660;</span>
                </div>

                <ul id="styles">
                    <li><a onclick="crazy2(this)" href="#">Flat</a></li>
                    <li><a onclick="crazy2(this)" href="#">Open</a></li>
                </ul>

            </div>

            <div class="group">

                <div id="coversBtn" class="preference" onclick="mad3()" onkeydown="myFunction3()">
                    Print Selection
                    <span id="span3">&#9660;</span>
                </div>

                <ul id="covers">
                    <li><a onclick="crazy3(this)" href="#">single sided</a></li>
                    <li><a onclick="crazy3(this)" href="#">double sided</a></li>
                </ul>

            </div>

            <div class="group">

                <div id="pagesBtn" class="preference" onclick="mad4()" onkeydown="myFunction4()">
                    Lamination
                    <span id="span4">&#9660;</span>
                </div>

                <ul id="pages">
                    <li><a onclick="crazy4(this)" href="#">Matte</a></li>
                    <li><a onclick="crazy4(this)" href="#">Glass</a></li>
                    <li><a onclick="crazy4(this)" href="#">None</a></li>
                </ul>

            </div>

            <div class="group">

                <div id="quantityBtn" class="preference" onclick="mad5()" onkeydown="myFunction5()">
                    Quantity
                    <span id="span5">&#9660;</span>
                </div>

                <ul id="quantity">
                    <li><a onclick="crazy5(this)" href="#">1</a></li>
                    <li><a onclick="crazy5(this)" href="#">2-5</a></li>
                    <li><a onclick="crazy5(this)" href="#">6-10</a></li>
                    <li><a onclick="crazy5(this)" href="#">11-25</a></li>
                    <li><a onclick="crazy5(this)" href="#">26-50</a></li>
                    <li><a onclick="crazy5(this)" href="#">51-100</a></li>
                    <li><a onclick="crazy5(this)" href="#">101-150</a></li>
                    <li><a onclick="crazy5(this)" href="#">151-200</a></li>
                    <li><a onclick="crazy5(this)" href="#">201-250</a></li>
                    <li><a onclick="crazy5(this)" href="#">251-300</a></li>
                    <li><a onclick="crazy5(this)" href="#">301-500</a></li>
                    <li><a onclick="crazy5(this)" href="#">501-1000</a></li>
                    <li><a onclick="crazy5(this)" href="#">1000+</a></li>
                </ul>
                
            </div>

            <script>

                function mad() {
                    ul = document.getElementById("sizes");
                    ul.style.display = "block";
                }
                function crazy(x) {
                    input = document.getElementById("sizesBtn");
                    d = x.innerHTML;
                    input.innerHTML = d;
                    ul = document.getElementById("sizes");
                    ul.style.display = "none";
                    document.getElementById("span1").style.display = "none";
                }

                function mad2() {
                    ul = document.getElementById("styles");
                    ul.style.display = "block";
                }                
                function crazy2(x) {
                    input = document.getElementById("stylesBtn");
                    d = x.innerHTML;
                    input.innerHTML = d;
                    ul = document.getElementById("styles");
                    ul.style.display = "none";
                    document.getElementById("span2").style.display = "none";
                }

                function mad3() {
                    ul = document.getElementById("covers");
                    ul.style.display = "block";
                }                
                function crazy3(x) {
                    input = document.getElementById("coversBtn");
                    d = x.innerHTML;
                    input.innerHTML = d;
                    ul = document.getElementById("covers");
                    ul.style.display = "none";
                    document.getElementById("span3").style.display = "none";
                }

                function mad4() {
                    ul = document.getElementById("pages");
                    ul.style.display = "block";
                }                
                function crazy4(x) {
                    input = document.getElementById("pagesBtn");
                    d = x.innerHTML;
                    input.innerHTML = d;
                    ul = document.getElementById("pages");
                    ul.style.display = "none";
                    document.getElementById("span4").style.display = "none";
                }

                function mad5() {
                    ul = document.getElementById("quantity");
                    ul.style.display = "block";
                }                
                function crazy5(x) {
                    input = document.getElementById("quantityBtn");
                    d = x.innerHTML;
                    input.innerHTML = d;
                    ul = document.getElementById("quantity");
                    ul.style.display = "none";
                    document.getElementById("span5").style.display = "none";
                }
        
            </script>
            
        </div>

        <div id="generate" onclick="genQuote()">
            Generate Quote

            <script>

                function genQuote(){
                    document.getElementById("generate").style.display = "none";
                    document.getElementById("p1").style.display = "none";
                    document.getElementById("orderDetails").style.paddingTop = "16.533vw";
                    document.getElementById("amount").style.display = "flex";
                    document.getElementById("confirm").style.display = "flex";
                    document.getElementById("share").style.display = "flex";
                    document.getElementById("save").style.display = "flex";
                    document.getElementById("back").style.display = "flex";
                }
    
            </script>
            
        </div>

        <div id="amount">
            <span>$</span>
            <span>&#9660;</span>
            <span>25,000 - 26,400</span>
        </div>

        <a href="quoteConfirm.php">
            <div id="confirm">
                Confirm Quote
            </div>
        </a>

        <div id="share">
            Share Quote
        </div>

        <div id="save">
            Save Quote
        </div>

        <a href="quote.php"><pre id="back"> &#x2190;     Back to Get A Quote</pre></a>

        <br> <br> <br>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>

</body>
</html>