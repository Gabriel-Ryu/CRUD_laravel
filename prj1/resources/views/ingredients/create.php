<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/ingredientCreate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/register.js"></script>
    <title>Ingredient</title>
</head>
<body>
    <div class = "body-container">
        <div class="header-container-general">
            <div class="header-container1">
                <a href="/ingredients/select" class="button-cancel"><img src="/images/arrowLeft.png"></a>
            </div>
            <div class="header-container2">
                <div class = "label-title">Register a ingredient</div>
            </div>
        </div>
        <div class="main-container">
            <div class="form-container">
                <form action="/ingredients/create" method="post">
                    <div class = "label">Name</div>
                    <input type="text" name="name" id="name" class="textbox">
                    <div class = "label">Brand</div>
                    <input type="text" name="brand" id="brand" class="textbox">
                    <div class = "label">Price</div>
                    <input type="text" name="price" id="price" class="textbox">
                    <?php echo csrf_field();?>
                    <input type="submit" value="Create" class="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>