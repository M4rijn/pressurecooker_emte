<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Allescænner</title>
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

        </div>
        <div class="bottom">
            <div class="left">
                <h4>Totaalbedrag:</h4>
            </div>
            <div class="right">
                <h4>&euro;<span></span></h4>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <p><span class="a">A</span> <span class="b">A</span> <span class="c">A</span></p>
    </div>

    <div class="main">

        <div class="welcome">

            <div class="welcome-text">
                <h2>Welkom Ellen</h2>
                <p>Je hebt op dit moment 6 punten</p>

            </div>

            <figure class="logo">
                <img src="images/logo_emte.svg" />
            </figure>

            <div class="additional-text">
                Speciaal geselecteerd voor jou:
            </div>

            <div class="cards">

                <div class="card middle-card middle-card-1">
                    <div class="card-header">
                        <h5>Coca Cola 4-pack</h5>
                    </div>

                    <div class="card-inner card-middle-inner">
                        <figure class="card-image card-middle-image">
                            <img class="image" src="images/coca-cola.png"/>
                            <img class="sticker" src="images/sticker-2.svg"/>
                        </figure>
                    </div>

                    <div class="card-bottom">
                        <a href="#" class="add">Toevoegen</a>
                    </div>
                    <div class="additional-info">
                        <div class="row"><p>8</p></div>
                        <div class="price"><p>6,40</p></div>
                    </div>
                </div>

                <div class="card middle-card middle-card-2">
                    <div class="card-header">
                        <h5>Suiker 500 gr</h5>
                    </div>

                    <div class="card-inner card-middle-inner">
                        <figure class="card-image card-middle-image">
                            <img class="image" src="images/suiker.png"/>
                            <img class="sticker" src="images/sticker-4.svg"/>
                        </figure>
                    </div>

                    <div class="card-bottom">
                        <a href="#" class="add">Toevoegen</a>
                    </div>
                    <div class="additional-info">
                        <div class="row"><p>4</p></div>
                        <div class="price"><p>3,89</p></div>
                    </div>
                </div>

            </div>

        </div>

        <div class="scanned-products">

            <?php
                $productList = [
                    [
                        "title" =>      "Calvé Pindakaas 400gr",
                        "image" =>      "pindakaas.png",
                        "price" =>      "2,80",
                        "expiration" => "12-2019",
                        "warning" =>    "yes",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Volkoren brood",
                                "image" =>      "volkoren.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "5",
                                "price" =>      "1,89"
                            ],
                            "sidecard2" => [
                                "title" =>      "Aardbeiën jam",
                                "image" =>      "aardbeienjam.png",
                                "sticker" =>    "sticker-2.svg",
                                "row" =>        "6",
                                "price" =>      "1,21"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Sourcy 500ml",
                        "image" =>      "sourcy.png",
                        "price" =>      "1,49",
                        "expiration" => "04-2022",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Pink Lady appels",
                                "image" =>      "pinklady.png",
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
                    [
                        "title" =>      "Pickwick Earl Grey thee",
                        "image" =>      "pickwick.png",
                        "price" =>      "1,25",
                        "expiration" => "11-09-2019",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Suiker 500gr",
                                "image" =>      "suiker.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "4",
                                "price" =>      "3,89"
                            ],
                            "sidecard2" => [
                                "title" =>      "Melvita honing 375gr",
                                "image" =>      "honing.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "6",
                                "price" =>      "2,49"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Dubbel Frisss 1L",
                        "image" =>      "dubbelfrisss.png",
                        "price" =>      "3,79",
                        "expiration" => "11-11-2020",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Croissant",
                                "image" =>      "croissant.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "5",
                                "price" =>      "0,75"
                            ],
                            "sidecard2" => [
                                "title" =>      "Twix",
                                "image" =>      "twix.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "8",
                                "price" =>      "0,60"
                            ]
                        ]
                    ],
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

    <div class="vote active">

        <div class="vote-inner">
            <div class="vote-text">
                <h2>Stem op de volgende aanbieding</h2>

            </div>

            <div class="cards">

                <div class="card middle-card middle-card-1">
                    <div class="card-header">
                        <h5>Komkommer</h5>
                    </div>

                    <div class="card-inner card-middle-inner">
                        <figure class="card-image card-middle-image">
                            <img class="image" src="images/komkommer.png"/>
                            <img class="sticker" src="images/sticker-2.svg"/>
                        </figure>
                    </div>

                    <div class="card-bottom">
                        <a href="#" data-product="0">Stem</a>
                    </div>
                </div>

                <div class="card middle-card middle-card-2">
                    <div class="card-header">
                        <h5>Colgate Tandpasta</h5>
                    </div>

                    <div class="card-inner card-middle-inner">
                        <figure class="card-image card-middle-image">
                            <img class="image" src="images/tandpasta.png"/>
                            <img class="sticker" src="images/sticker-4.svg"/>
                        </figure>
                    </div>

                    <div class="card-bottom">
                        <a href="#" data-product="1">Stem</a>
                    </div>
                    <div class="additional-info">
                        <div class="row"><p>4</p></div>
                        <div class="price"><p>3,89</p></div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="vote-results">

        <div class="vote-results-inner">
            <div class="vote-results-text">
                <h2>Tussenstand</h2>
            </div>

            <div class="bar-container">
                <div class="bar-left">
                    <figure class="image-left">
                        <img src="images/komkommer.png" />
                    </figure>
                    <p>Komkommer</p>
                </div>

                <div class="bar-mid">
                    <div class="bar-0"><p class="percentage"><span></span>&#37;</p></div>
                    <div class="bar-1"><p class="percentage"><span></span>&#37;</p></div>
                </div>

                <div class="bar-right">
                    <figure class="image-right">
                        <img src="images/tandpasta.png" />
                    </figure>
                    <p>Colgate Tandpasta</p>
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