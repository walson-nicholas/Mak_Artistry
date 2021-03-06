<?php
$title = 'Makartistry About Us'; 
include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/aboutUs.css">
</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> ABOUT US </div>
        <div id="headTitleWeb"> Discover who we are and why we’re here </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <div class="whatWeDo">

            <img src="images/web-images/web_about_11.jpg" alt="img1">
        
            <div class="imageLabel">What We Do</div>
    
            <div class="sectionWriteUp">
                We create a range of arts and crafts products such as stationery, packaging, and digital art works.
            </div>

        </div>

        <div class="benefits">
            <p>Our Benefits</p>

            <ul>
                <li>You get the luxury of having products custom made, perfect for you.</li> <br>
                <li>Quality over quantity. We pride ourselves with keen attention to detail.</li> <br>
                <li>Your ideas will be expanded and executed in ways that exceed expectations.</li> <br>
                <li>Your brand, event and lifestyle will standout uniquely.</li> <br>
                <li>Elements of creative designs are always represent in the product.</li> <br>
                <li>Our products are great conversation starters, everyone always wants to know</li>
            </ul>

            <br> <br>
        </div>

        <div class="story">

            <img src="images/mobile-images/about_us_12.png" alt="img2">
            <div class="imageLabel">Our Story</div>

            <div class="sectionWriteUp">
                We began with a one man team and the supportive friendships of Mosope in her university dorm room. Creating digital art with her mobile device at the time and packaging boxes for close family and friends. Over time God sent helpers aided her work through referrals and provision of a production space. <br> <br>
    
                Mak Artistry  was registered on the 3rd of August 2017. Our team has grown from one to five persons and is continiously expanding. We now offer four major products and services across varios platforms. We are currently based in Lagos Nigeria with plans of expanding across Africa and globally. <br> <br>
    
                For us, it’s always been about one thing... making everyday experiences beautiful.
                EVERY DAY ART.
            </div>

        </div>

        <div class="team">

            <p class="sectionTitle">Our Team</p>

            <hr class="sectionLine">

            <div class="mySlidesContainer">

                <div class="mySlides fade">
                    <img src="images/mobile-images/about_us_13.jpg" alt="#">
                    <p>Adama Shehu</p>
                    <p>PR Marketing Strategist</p>
                </div>

                <div class="mySlides fade">
                    <img src="images/mobile-images/about_us_13.jpg" alt="#">
                    <p>Asimiea Nicholas </p>
                    <p>Web Developer</p>
                </div>

                <div class="mySlides fade">
                    <img src="images/mobile-images/about_us_13.jpg" alt="#">
                    <p>Sope Shehu</p>
                    <p>CEO</p>
                </div>

                <div class="mySlides fade">
                    <img src="images/mobile-images/about_us_13.jpg" alt="#">
                    <p>Other Person</p>
                    <p>Other Team Member</p>
                </div>

            </div>

            <div class="indicators1">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
            
        </div>

        <div class="services">

            <p class="sectionTitle">Our Sevices</p>

            <hr class="sectionLine">

            <div class="mySlides2 fade">

                <div class="servicesContainer">

                    <div class="servicesContainerRow">
                        <div id="serviceBox1" class="servicesBox">Gift Boxes</div>

                        <div id="serviceBox2" class="servicesBox">Box and Packaging</div> 
                    </div>

                    <div class="servicesContainerRow">
                        <div id="serviceBox3" class="servicesBox">Wedding Boxes</div>

                        <div id="serviceBox4" class="servicesBox">Paper Packs</div>
                    </div>

                    <div class="servicesContainerRow">
                        <div id="serviceBox5" class="servicesBox">Paper\Carrier Bags</div>
                    </div>

                </div>

                <div class="imageLabel">Boxes and Packaging</div>
            </div>

            <div class="mySlides2 fade">
                <div class="servicesContainer">
                    sup 1
                </div>

                <div class="imageLabel">Notepads & Journals</div>
            </div>

            <div class="mySlides2 fade">
                <div class="servicesContainer">
                    sup 2
                </div>

                <div class="imageLabel">Cards & Prints</div>
            </div>

            <div class="mySlides2 fade">
                <div class="servicesContainer">
                    sup 3
                </div>

                <div class="imageLabel">Digital & Illustrations</div>
            </div>

            <div class="indicators">
                <span class="dot2" onclick="currentSlide2(1)"></span> 
                <span class="dot2" onclick="currentSlide2(2)"></span> 
                <span class="dot2" onclick="currentSlide2(3)"></span> 
                <span class="dot2" onclick="currentSlide2(4)"></span> 
            </div>
            
        </div>

        <a href="quote.html"><div id="QuoteBtn">GET A QUOTE</div></a>

        <script>
            var slideIndex = 1;
        
            var myTimer;
        
            var slideshowContainer;
        
            window.addEventListener("load",function() {
            showSlides(slideIndex);
        
            myTimer = setInterval(function(){plusSlides(1)}, 4000);
        
            //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
            // slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
        
            //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
            // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
        
            // slideshowContainer.addEventListener('mouseenter', pause)
            // slideshowContainer.addEventListener('mouseleave', resume)
            })
        
            // NEXT AND PREVIOUS CONTROL
            function plusSlides(n){
                clearInterval(myTimer);
                if (n < 0){
                    showSlides(slideIndex -= 1);
                } else {
                showSlides(slideIndex += 1); 
                }
                
                //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                
                if (n === -1){
                    myTimer = setInterval(function(){plusSlides(n + 2)}, 2000);
                } else {
                    myTimer = setInterval(function(){plusSlides(n + 1)}, 2000);
                }
            }
        
            //Controls the current slide and resets interval if needed
            function currentSlide(n){
            clearInterval(myTimer);
            myTimer = setInterval(function(){plusSlides(n + 1)}, 2000);
            showSlides(slideIndex = n);
            }
        
            function showSlides(n){
            var i;
            var slides = document.getElementsByClassName("mySlides");
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
        
            pause = () => {
            clearInterval(myTimer);
            }
        
            resume = () =>{
            clearInterval(myTimer);
            myTimer = setInterval(function(){plusSlides(slideIndex)}, 2000);
            }
        </script>

        <script>
            var slideIndex2 = 1;

            var myTimer2;

            var slideshowContainer2;

            window.addEventListener("load",function() {
            showSlides2(slideIndex2);
            myTimer2 = setInterval(function(){plusSlides2(1)}, 4000);

            //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
            slideshowContainer2 = document.getElementsByClassName('slideshow-inner')[0];

            //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
            // slideshowContainer2 = document.getElementsByClassName('slideshow-container')[0];

            // slideshowContainer2.addEventListener('mouseenter', pause)
            // slideshowContainer2.addEventListener('mouseleave', resume)
            })

            // NEXT AND PREVIOUS CONTROL
            function plusSlides2(n){
            clearInterval(myTimer2);
            if (n < 0){
                showSlides2(slideIndex2 -= 1);
            } else {
            showSlides2(slideIndex2 += 1); 
            }
            
            //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
            
            if (n === -1){
                myTimer2 = setInterval(function(){plusSlides2(n + 2)}, 2000);
            } else {
                myTimer2 = setInterval(function(){plusSlides2(n + 1)}, 2000);
            }
            }

            //Controls the current slide and resets interval if needed
            function currentSlide2(n){
            clearInterval(myTimer2);
            myTimer2 = setInterval(function(){plusSlides2(n + 1)}, 2000);
            showSlides2(slideIndex2 = n);
            }

            function showSlides2(n){
            var i;
            var slides2 = document.getElementsByClassName("mySlides2");
            var dots2 = document.getElementsByClassName("dot2");
            if (n > slides2.length) {slideIndex2 = 1}
            if (n < 1) {slideIndex2 = slides2.length}

            for (i = 0; i < slides2.length; i++) {
                slides2[i].style.display = "none";
            }

            for (i = 0; i < dots2.length; i++) {
                dots2[i].className = dots2[i].className.replace(" active", "");
            }
            
            slides2[slideIndex2-1].style.display = "block";
            dots2[slideIndex2-1].className += " active";
            }

            pause = () => {
            clearInterval(myTimer2);
            }

            resume = () =>{
            clearInterval(myTimer2);
            myTimer2 = setInterval(function(){plusSlides2(slideIndex2)}, 2000);
            }
        </script>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>


</body>
</html>
