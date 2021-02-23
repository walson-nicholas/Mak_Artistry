<?php
    $title = 'Makartistry Portfolio'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/portfolio3.css">

</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

    </div>

    <div class="content">
        
        <div class="productDetails">

            <div class="productImages">
    
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    
                <div class="slides fade">
                    <img src="images/mobile-images/portfolio_31.jpg" alt="#">
                </div>
    
                <div class="slides fade">
                    <img src="images/mobile-images/portfolio_31.jpg" alt="#">
                </div>
    
                <div class="slides fade">
                    <img src="images/mobile-images/portfolio_31.jpg" alt="#">
                </div>
    
                <div class="slides fade">
                    <img src="images/mobile-images/portfolio_31.jpg" alt="#">
                </div>
    
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
            </div>
    
            <div class="indicators" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
    
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
    
                function plusSlides(n) { 
                showSlides(slideIndex += n);
                }
    
                function currentSlide(n) {
                showSlides(slideIndex = n);
                }
    
                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("slides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
    
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
    
                slides[slideIndex-1].style.display = "flex";
                dots[slideIndex-1].className += " active";
                }
            </script>
            
        </div>
    
        <p id="productTitle">Birthday customised gift box</p>
    
        <p id="productDescription">Colour: Hot Pink | Layout: Flip Open Size: 8 x 9 x 3 inches | Category: Birthday</p>
        
        <div class="contentLinks">

            <a href="portfolio.html">
                <div id="portfolioLink">Back to Portfolio</div>
            </a>
        
            <a href="shopBox.html">
                <div id="shopLink">View Shop</div>
            </a>

        </div>
    
        <p id="relatedSearches">Related Searches</p>
    
        <div class="collections">
            
            <a href="#"> <img src="images/mobile-images/portfolio_21.jpg" alt="box 1"> </a>
            <a href="#"> <img src="images/mobile-images/portfolio_22.jpg" alt="box 2"> </a>
            <a href="#"> <img src="images/mobile-images/portfolio_23.jpg" alt="box 3"> </a>
            <a href="#"> <img src="images/mobile-images/portfolio_24.jpg" alt="box 4"> </a>
            <a href="#"> <img src="images/mobile-images/portfolio_25.jpg" alt="box 5"> </a>
            <a href="#"> <img src="images/mobile-images/portfolio_26.jpg" alt="box 6"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_22.jpg" alt="box 7"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_23.jpg" alt="box 8"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_24.jpg" alt="box 9"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_25.jpg" alt="box 10"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_27.jpg" alt="box 11"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_28.jpg" alt="box 12"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_29.jpg" alt="box 13"> </a>
            <a href="#"> <img src="images/web-images/web_portfolio_210.jpg" alt="box 14"> </a>
            
        </div>
    </div>

</body>
</html>