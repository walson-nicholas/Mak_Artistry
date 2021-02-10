<?php
    $title = 'Makartistry Account'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/account.css">
</head>

<body>

    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>
        
        <img src="images/mobile-images/account_11.jpg" alt="profile picture" id="profilePicture">

    </div>

    <div class="content">

        <p id="profileName">Kara Mosopefoluwa</p>

        <div id="locationRow">
            <img id="locationIcon" src="images/icons/location.png" alt="location">
            <span id="locationName">Lagos, Nigeria</span>
        </div>
    
        <div class="accountMenu">
            
            <a href="accountOrders.html">
                <div class="menu">
                    <img src="images/icons/orders.png" alt="orders">
                    <span>My Orders</span>
                    <span>&#x2192;</span>
                </div>
            </a>
    
            <a href="accountDetails.html">
                <div class="menu">
                    <img src="images/icons/details.png" alt="orders">
                    <span>My Details</span>
                    <span>&#x2192;</span>
                </div>
            </a>
    
            <a href="accountPassword.html">
                <div class="menu">
                    <img src="images/icons/password.png" alt="orders">
                    <span>Change Password</span>
                    <span>&#x2192;</span>
                </div>
            </a>
    
            <a href="accountQuotes.html">
                <div class="menu">
                    <img src="images/icons/quotes.png" alt="orders">
                    <span>Saved Quotes</span>
                    <span>&#x2192;</span>
                </div>
            </a>
    
            <a href="accountFavourites.html">
                <div class="menu">
                    <img src="images/icons/favourites.png" alt="orders">
                    <span>Favourites</span>
                    <span>&#x2192;</span>
                </div>
            </a>
    
            <a href="#">
                <div class="menu">
                    <img src="images/icons/designs.png" alt="orders">
                    <span>Saved Designs</span>
                    <span>&#x2192;</span>
                </div>
            </a>
            
        </div>


        <?php include_once('assets/include/footer2.php'); ?>

    </div>
</body>
</html>