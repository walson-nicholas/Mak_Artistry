<?php
    $title = 'Makartistry Account'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/account.css">
<link rel="stylesheet" href="assetS/account2.css">
</head>

<body>
    <div class="header">

        <?php include_once('assets/include/header.php'); ?>

    </div>

    <div class="content">
        <p id="orders">My Details</p>
    
        <form action="#">
            <span>Fisrt Name</span>
            <input type="text">
            
            <span>Last Name</span>
            <input type="text">
    
            <span>Email address</span>
            <input type="email">
    
            <span>Date of Birth</span>
            <input type="date">
    
            <span>Phone Number</span>
            <input type="text">
    
        </form>
    
        <div class="saveChanges">
            Save Changes
        </div>
    
        <?php include_once('assets/include/footer2.php'); ?>

    </div>
</body>
</html>