$(document).ready(function () {
    init();
});

function init() {

    document.addEventListener('gesturestart', function (e) {
        e.preventDefault();
    });

    $(document).on("click touchend", "a.home", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".welcome").addClass("active");
    });
    $(document).on("click touchend", "a.btnfolder", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".folder").addClass("active");
    });
    $(document).on("click touchend", "a.btnsearch", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".search").addClass("active");
    });

    //////////////////////////////////////////////////////////////// SHOPPING LIST
    var shoppingList = [
        // ["2", "Maaltijdsalade Kip met pasta", "3,99"],
        // ["2", "Lipton Ice Tea Peach 500ml", "1,89"],
        // ["5", "Tijgerbrood", "0,80"],
        // ["6", "Maggi lasagnamix 4 pers.", "6,40"],
        // ["6", "Pickwick Earl Grey thee", "1,25"],
        // ["6", "Bonduelle erwten 500gr", "2,30"],
        ["6", "Calvé Pindakaas 400gr", "2,80"],
        // ["8", "Dubbel Frisss 1L", "3,79"],
        // ["1", "Bananen", "3,10"],
        // ["1", "Paprika", "1,40"],
        ["5", "Roerbakmie", "0,99"]
        // ["6", "Kaassticks", "0,99"],
        // ["7", "Pringles Sour & Onion", "1,29"],
        // ["1", "Pastasaus pittig", "0,99"],
        // ["6", "Granenbiscuits", "0,99"],
        // ["4", "LU Crackers", "1,29"]
    ];

    fillShoppingList();
    function fillShoppingList() {

        var shoppinglistitems = $(".shopping-list-items");
        shoppinglistitems.empty();

        shoppingList.sort();

        var totalprice = 0;
        $.each(shoppingList, function (key, value) {

            var replacedecimal = value[2].replace(",", ".");

            var num = parseFloat(replacedecimal);

            totalprice += num;

            if(value[0] === "checked"){
                value[0] = "<img class='check' src='images/checked.svg' />";
            }

            var newListItem = "";
            if(value[3]){
                newListItem = "justadded";
                value.splice(3);
            }

            var row = $("<div class='row "+newListItem+"'>" +
                "<div class='collumn1'><p>"+value[0]+"</p></div>" +
                "<div class='collumn2'><p>"+value[1]+"</p></div>" +
                "<div class='collumn3'><p>"+value[2]+"</p></div>" +
                "<div class='shopping-list-active-buttons'>"+
                "<figure class='delete'>"+
                "<img src='images/delete.svg' />"+
                "</figure>"+
                "<figure class='plus'>"+
                "<img src='images/plus.svg' />"+
                "</figure>"+
                "<figure class='minus'>"+
                "<img src='images/minus.svg' />"+
                "</figure>"+
                "</div>"+
                "</div>");

            $(".shopping-list-items").append(row);

        });

        $(".bottom .right h4 span").text(totalprice.toFixed(2).toString().replace(".", ","));
    }

    /////////////////////////////////////////////// Enable pusher logging - don't include this in production
    var naamProduct;
    Pusher.logToConsole = true;

    var pusher = new Pusher('a356c13e9360934ca64c', {
        cluster: 'eu',
        encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        // console.log(data.message);

        switch (parseInt(data.message)) {
            case 8722700462958:
                // Calvé pindakaas
                scannedProduct("1");
                break;
            case 8711200197002:
                // Lipton ice tea
                scannedProduct("2");
                break;
            case 3333333333338:
                // Pickwick earl grey
                scannedProduct("3");
                break;
            case 8713300042435:
                // Dubbel Frisss
                scannedProduct("4");
                break;
            case 8714700999237:
                // Roerbakmie
                scannedProduct("5");
                break;
            case 8710458020926:
                // Kaassticks
                scannedProduct("6");
                break;
            case 5053990127740:
                // Pringles Sour & Onion
                scannedProduct("7");
                break;
            case 8710624161255:
                // Pastasaus
                scannedProduct("8");
                break;
            case 8710624190231:
                // Oke Cola
                scannedProduct("9");
                break;
            case 8710458017629:
                // Granenbiscuit
                scannedProduct("10");
                break;
            case 8710458025518:
                // Mienestjes
                scannedProduct("11");
                break;
            case 7622210475152:
                // LU Crackers
                scannedProduct("12");
                break;
            case 3159470001424:
                // Kellogg's
                scannedProduct("13");
                break;
        }
    });

    var keypressCounter = 1;
    $(document).on("keydown", function (event) {
        if (event.keyCode == 37) {
            scannedProduct(keypressCounter.toString());
            if(keypressCounter > 1){
                keypressCounter--;
            }
            return false;
        } else if (event.keyCode == 39) {
            scannedProduct(keypressCounter.toString());
            if(keypressCounter < 13){
                keypressCounter++;
            }
            return false;
        }
    });

    function scannedProduct(product){
        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".product"+product).addClass("active");

        var name = $(".product"+product+" .card-big .card-header h3").text();

        var counter = 0;
        $.each(shoppingList, function (key, value) {
            if(value[1] === name){
                shoppingList[counter][0] = "checked";
                fillShoppingList();
                return false;
            }
            counter++;
        });

    }

    //////////////////////////////////////////////////////////////// ADD TO SHOPPING LIST

    $(document).on("click touchsend", ".add", function () {

        var $thisCard = $(this).closest(".card");

        if(!$thisCard.hasClass("clicked")){
            $thisCard.addClass("clicked");

            var tempArr = [];

            tempArr.push($thisCard.find(".additional-info .row p").text());
            tempArr.push($thisCard.find(".card-header h5").text());
            tempArr.push($thisCard.find(".additional-info .price p").text());
            tempArr.push("new");

            shoppingList.push(tempArr);

            fillShoppingList();
        }

    });

    $(document).on("click touchend", ".shopping-list-items .row", function () {
        var $this = $(this);
        $(".row").removeClass("active");
        $this.addClass("active");
    });

    $(document).on("click touchend", ".shopping-list .row .shopping-list-active-buttons .delete", function () {
        var name = $(this).closest(".row").find(".collumn2 p").text();
        var counter = 0;
        $.each(shoppingList, function (key, value) {
            if(value[1] === name){
                shoppingList.splice(counter,1);
                fillShoppingList();
                return false;
            }
            counter++;
        });
    });

    //////////////////////////////////////////////////////////////// VOTE

    var urlJSON = 'json/stemmen.json';
    var urlPHP = 'stuntstemmen/postvote.php';

    $.getJSON(urlJSON,function(data) {
        var totalvotes = data["voteProducts"][0]["numberVotes"] + data["voteProducts"][1]["numberVotes"];
        for (var i = 0; i < 2; i++){
            var percentage = Math.round(((100 / totalvotes) * data["voteProducts"][i]["numberVotes"]));
            appendData(i, percentage);
        }
    });

    function appendData(number, percentage){
        $(".vote-results .bar-container .bar-"+number+" p.percentage span").text(percentage);
        $(".vote-results .bar-container .bar-"+number).css("width", percentage+"%");
    }

    $(document).on("click touchend", ".shopping-list .bottom .right h4", function () {

        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".vote").addClass("active");

    });

    $(document).on("click touchend", ".vote .arrow", function () {
        var product = $(this).find("img").data("product");
        console.log(product);
        var data = {
            vote: 1,
            product: product
        };
        $.post(urlPHP,data);

        $(".product, .welcome, .vote, .vote-results, .search, .search-result, .folder, .idle").removeClass("active");
        $(".vote-results").addClass("active");
    });

    //////////////////////////////////////////////////////////////// FOLDER

    var margin = 0;
    var carousselCounter = 1;
    $(document).on("click touchend", ".folder .folder-buttons .left", function () {
        if(carousselCounter >= 2){
            margin += 634;
            $(".folder .folder-card-caroussel-inner").css("margin-left", margin+"px");
            carousselCounter--;
        }
    });
    $(document).on("click touchend", ".folder .folder-buttons .right", function () {
        if(carousselCounter <= 3){
            margin -= 634;
            $(".folder .folder-card-caroussel-inner").css("margin-left", margin+"px");
            carousselCounter++;
        }
    });

    //////////////////////////////////////////////////////////////// SEARCH

    $(".search input").on("input", function () {
        var value = $(this).val();
        if(value.includes("Ei")){
            $(".search .suggestions").addClass("show");
        } else {
            $(".search .suggestions").removeClass("show");
        }
    });

    $(document).on("click touchend", ".search .suggestions", function(){
        $(".product, .welcome, .vote, .vote-results, .search, .folder, .idle").removeClass("active");
        $(".search-result").addClass("active");
    });

    //////////////////////////////////////////////////////////////// IDLE

    $(document).on("click touchend", ".idle", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .folder, .idle").removeClass("active");
        $(".welcome").addClass("active");
    });

}