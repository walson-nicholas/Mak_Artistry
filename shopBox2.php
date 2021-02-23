<?php
    $title = 'Makartistry Shop'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/shop.css">
<link rel="stylesheet" href="assets/shopBox2.css">
</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

    </div>

    <div class="content">

        <div class="itemViews">
            <img src="images/mobile-images/shop_box_1_view1.jpg" alt="img1">
            <img src="images/mobile-images/shop_box_1_view2.jpg" alt="img1">
            <span>^</span>
            <p class="itemName">Monochrome Candy Worp</p>
        </div>

        <div class="itemPrice">Price : N2,650</div>

        <div class="itemFullName">Flip open satin ribbon box</div>

        <span onclick="like(this)" id="like">🤍</span> <br>

        <script>
            function like(x) {
                if (x.innerHTML === "🤍") {x.innerHTML="❤️";}
    
                else {x.innerHTML="🤍";} 
            }
        </script>

        <span id="selectOptions">Select Options</span>

        <div class="itemOptions">
            <span>Size</span>

            <div>
                13 x 4x 4 inches
                <span>^</span>
            </div>
        </div>

        <div class="itemOptions">
            <span>QTY</span>

            <div>
                2
                <span>^</span>
            </div>
        </div>

        <div class="itemOptions">
            <textarea name="specificNotes" id="specificNotes" cols="30" rows="10" placeholder="Specific things to note ? Add them here..."></textarea>
        </div>

        <div class="itemOptions amountBox">
            <span>Total</span>

            <div id="amount">
                N 5,300
            </div>
        </div>

        <div class="addToCart">
            ADD TO CART
        </div>

        <div class="others">
            <div id="des" onclick="description()">Description</div>
            <div id="addInf" onclick="additionalInformation()">Additional Information</div>
            <div id="rev" onclick="reviews()">Reviews (<span>2</span>)</div>
        </div>


        <div id="descriptionBox">
            - 13 x 4 x 4 inches <br>
            - Monochrome andy worp pattern <br>
            - Matte Lamination <br>
            - Black satin ribbon
        </div>

        <div id="informationBox">
            - Satin paper divider <br>
            - Conered edges <br>
            - Matte lamination <br>
            - Thread paper binding <br>
            - Dimensions : 8.25 x 5 x 0.5 inches <br>
            - Cream sheets
        </div>

        <div id="reviewsBox">
            
            <div class="review">
                <div class="picText">
                    <img src="images/mobile-images/shop_review_1.jpg" alt="review">
                    <p>These notepads were so beautiful... i’m in love!</p>
                </div>
                <span class="userName">Adama Shehu</span>
            </div>

            <div class="review">
                <div class="picText">
                    <img src="images/mobile-images/shop_review_1.jpg" alt="review">
                    <p>They were perfect, i liked the suprise bookmark i got.</p>
                </div>
                <span class="userName">Chisom</span>
            </div>

            <input type="text" placeholder="Name :">

            <textarea name="userReviewMessage" id="userReviewMessage" cols="30" rows="10" placeholder="Write a review..."></textarea>

            <div class="postReview">
                Post Review
            </div>
        </div>

        <script>

            function description(){
                document.getElementById("des").style.borderBottom= "0.266vw solid #000000";
                document.getElementById("addInf").style.borderBottom = "none";
                document.getElementById("rev").style.borderBottom = "none";
                document.getElementById("descriptionBox").style.display = "block";
                document.getElementById("informationBox").style.display = "none";
                document.getElementById("reviewsBox").style.display = "none";
            }

            function additionalInformation(){
                document.getElementById("des").style.borderBottom= "none";
                document.getElementById("addInf").style.borderBottom = "0.266vw solid #000000";
                document.getElementById("rev").style.borderBottom = "none";
                document.getElementById("descriptionBox").style.display = "none";
                document.getElementById("informationBox").style.display = "block";
                document.getElementById("reviewsBox").style.display = "none";
            }

            function reviews(){
                document.getElementById("des").style.borderBottom= "none";
                document.getElementById("addInf").style.borderBottom = "none";
                document.getElementById("rev").style.borderBottom = "0.266vw solid #000000";
                document.getElementById("descriptionBox").style.display = "none";
                document.getElementById("informationBox").style.display = "none";
                document.getElementById("reviewsBox").style.display = "block";
            }

        </script>

        <p id="alsoLike">You may also like...</p>

        <div class="shopItemsContainer">

            <div class="shopItems">
                <img src="images/mobile-images/shop_box_2.jpg" alt="#"> <br>
                <p>Red stripped christmas boxes</p>
                <span>N3,000</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

            <div class="shopItems">
                <img src="images/mobile-images/shop_box_3.jpg" alt="#"> <br>
                <p>Groomsmen boxes</p>
                <span>N1,700</span>
                <span onclick="like(this)">🤍</span> <br>

            </div>

        </div>

        <br> <br> <br> <br>
    </div>

</body>
</html>