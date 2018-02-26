<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Title</title>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="vendor/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="products.js"></script>
    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/template.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">

    <div class="shopping-list">
        <div class="shopping-list-header">
            <p>Boodschappenlijst</p>
            <div class="row">
                <div class="collumn1"><p>Rij</p></div>
                <div class="collumn2"><p>Product</p></div>
                <div class="collumn3"><p>Bedrag</p></div>
            </div>
        </div>
        <div class="shopping-list-items">
            <?php
                $shoppingList = [
                    ["2", "Maaltijdsalade Kip met pasta", "3,99", "unchecked", "unactive"],
                    ["2", "Rozijnen 300gr", "1,20", "unchecked", "unactive"],
                    ["2", "Groene druiven 400gr", "2,50", "unchecked", "unactive"],
                    ["3", "Kaas jong blok 400gr", "6,20", "unchecked", "unactive"],
                    ["4", "Volkoren brood", "1,10", "unchecked", "unactive"],
                    ["5", "Tijgerbrood", "0,80", "unchecked", "unactive"],
                    ["5", "Pindakaas 500gr", "4,10", "unchecked", "unactive"],
                    ["6", "Maggi lasagnamix 4 pers.", "5,84", "unchecked", "unactive"],
                    ["6", "Hak sperziebonen 500gr", "3,70", "unchecked", "unactive"],
                    ["6", "Bonduelle erwten 500gr", "2,30", "unchecked", "unactive"],
                    ["6", "Hak Spinazie 300gr", "1,56", "unchecked", "unactive"],
                    ["7", "Duivis Borrelnootjes 600gr.", "2,40", "unchecked", "unactive"],
                    ["7", "Lay’s Paprika", "1,79", "unchecked", "active"],
                    ["8", "Coca cola 4 pack", "7,99", "unchecked", "unactive"],
                    ["8", "Fanta light 1,5l", "2,49", "unchecked", "unactive"],
                    ["1", "Appels", "4,20", "checked", "unactive"],
                    ["1", "Mandarijnen", "2,69", "checked", "unactive"],
                    ["1", "Bananen", "3,10", "checked", "unactive"],
                    ["1", "Paprika", "1,40", "checked", "unactive"]
                ];

                foreach ($shoppingList as $item){ ?>
                    <div class="row <?php if ($item[4] === "active"){echo "active"; } ?>">
                        <div class="collumn1"><?php if($item[3] === "checked"){ echo "<img class='check' src='images/checked.svg'/>"; } else { echo "<p>".$item[0]."</p>"; } ?></div>
                        <div class="collumn2"><p <?php if($item[3] === "checked"){ echo "class='gray'"; } ?>><?php echo $item[1]; ?></p></div>
                        <div class="collumn3"><p <?php if($item[3] === "checked"){ echo "class='gray'"; } ?>><?php echo $item[2]; ?></p></div>
                        <?php if ($item[4] === "active"){?>
                            <div class="shopping-list-active-buttons">
                                <figure class="delete">
                                    <img src="images/delete.svg" />
                                </figure>
                                <figure class="plus">
                                    <img src="images/plus.svg" />
                                </figure>
                                <figure class="minus">
                                    <img src="images/minus.svg" />
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
            ?>
        </div>
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
                        <h3>Sourcy 500ml</h3>
                    </div>

                    <div class="card-big-inner">
                        <figure class="card-big-image">
                            <img src="images/sourcy.png"/>
                        </figure>
                        <div class="price">
                            <p>&euro;1,49</p>
                        </div>
                        <div class="info">
                            <p><span class="bold">Ten minste houdbaar tot: </span>04-2022</p>
                        </div>
<!--                        <div class="warning">-->
<!--                            <figure class="warning-sign">-->
<!--                                <img src="images/warning.svg">-->
<!--                            </figure>-->
<!--                            <div class="warning-text">-->
<!--                                <p><span class="bold">Pas op!</span></p>-->
<!--                                <p>Dit product bevat ingrediënten die op uw lijst van te vermijden stoffen staat.</p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                </div>
            </div>

            <!-- PRODUCT 3 -->
            <div class="product product3">
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