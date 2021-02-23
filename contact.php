<?php
    $title = 'Makartistry Contact'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/contact.css">

</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

        <hr id="headLine1">
        <div id="headTitleMobile"> CONNECT WITH US </div>
        <div id="headTitleWeb"> Connect with us on all platforms </div>
        <hr id="headLine2">

    </div>

    <div class="content">

        <p id="p1">
            We are always looking to build a community where we can connect and share ideas \ experiences. <br> <br>

            Our social media channels and contact information are available for you to reach out to us for orders, inquiries, collaborations, and projects.
        </p>

        <div class="contactDetails">

            <div class="Email">
                <i class="fas fa-envelope"></i>
                <span>hello@makartistry</span>
            </div>

            <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <span>+2347069356045</span>
            </div>

        </div>

        <form action="#" id="userContactForm">

            <input id="userName" type="text" placeholder="Name:">

            <div class="userEmailandTitle">

                <input id="userEmail" type="email" placeholder="Email:">

                <input id="userMessageTitle" name="userMessageTitle" type="text" placeholder="Title :">
                
            </div>
            
            <div id="userMessageContainer">

                <textarea name="contactMessage" id="contactMessage" cols="30" rows="10"></textarea>
                
                <div class="attachments">
                    <img src="images/icons/add_attachment.png" alt="add_attachment">
                    <span> Upload Images</span>
                    <img src="images/icons/record.png" alt="add_recording">
                </div>
                
            </div>

            <button type="button">Send Message</button>
        </form>

        <div class="socialMedia">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <?php include_once('assets/include/footer1.php'); ?>

    </div>

</body>
</html>