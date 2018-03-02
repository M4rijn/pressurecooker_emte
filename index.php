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
                <h2>Welkom Marijn</h2>
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

        <div class="folder">

            <div class="folder-text">
                <h2>Deze week in de folder</h2>
            </div>

            <div class="folder-card-caroussel">
                <div class="folder-card-caroussel-inner">
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
                                <h5>Suiker 500gr</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/suiker.png"/>
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
                    </div>

                    <div class="cards">
                        <div class="card middle-card middle-card-1">
                            <div class="card-header">
                                <h5>Duyvis borrelnootjes</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/borrelnootjes.png"/>
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
                                <h5>Lay's chips</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/lays.png"/>
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
                    </div>
                    <div class="cards">
                        <div class="card middle-card middle-card-1">
                            <div class="card-header">
                                <h5>Wokgroenten</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/wokgroenten.png"/>
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
                                <h5>Volkoren boord</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/volkoren.png"/>
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
                    </div>

                    <div class="cards">
                        <div class="card middle-card middle-card-1">
                            <div class="card-header">
                                <h5>Campina Melk 1L</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/campinamelk.png"/>
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
                                <h5>Aardbeienjam</h5>
                            </div>

                            <div class="card-inner card-middle-inner">
                                <figure class="card-image card-middle-image">
                                    <img class="image" src="images/aardbeienjam.png"/>
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
                    </div>

                </div>

            </div>

            <div class="folder-buttons">
                <div class="left">
                    <figure class="folder-button-right">
                        <img src="images/left.svg" />
                    </figure>
                </div>
                <div class="right">
                    <figure class="folder-button-right">
                        <img src="images/right.svg" />
                    </figure>
                </div>
            </div>

        </div>

        <div class="search">
            <div class="search-inner">
                <div class="search-bar">
                    <input type="text" />
                </div>
                <div class="suggestions">
                    <p>Ei</p>
                    <p>Eieren</p>
                    <p>Eiersalade</p>
                </div>
            </div>
        </div>

        <div class="search-result">

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
                    [
                        "title" =>      "Roerbakmie",
                        "image" =>      "roerbakmie.png",
                        "price" =>      "0,99",
                        "expiration" => "3-8-2019",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Mienestjes",
                                "image" =>      "mie.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "5",
                                "price" =>      "0,99"
                            ],
                            "sidecard2" => [
                                "title" =>      "Wokgroentenmix",
                                "image" =>      "wokgroenten.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "2",
                                "price" =>      "1,60"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Kaassticks",
                        "image" =>      "kaassticks.png",
                        "price" =>      "0,99",
                        "expiration" => "3-5-2018",
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
                                "title" =>      "Duyvis Borrelnootjes",
                                "image" =>      "borrelnootjes.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "3,20"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Pringles Sour & Onion",
                        "image" =>      "pringles.png",
                        "price" =>      "1,96",
                        "expiration" => "3-4-2018",
                        "warning" =>    "yes",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Oke Cola",
                                "image" =>      "cola.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "0,17"
                            ],
                            "sidecard2" => [
                                "title" =>      "Duyvis Borrelnootjes",
                                "image" =>      "borrelnootjes.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "3,20"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Pastasaus pittig",
                        "image" =>      "pastasaus.png",
                        "price" =>      "1,09",
                        "expiration" => "28-10-2019",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Pasta penne",
                                "image" =>      "penne.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "1,19"
                            ],
                            "sidecard2" => [
                                "title" =>      "Italiaanse groentemix",
                                "image" =>      "italiaansegroentemix.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "2",
                                "price" =>      "2,90"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Oke Cola",
                        "image" =>      "cola.png",
                        "price" =>      "0,17",
                        "expiration" => "28-10-2019",
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
                                "title" =>      "Nibbits",
                                "image" =>      "nibbits.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "2",
                                "price" =>      "1,50"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Granenbiscuits",
                        "image" =>      "granenbiscuits.png",
                        "price" =>      "0,99",
                        "expiration" => "9-9-2019",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Tropicana Ju d'orange",
                                "image" =>      "tropicana.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "7",
                                "price" =>      "1,30"
                            ],
                            "sidecard2" => [
                                "title" =>      "Campina melk 1L",
                                "image" =>      "campinamelk.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "8",
                                "price" =>      "0,87"
                            ]
                        ]
                    ],
                    [
                        "title" =>      "Mienestjes",
                        "image" =>      "mie.png",
                        "price" =>      "0,99",
                        "expiration" => "19-7-2018",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Conimex Bamimix",
                                "image" =>      "bamimix.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "3",
                                "price" =>      "0,87"
                            ],
                            "sidecard2" => [
                                "title" =>      "Lassie Toverrijst",
                                "image" =>      "rijst.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "2",
                                "price" =>      "0,87"
                            ]
                        ]
                    ],

                    [
                        "title" =>      "LU Crackers",
                        "image" =>      "minicrackers.png",
                        "price" =>      "1,29",
                        "expiration" => "19-7-2018",
                        "warning" =>    "no",
                        "sidecards" =>  [
                            "sidecard1" => [
                                "title" =>      "Garlan roomkaas",
                                "image" =>      "roomkaas.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "3",
                                "price" =>      "1,20"
                            ],
                            "sidecard2" => [
                                "title" =>      "Eiersalade",
                                "image" =>      "eiersalade.png",
                                "sticker" =>    "sticker-1.svg",
                                "row" =>        "4",
                                "price" =>      "1,39"
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

    <div class="idle active">

        <div class="idle-inner">

            <figure class="emte-logo">
                <img src="images/logo_emte.svg" />
            </figure>

            <figure class="fijnproeverspas">
                <img src="images/fijnproeverspas.png" />
            </figure>

            <figure class="arrow">
                <img src="images/arrow-down.svg" />
            </figure>

        </div>

    </div>

    <div class="vote">

        <div class="vote-inner">
            <div class="vote-text">
                <h2>Stem op de volgende aanbieding</h2>

            </div>

            <div class="vote-screen">
                <div class="left">

                    <h3>Komkommer</h3>

                    <figure class="product">
                        <img src="images/komkommer.png"/>
                    </figure>

                    <figure class="arrow">
                        <img data-product="0" src="images/arrow_left.svg"/>
                    </figure>

                </div>
                <div class="right">
                    <h3>Colgate Tandpasta</h3>

                    <figure class="product">
                        <img src="images/tandpasta.png"/>
                    </figure>

                    <figure class="arrow">
                        <img data-product="1" src="images/arrow_right.svg"/>
                    </figure>
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
            <li><a class="home" href="#">Home</a></li>
            <li><a class="btnfolder"  href="#">Folder</a></li>
            <li><a class="btnsearch"  href="#">Zoeken</a></li>
        </ul>
    </div>

</div>

</body>
</html>