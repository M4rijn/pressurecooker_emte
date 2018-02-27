<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Title</title>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="vendor/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="javascript.js"></script>
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
<!--            --><?php
//                $shoppingList = [
//                    ["2", "Maaltijdsalade Kip met pasta", "3,99"],
//                    ["2", "Rozijnen 300gr", "1,20"],
//                    ["2", "Groene druiven 400gr", "2,50"],
//                    ["3", "Kaas jong blok 400gr", "6,20"],
//                    ["4", "Volkoren brood", "1,10"],
//                    ["5", "Tijgerbrood", "0,80"],
//                    ["5", "Pindakaas 500gr", "4,10"],
//                    ["6", "Maggi lasagnamix 4 pers.", "6,40"],
//                    ["6", "Hak sperziebonen 500gr", "3,70"],
//                    ["6", "Bonduelle erwten 500gr", "2,30"],
//                    ["6", "Hak Spinazie 300gr", "1,56"],
//                    ["7", "Duivis Borrelnootjes 600gr.", "2,40"],
//                    ["7", "Lay’s Paprika", "1,79"],
//                    ["8", "Coca cola 4 pack", "7,99"],
//                    ["8", "Fanta light 1,5l", "2,49"],
//                    ["1", "Appels", "4,20"],
//                    ["1", "Mandarijnen", "2,69"],
//                    ["1", "Bananen", "3,10"],
//                    ["1", "Paprika", "1,40"]
//                ];
//
//                foreach ($shoppingList as $item){ ?>
<!--                    <div class="row">-->
<!--                        <div class="collumn1"><p>--><?php //echo $item[0]; ?><!--</p></div>-->
<!--                        <div class="collumn2"><p>--><?php //echo $item[1]; ?><!--</p></div>-->
<!--                        <div class="collumn3"><p>--><?php //echo $item[2]; ?><!--</p></div>-->
<!--                        <div class="shopping-list-active-buttons">-->
<!--                            <figure class="delete">-->
<!--                                <img src="images/delete.svg" />-->
<!--                            </figure>-->
<!--                            <figure class="plus">-->
<!--                                <img src="images/plus.svg" />-->
<!--                            </figure>-->
<!--                            <figure class="minus">-->
<!--                                <img src="images/minus.svg" />-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //}
//            ?>

        </div>
        <div class="bottom">
            <div class="left">
                <h4>Totaalbedrag:</h4>
            </div>
            <div class="right">
                <h4>&euro;127,63</h4>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <p><span class="a">A</span> <span class="b">A</span> <span class="c">A</span></p>
    </div>

    <div class="main">
        <div class="scanned-products">

            <?php
                $productList = [
//                    [
//                        "title" =>      "Calvé Pindakaas 400gr",
//                        "image" =>      "pindakaas.png",
//                        "price" =>      "2,80",
//                        "expiration" => "12-2019",
//                        "warning" =>    "yes",
//                        "sidecards" =>  [
//                            "sidecard1" => [
//                                "title" =>      "Volkoren brood",
//                                "image" =>      "volkoren.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ],
//                            "sidecard2" => [
//                                "title" =>      "Aardbeiën jam",
//                                "image" =>      "aardbeienjam.png",
//                                "sticker" =>    "sticker-2.svg"
//                            ]
//                        ]
//                    ],
                    [
                        "title" =>      "Sourcy 500ml",
                        "image" =>      "sourcy.png",
                        "price" =>      "1,49",
                        "expiration" => "04-2022",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Pink Lady appels",
                                "image" =>      "appels.png",
                                "sticker" =>    "sticker-3.svg",
                                "row" =>        "1",
                                "price" =>      "1,99"
                            ],
                            "sidecard2" => [
                                "title" =>      "Sultana Fruitbiscuit",
                                "image" =>      "sultana.png",
                                "sticker" =>    "sticker-4.svg",
                                "row" =>        "3",
                                "price" =>      "0,89"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Lipton Ice Tea Peach 500ml",
                        "image" =>      "icetea.png",
                        "price" =>      "1,89",
                        "expiration" => "12-2018",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Lay's chips",
                                "image" =>      "lays.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "2,30"
                            ],
                            "sidecard2" => [
                                "title" =>      "Avico Frites",
                                "image" =>      "avico.png",
                                "sticker" =>    "sticker-2.svg",
                                "row" =>        "8",
                                "price" =>      "3,78"
                            ]
                        ]
                    ],
