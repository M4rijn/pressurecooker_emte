$(document).ready(function () {
    init();
});

function init() {

    //////////////////////////////////////////////////////////////// SHOPPING LIST
    var shoppingList = [
        ["2", "Maaltijdsalade Kip met pasta", "3,99"],
        ["2", "Sourcy 500ml", "1,49"],
        ["2", "Rozijnen 300gr", "1,20"],
        ["2", "Groene druiven 400gr", "2,50"],
        ["3", "Kaas jong blok 400gr", "6,20"],
        ["4", "Volkoren brood", "1,10"],
        ["5", "Tijgerbrood", "0,80"],
        ["5", "Pindakaas 500gr", "4,10"],
        ["6", "Maggi lasagnamix 4 pers.", "6,40"],
        ["6", "Hak sperziebonen 500gr", "3,70"],
        ["6", "Bonduelle erwten 500gr", "2,30"],
        ["6", "Hak Spinazie 300gr", "1,56"],
        ["7", "Duivis Borrelnootjes 600gr.", "2,40"],
        ["7", "Lay’s Paprika", "1,79"],
        ["8", "Coca cola 4 pack", "7,99"],
        ["8", "Fanta light 1,5l", "2,49"],
        ["checked", "Mandarijnen", "2,69"],
        ["1", "Bananen", "3,10"],
        ["1", "Paprika", "1,40"]
    ];

    fillShoppingList();
    function fillShoppingList() {

        var shoppinglistitems = $(".shopping-list-items");
        shoppinglistitems.empty();

        shoppingList.sort();

        $.each(shoppingList, function (key, value) {

            if(value[0] === "checked"){
                value[0] = "<img class='check' src='images/checked.svg' />";
            }

            var row = $("<div class='row'>" +
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
    }

    //Temp
    scannedProduct(1);

    /////////////////////////////////////////////// Enable pusher logging - don't include this in production
    var naamProduct;
    Pusher.logToConsole = true;

    var pusher = new Pusher('a356c13e9360934ca64c', {
        cluster: 'eu',
        encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        console.log(data.message);

        switch (parseInt(data.message)) {
            case 8888888888888:
                scannedProduct("1");
                break;
            case 2222222222222:
                scannedProduct("2");
                break;
            case 1111111111116:
                scannedProduct("3");
                break;
            case 3333333333338:
                scannedProduct("4");
                break;
        }
    });

    function scannedProduct(product){
        $(".product").removeClass("active");
        $(".product"+product).addClass("active");

        var name = $(".product"+product+" .card-big .card-header h3").text();

        var counter = 0;
        $.each(shoppingList, function (key, value) {
            if(value[1] === name){
                console.log("ait let's check deze af");
                shoppingList[counter][0] = "checked";
                fillShoppingList();
                return false;
            }
            counter++;
        });

    }

    //////////////////////////////////////////////////////////////// ADD TO SHOPPING LIST

    $(document).on("click", ".add", function () {

        var $thisCard = $(this).closest(".card");

        if(!$thisCard.hasClass("clicked")){
            $thisCard.addClass("clicked");

            var tempArr = [];

            tempArr.push($thisCard.find(".additional-info .row p").text());
            tempArr.push($thisCard.find(".card-header h5").text());
            tempArr.push($thisCard.find(".additional-info .price p").text());

            shoppingList.push(tempArr);

            console.log(shoppingList);



            fillShoppingList();
        }

    });

    $(document).on("click", ".shopping-list-items .row", function () {
        var $this = $(this);
        $(".shopping-list .row").removeClass("active");
        $this.addClass("active");
    });

    $(document).on("click", ".shopping-list .row .shopping-list-active-buttons .delete", function () {
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
}