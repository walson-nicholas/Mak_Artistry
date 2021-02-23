<?php
    $title = 'Makartistry Account'; 
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assets/account.css">
<link rel="stylesheet" href="assets/account2.css">

</head>

<body>
    <div class="header">
        
        <?php include_once('assets/include/header.php'); ?>

    </div>

    <div class="content">

        <p id="orders">Change Password</p>
    
        <form action="#">
            <span>Old Password</span>
            <input type="password">
            
            <span>New Password</span>
            <input type="password">
    
        </form>
    
        <div class="saveChanges">
            Save Changes
        </div>

        <?php include_once('assets/include/footer2.php'); ?>

    </div>

</body>
</html>