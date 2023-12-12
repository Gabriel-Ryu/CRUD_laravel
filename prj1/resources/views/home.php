<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
    <script type="text/javascript" src="/js/home.js"></script>
    <div class = "body-container">
        <div class="header-container-general">
            <div class = "header-container1">
               <button class="material-symbols-outlined" onclick="openOption()"> Menu</button>
               <a href="/home" class="play-button">Nothing here</a>
            </div>
            <div class = "header-container2">
                <a href="">Products</a>
                <p>|</p>
                <a href="ingredients/select" >Ingredients</a>
                <p>|</p>
                <a href="users/select">Users</a>
                <div class="container-personal-image">
                    <img src="/images/profileImages/<?php echo $user->image?>" alt="" class="personal-image" onclick="openMenu()">
                </div>
             </div>
        </div>
        <div class="option-modal">
            <div class="options">
                <a href="">About us</a>
            </div>
            <div class="button-back">
                <img src="images/arrowLeft.png" class="close-option-modal"></img>
            </div>
        </div>
        <div class="profile-modal">
            <div class="profile-button-close-container">
                <div class="profile-button-close">
                    <img src="images/close.png" class="close-option-modal"></img>
                </div>
            </div>
            <div class="header-profile-modal">
                <div class="img-profile-container">
                    <img src="/images/profileImages/<?php echo $user->image?>" alt="" class="img-profile">
                </div>
            </div>
            <div class="exit-container">
                <a href="/">Exit</a>
            </div>
        </div>
    </div>
</body>
</html>