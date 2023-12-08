<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/ingredientSelect.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/js/selectIngredients.js"></script>
    <title>Ingredients</title>
</head>
<body>
    <div class = "body-container">
        <div class="header-container-general">
            <div class="header-container1">
                    <a class="button-back" href="/home"><img src="/images/arrowLeft.png"></a>
            </div>
            <div class="header-container2">
                   <h1 class="title">Manage Ingredients</h1>
            </div>
        </div>
       <div class = "main-container">
           <table class="table">
               <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Brand</th>
                   <th>Price</th>
                </tr>
                <?php
                        foreach ($ingredients as $ingredient => $row) {
                            ?>
                        <form id="user-form" method="post">
                            <tr>
                                <th id="codigo"><?= $row['id'] ?></th>
                                <input type="hidden" id="id" name="id" value="<?= $row['id'] ?>"></input>
                                <input type="hidden" id="name_DB" name="name_DB" value="<?= $row['name'] ?>"></input>
                                <input type="hidden" id="brand_DB" name="brand_DB"value="<?= $row['brand'] ?>"></input>
                                <input type="hidden" id="price_DB" name="price_DB"value="<?= $row['price'] ?>"></input>
                                <th><input type="text" class="input-text" name="name" id="name" value="<?= $row['name'] ?>"></th>
                                <th><input type="text" class="input-text" name="brand" id="brand" value="<?= $row['brand'] ?>"></th>
                                <th><input type="text" class="input-text" id="price" name="price" value="<?= $row['price']?>"></th>
                                <th>
                                    <?php echo csrf_field();?>
                                    <input type="submit" class="btn-edit" value="Edit" formaction='/ingredients/update' onclick="validateEdit()">
                                    <input type="submit" class="btn-delete" value="Delete" formaction='/ingredients/delete'>
                                </th>
                            </tr>
                        </form>
                        <?php } ?>
                </table>
        </div>
        <div class="button-container">
            <a class="button-insert"href="/ingredients/createScreen">Insert new ingredient</a>
        </div>
    </div>
</body>
</html>