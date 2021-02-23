        <img id="mobileLogo" src="images/mobile-images/logo.jpg" alt="logo">

        <div id="burger"  onclick="openSM()">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <div id="mySidemenu" class="sidemenu">

            <a href="javascript::void(0)" class="close" onclick="closeSM()">&times;</a>

            <a href="#"><img id="navShopIcon" src="images/icons/shoppingCart.png" alt="shopCart"></a>
            <div class="sm-wrapper">
                
                <a href="index.php">
                    <div>
                        <i class="fas fa-home"> </i>
                        <p>Home</p>
                    </div>
                </a>
                
                
                <a href="portfolio.php">
                    <div>
                        <i class="fas fa-briefcase"></i>
                        <p>Portfolio</p>
                    </div>
                </a>
                
                <a href="shop.php">
                    <div>
                        <i class="fas fa-shopping-basket"></i>
                        <p>Shop</p>
                    </div>
                </a>
                
                <a href="blog.php">
                    <div>
                        <i class="fas fa-blog"></i>
                        <p>Blog</p>
                    </div>
                </a>
                
                <a href="aboutUs.php">
                    <div>
                        <i class="far fa-address-card"></i>
                        <p>About Us</p>
                    </div>
                </a>
                
                <a href="contact.php">
                    <div>
                        <i class="fas fa-address-book"></i>
                        <p>Contact</p>
                    </div>
                </a>
                
                <a href="quote.php">
                    <div>
                        <i class="fas fa-hand-holding-usd"></i>
                        <p>Get a Quote</p>
                    </div>
                </a>
                
                <a href="account.php">
                    <div>
                        <i class="fas fa-user"></i>
                        <p>My profile</p>
                    </div>
                </a>

            </div>

            <script src="assets/sidenav.js"> </script>

        </div>

        <nav id="nav" class="navigationBar">
            
            <div class="LogoTag">
                <img id="logo" src="images/web-images/web_logo.PNG" alt="logo">
            </div>

            <ul class="nav_Links">
                <li> <a href="index/" id="home">Home</a> </li>
                <li> <a href="portfolio/">Portfolio</a> </li>
                <li> <a href="shop/">Shop</a> </li>
                <li> <a href="blog/">Blog</a> </li>
                <li> <a href="about/">About US</a> </li>
                <li> <a href="contact/">Contact</a> </li>
                <li> <a href="quote/">Get a Quote</a> </li>
                <li> <a href="sign-up/">My profile</a> </li>
                
            </ul>

            <div class="shop">
                <a href="#"><img src="images/icons/shoppingCart.png" alt="shopCart"></a>
            </div>
            
        </nav>

        <script>
            (function() {
                const nav = document.getElementById('nav');
                const anchor = nav.getElementsByTagName('a');
                const current = window.location.pathname.split('/')[2];
                for (let i = 0; i < anchor.length; i++) {
                    if (current === ''){
                        // console.log("here");
                        const home = document.getElementById("home");
                        home.classList.add("active");
                    } else if(anchor[i].href.includes(current)) {
                        anchor[i].classList.add('active');
                    } else {
                        anchor[i].classList.remove('active');
                    }
                }
            })();

        </script>