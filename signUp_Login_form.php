<?php
$title = 'Makartistry Account';
include_once('assets/include/meta.php');
?>
<link rel="stylesheet" href="assets/account.css">
<!--<link rel="stylesheet" href="assets/signUp_Login_form.css">-->

</head>

<body>
<div class="header">

    <?php include_once('assets/include/header.php'); ?>

</div>

<div class="content">

    <div class="container mt-5">
        <form id="signUpForm" method="post" onsubmit="return false">
            <input type="hidden" name="op" id="op" class="form-control" value="Auth.createAccount">
            <div id="responseMessage"></div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password: </label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
                    </div>
                </div>
            </div>
            <button type="submit" id="signUpButton" class="btn btn-primary mb-3">
                Sign Up
                <i class="fas fa-user-plus"></i>
            </button>
        </form>
    </div>
    <?php include_once('assets/include/footer2.php'); ?>
</div>
<?php include_once 'assets/include/scripts.php'; ?>
</body>