//                    [
//                        "title" =>      "Pickwick Earl Grey thee",
//                        "image" =>      "pickwick.png",
//                        "price" =>      "1,25",
//                        "expiration" => "11-09-2019",
//                        "warning" =>    "no",
//                        "sidecards" =>  [
//                            "sidecard1" => [
//                                "title" =>      "Suiker 500gr",
//                                "image" =>      "suiker.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ],
//                            "sidecard2" => [
//                                "title" =>      "Melvita honing 375gr",
//                                "image" =>      "honing.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ]
//                        ]
//                    ],
//                    [
//                        "title" =>      "product 5",
//                        "image" =>      "product5.png",
//                        "price" =>      "6,66",
//                        "expiration" => "11-11-2020",
//                        "warning" =>    "no",
//                        "sidecards" =>  [
//                            "sidecard1" => [
//                                "title" =>      "product 5 side 1",
//                                "image" =>      "placeholder.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ],
//                            "sidecard2" => [
//                                "title" =>      "product 5 side 2",
//                                "image" =>      "placeholder.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ]
//                        ]
//                    ],
//                    [
//                        "title" =>      "product 6",
//                        "image" =>      "product6.png",
//                        "price" =>      "4,20",
//                        "expiration" => "11-11-2020",
//                        "warning" =>    "no",
//                        "sidecards" =>  [
//                            "sidecard1" => [
//                                "title" =>      "product 6 side 1",
//                                "image" =>      "placeholder.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ],
//                            "sidecard2" => [
//                                "title" =>      "product 6 side 2",
//                                "image" =>      "placeholder.png",
//                                "sticker" =>    "sticker-1.svg"
//                            ]
//                        ]
//                    ],
                ];

                $counter = 1;
                foreach($productList as $product){ ?>

                    <div class="product product<?php echo $counter?>">
                        <div class="card card-big">
                            <div class="card-header">
                                <h3><?php echo $product["title"]; ?></h3>
                            </div>

                            <div class="card-inner card-big-inner">
                                <figure class="card-image card-big-image">
                                    <img class="image" src="images/<?php echo $product["image"]; ?>"/>
                                </figure>
                                <div class="price">
                                    <p>&euro;<?php echo $product["price"]; ?></p>
                                </div>
                                <div class="info">
                                    <p><span class="bold">Ten minste houdbaar tot: </span><?php echo $product["expiration"]; ?></p>
                                </div>
                                <?php if($product["warning"] === "yes"){ ?>
                                    <div class="warning">
                                        <figure class="warning-sign">
                                            <img src="images/warning.svg">
                                        </figure>
                                        <div class="warning-text">
                                            <p><span class="bold">Pas op!</span></p>
                                            <p>Dit product bevat ingrediënten die op uw lijst van te vermijden stoffen staat.</p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>

                        <div class="side-cards">

                            <div class="side-cards-header">
                                <h5>Ook lekker:</h5>
                            </div>

                            <?php
                                $sidecardCounter = 1;
                                foreach ($product["sidecards"] as $sidecard) { ?>
                                    <div class="card side-card side-card-<?php echo $sidecardCounter ?>">
                                        <div class="card-header">
                                            <h5><?php echo $sidecard["title"]; ?></h5>
                                        </div>

                                        <div class="card-inner card-side-inner">
                                            <figure class="card-image card-side-image">
                                                <img class="image" src="images/<?php echo $sidecard["image"]; ?>"/>
                                                <img class="sticker" src="images/<?php echo $sidecard["sticker"]; ?>"/>
                                            </figure>
                                        </div>

                                        <div class="card-bottom">
                                            <a href="#" class="add">Toevoegen</a>
                                        </div>
                                        <div class="additional-info">
                                            <div class="row"><p><?php echo $sidecard["row"]; ?></p></div>
                                            <div class="price"><p><?php echo $sidecard["price"]; ?></p></div>
                                        </div>
                                    </div>
                                <?php
                                    $sidecardCounter++;
                                    }
                            ?>

                        </div>

                    </div>

                <?php
                    $counter++;
                }
            ?>
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