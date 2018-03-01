$(document).ready(function () {
    init();
});

function init() {

    document.addEventListener('gesturestart', function (e) {
        e.preventDefault();
    });

    $(document).on("click touchend", "a.home", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
        $(".welcome").addClass("active");
    });
    // $(document).on("click touchend", "a.folder", function () {
    //     $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
    //     $(".folder").addClass("active");
    // });
    $(document).on("click touchend", "a.btnsearch", function () {
        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
        $(".search").addClass("active");
    });

    //////////////////////////////////////////////////////////////// SHOPPING LIST
    var shoppingList = [
        ["2", "Maaltijdsalade Kip met pasta", "3,99"],
        ["2", "Sourcy 500ml", "1,49"],
        ["2", "Lipton Ice Tea Peach 500ml", "1,89"],
        ["2", "Rozijnen 300gr", "1,20"],
        ["2", "Groene druiven 400gr", "2,50"],
        ["5", "Tijgerbrood", "0,80"],
        ["6", "Maggi lasagnamix 4 pers.", "6,40"],
        ["6", "Pickwick Earl Grey thee", "1,25"],
        ["6", "Bonduelle erwten 500gr", "2,30"],
        ["6", "Calvé Pindakaas 400gr", "2,80"],
        ["7", "Duivis Borrelnootjes 600gr.", "2,40"],
        ["8", "Dubbel Frisss 1L", "3,79"],
        ["1", "Bananen", "3,10"],
        ["1", "Paprika", "1,40"]
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

    //Temp
    // scannedProduct(1);

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
            case 8888888888888:
                // Calvé pindakaas
                scannedProduct("1");
                break;
            case 2222222222222:
                /// Sourcy 500ml
                scannedProduct("2");
                break;
            case 1111111111116:
                // Lipton ice tea
                scannedProduct("3");
                break;
            case 3333333333338:
                // Pickwick earl grey
                scannedProduct("4");
                break;
            case 3333333333338:
                // Dubbel Frisss
                scannedProduct("5");
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
            if(keypressCounter < 5){
                keypressCounter++;
            }
            return false;
        }
    });

    function scannedProduct(product){
        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
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
        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
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

        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
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

        $(".product, .welcome, .vote, .vote-results, .search, .search-result").removeClass("active");
        $(".vote-results").addClass("active");
    });

    //////////////////////////////////////////////////////////////// SEARCH

    $(".search input").on("input", function () {
        var value = $(this).val();
        if(value.includes("ei")){
            $(".search .suggestions").addClass("show");
        } else {
            $(".search .suggestions").removeClass("show");
        }
    });

    $(document).on("click touchend", ".search .suggestions", function(){
        $(".product, .welcome, .vote, .vote-results, .search").removeClass("active");
        $(".search-result").addClass("active");
    });

}