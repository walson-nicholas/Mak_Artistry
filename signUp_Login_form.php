<?php
    $title = 'Makartistry Login';
    include_once('assets/include/meta.php'); 
?>
<link rel="stylesheet" href="assetS/signUp_Login_form.css">
</head>

<body>

    <form action="#">

        <div class="logoBox">
            <img src="images/icons/mAlogo.PNG" alt="logo" id="img1">
        </div>

        <div class="closeForm">&#x2715;</div>

        <div id="joinComm">JOIN OUR COMMUNITY</div>
        
        <p class="formDetailTitle">Name</p>
        <input type="text" class="formDetailInput">

        <p class="formDetailTitle">Email</p>
        <input type="text" class="formDetailInput">

        <p class="formDetailTitle">Password</p>
        <input type="password" class="formDetailInput" style="margin-bottom: 9.6vw;">

        <div class="signUp">SIGN UP</div>


        <div class="loginRow">
            <span>You already have an account ?  </span>
            <pre>   LOGIN</pre>
        </div>

        <div class="googleSign">
            <span>Login  with your  </span>
            <img src="images/mobile-images/Google Favicon 2015 vector (_EPS + .SVG) free download" alt="googleIcon" id="img2">
        </div>

    </form>

</body>
</html>