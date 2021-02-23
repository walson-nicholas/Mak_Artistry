<?php
$title = 'Makartistry Home';
include_once('assets/include/meta.php');
?>
<link rel="stylesheet" href="assets/index.css">
</head>

<body>
    <div class="header">

        <?php include_once('assets/include/header.php'); ?>

        <p id="p1"> EVERY DAY ART </p>

        <p id="p2"> We help your brand, event and lifestyle standout. </p>

        <a href="#">
            <div class="outterShopNow">
                <div class="innerShopNow"> SHOP NOW </div>
            </div>
        </a>

    </div>

    <div class="content">

        <div class="benefitsContainer">

            <div class="benefits">
                <img class="benIcons" src="images/icons/custom.png" alt="icon1">
                <p>With creativity at our core, why fit in when you can stand out?</p>
            </div>
    
            <div class="benefits">
                <img class="benIcons" src="images/icons/quality.png" alt="icon1">
                <p>Quality is not an act, it is a habit and we do it well.</p>
            </div>
    
            <div class="benefits">
                <img class="benIcons" src="images/icons/custom.png" alt="icon1">
                <p>Get it how you want it. Custom made.</p>
            </div>
    
        </div>

        <div class="servicesContainer">

            <p class="sectionTitle">Our Services</p>

            <hr class="sectionLine">

            <div class="services">

                <a href="#">
                    <div class="servicesContent" id="content1">
                        <div class="servicesLabel">Boxes & Packaging</div>
                    </div>
                </a>

                <a href="#">
                    <div class="servicesContent" id="content2">
                        <div class="servicesLabel">Notepads & Journals</div>
                    </div>
                </a>

                <a href="#">
                    <div class="servicesContent"  id="content3">
                        <div class="servicesLabel">Cards & Prints</div> 
                    </div>
                </a>

                <a href="#">
                    <div class="servicesContent" id="content4">
                        <div class="servicesLabel">Arts & Illustrations</div>
                    </div>
                </a>
                
            </div>
    
        </div>

        <div class="peopleSayMobile">

            <p class="sectionTitle">What People Say</p>
    
            <hr class="sectionLine">
    
            <div class="profilePics">
                <img src="images/mobile-images/home_say_1.jpg" alt="say1" id="say1">
                <img src="images/mobile-images/home_say_2.jpg" alt="say6" id="say2">
                <img src="images/mobile-images/home_say_3.jpg" alt="say3" id="say3">
                <img src="images/mobile-images/home_say_4.jpg" alt="say2" id="say4">
                <img src="images/mobile-images/home_say_5.jpg" alt="say4" id="say5">
                <img src="images/mobile-images/home_say_6.jpg" alt="say5" id="say6">
                
            </div>

            <p  id="peopleSayReviews">
                Your’e so good at your craft. It was definitely a great touch to our wedding. All the girls loved it and i absolutely loved it too
                <br> <br>
                -Busola
            </p>

            <div id="dots">
                <div class="sayDots" onclick="currentSlide(1)"></div> 
                <div class="sayDots" onclick="currentSlide(2)"></div> 
                <div class="sayDots" onclick="currentSlide(3)"></div> 
                <div class="sayDots" onclick="currentSlide(4)"></div> 
                <div class="sayDots" onclick="currentSlide(5)"></div> 
                <div class="sayDots" onclick="currentSlide(6)"></div>
            </div>
    
        </div>

        <div class="peopleSayWeb">

            <p class="sectionTitle">What People Say</p>
    
            <hr class="sectionLine">
        
            <div class="row1">
        
                <div class="profilePic">
                    <img src="images/web-images/web_home_15.jpg" alt="say1">
                </div>
            
                <div class="sayWriteUp">
                    <p>You guys are so good at your craft. It was definitely a great touch to our wedding. All the girls loved it and I absolutely loved it too.</p>
                    <p>- Busola</p>
                </div>
        
            </div>
        
            <div class="row1" style="justify-content: flex-end;">
        
                <div class="sayWriteUp" style="text-align: right;">
                    <p>You guys are so good at your craft. It was definitely a great touch to our wedding. All the girls loved it and I absolutely loved it too</p>
                    <p>- Harmony</p>
                </div>
              
                <div class="profilePic">
                    <img src="images/web-images/web_home_16.jpg" alt="say2">
                </div>
        
            </div>
    
            <div style="text-align:center">
                <span class="dots" onclick="currentSlide(1)"></span> 
                <span class="dots" onclick="currentSlide(2)"></span> 
                <span class="dots" onclick="currentSlide(3)"></span> 
                <span class="dots" onclick="currentSlide(4)"></span> 
                <span class="dots" onclick="currentSlide(5)"></span>
            </div>
        
        </div>

        <div class="whatsNewContainerMobile">
            
            <p class="sectionTitle">What's New?</p>

            <hr class="sectionLine">

            <div class="quote">
                <div class="innerQuote"> GET A QUOTE </div>

                <div class="triangle"> </div>
            </div>

            <p id="p1"> No more long waits; get a price quote in 1 minute for our products and services </p>

            <div id="learnMore">
                <a href="#"> <div id="innerLearnMore"> LEARN MORE</div> </a>
            </div>

        </div>

        <div class="whatsNewContainerWeb">

            <div class="whatsNew">
                
                <a href="../GET A QUOTE/MAquote.html">
                    <div class="quote">
                        <div class="innerQuote">
                            <p> GET A QUOTE </p>
                        </div>
        
                        <div class="triangle-up"></div>
                    </div>  
                </a>
        
                <div class="whatsNewWriteUp">
                    <h2>What's New?</h2>
                    <hr>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
            
            </div>
            
            <a href="../GET A QUOTE/MAquote.html">
                <div class="outterLearnMore">
                    <div class="innerLearnMore">LEARN MORE</div>
                </div>
            </a>
            
        </div>

        <div class="brandsMobile">
            <p class="sectionTitle">Brands We've Worked With</p>
            <hr class="sectionLine">
            
            <div class="slideshow-container">

                <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a> -->

                <div class="mySlidesContainer" style="margin: auto;">

                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_wigs.JPG"      alt="#" style="width: 40%; height: 100%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_scale.PNG"     alt="#" style="width: 100%; height: 40%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_ibby.PNG"      alt="#" style="width: 100%; height: 70%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_renee.jpg"     alt="#" style="width: 80%; height: 70%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_bta.PNG"       alt="#" style="width: 100%; height: 70%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_christine.JPG" alt="#" style="width: 80%; height: 80%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_clan.PNG"      alt="#" style="width: 60%; height: 40%;">
                    </div>
        
                    <div class="mySlides fade">
                        <img src="images/mobile-images/home_brand_eugene.JPG"    alt="#" style="width: 100%; height: 100%;">
                    </div>

                </div>

                <!-- <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    
            </div>
    
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
                <span class="dot" onclick="currentSlide(7)"></span> 
                <span class="dot" onclick="currentSlide(8)"></span> 
            </div>
    
            <script>
                var slideIndex = 1;
            
                var myTimer;
            
                var slideshowContainer;
            
                window.addEventListener("load",function() {
                  showSlides(slideIndex);
                  myTimer = setInterval(function(){plusSlides(1)}, 4000);
              
                  //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                  slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
              
                  //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                  // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
              
                  slideshowContainer.addEventListener('mouseenter', pause)
                  slideshowContainer.addEventListener('mouseleave', resume)
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
            
        </div>

        <div class="brandsWeb">

            <p class="sectionTitle">Brand's we've worked with</p>
            
            <hr class="sectionLine">
            
            <div class="row">
                <div class="brandsLogo"> <img src="images/web-images/web_home_17.JPG" alt="#" style="width: 30%; height: 75%;"> </div>
                <div class="brandsLogo"> <img class="full" src="images/web-images/web_home_18.PNG" alt="#" style="height: 50%; width: 70%;"> </div>
                <div class="brandsLogo"> <img class="full" src="images/web-images/web_home_19.PNG" alt="#" style="height: 50%; width: 70%;"> </div>
                <div class="brandsLogo"> <img class="full" src="images/web-images/web_home_110.jpg" alt="#" style="height: 50%;"> </div>
            </div>
    
            <div class="row" style="position: relative; top: -2.368vw;">
                <div class="brandsLogo"> <img class="full" src="images/web-images/web_home_111.PNG" alt="#" style="height: 60%; width: 85%;"> </div>
                <div class="brandsLogo"> <img src="images/web-images/web_home_112.JPG" alt="#" style="height: 75%; width: 55%;"> </div>
                <div class="brandsLogo"> <img class="full" src="images/web-images/web_home_113.PNG" alt="#" style="height: 40%; width: 42%;"> </div>
                <div class="brandsLogo"> <img src="images/web-images/web_home_114.JPG" alt="#" style="height: 100%; width: 100%;"> </div>
            </div>
        </div>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>

</body>
</html>