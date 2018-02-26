<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Title</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/template.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">

    <div class="shopping-list">
        <div class="shopping-list-header">
            <div class="row1"><p>Rij</p></div>
            <div class="row2"><p>Product</p></div>
            <div class="row3"><p>Bedrag</p></div>
        </div>

        <?php
            $shoppingList = [
                ["2", "Maaltijdsalade Kip met pasta", "3,99"],
                ["2", "Rozijnen 300gr", "1,20"],
                ["2", "Groene druiven 400gr", "2,50"],
                ["3", "Kaas jong blok 400gr", "6,20"],
                ["4", "Volkoren brood", "1,10"],
                ["5", "Tijgerbrood", "0,80"],
                ["5", "Pindakaas 500gr", "4,10"],
                ["6", "Maggi lasagnamix 4 pers.", "5,84"],
                ["6", "Hak sperziebonen 500gr", "3,70"],
                ["6", "Bonduelle erwten 500gr", "2,30"],
                ["6", "Hak Spinazie 300gr", "1,56"],
                ["7", "Duivis Borrelnootjes 600gr.", "2,40"],
                ["7", "Lay’s Paprika", "1,79"],
                ["8", "Coca cola 4 pack", "7,99"],
                ["8", "Fanta light 1,5l", "2,49"],
                ["1", "Appels", "4,20"],
                ["1", "Mandarijnen", "2,69"],
                ["1", "Bananen", "3,10"],
                ["1", "Paprika", "1,40"],
            ];

            foreach ($shoppingList as $item){ ?>
                <div class="row1"><p><?php echo $item[0]; ?></p></div>
                <div class="row2"><p><?php echo $item[1]; ?></p></div>
                <div class="row3"><p><?php echo $item[2]; ?></p></div>
            <?php }
        ?>

        <div class="bottom">

        </div>
    </div>

    <div class="top-bar">

    </div>

    <div class="main">
        <div class="scanned-products">

            <!-- PRODUCT 1 -->
            <div class="product product1">
                <div class="card-big">
                    <div class="card-big-header">
                        <h3>Coca cola 4-pack</h3>
                    </div>

                    <div class="card-big-inner">
                        <figure class="card-big-image">
                            <img src="images/coca-cola.png"/>
                        </figure>
                        <div class="price">
                            <p>&euro;7,99</p>
                        </div>
                        <div class="info">
                            <p><span class="bold">Ten minste houdbaar tot: </span>11-2019</p>
                        </div>
                        <div class="warning">
                            <figure class="warning-sign">
                                <img src="images/warning.svg">
                            </figure>
                            <div class="warning-text">
                                <p><span class="bold">Pas op!</span></p>
                                <p>Dit product bevat ingrediënten die op uw lijst van te vermijden stoffen staat.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PRODUCT 2 -->
            <div class="product product2">
                <div class="card-big">
                    <div class="card-big-header">
                        <h3>Lipton Ice Tea Peach 500ml</h3>
                    </div>

                    <div class="card-big-inner">
                        <figure class="card-big-image">
                            <img src="images/icetea.png"/>
                        </figure>
                        <div class="price">
                            <p>&euro;1,89</p>
                        </div>
                        <div class="info">
                            <p><span class="bold">Ten minste houdbaar tot: </span>12-2018</p>
                        </div>
                        <div class="warning">
                            <figure class="warning-sign">
                                <img src="images/warning.svg">
                            </figure>
                            <div class="warning-text">
                                <p><span class="bold">Pas op!</span></p>
                                <p>Dit product bevat ingrediënten die op uw lijst van te vermijden stoffen staat.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="buttons">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Folder</a></li>
            <li><a href="#">Zoeken</a></li>
        </ul>
    </div>

</div>

</body>
</html>