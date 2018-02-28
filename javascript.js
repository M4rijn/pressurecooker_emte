$(document).ready(function () {
    init();
});

function init() {

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
        ["8", "Coca cola 4 pack", "7,99"],
        ["8", "Dubbel Frisss 1l", "3,79"],
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
        console.log(data.message);

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
            console.log(keypressCounter);
            if(keypressCounter > 1){
                keypressCounter--;
            }
            return false;
        } else if (event.keyCode == 39) {
            scannedProduct(keypressCounter.toString());
            console.log(keypressCounter);
            if(keypressCounter < 5){
                keypressCounter++;
            }
            return false;
        }
    });

    function scannedProduct(product){
        $(".product").removeClass("active");
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

    $(document).on("click touchstart", ".add", function () {

        var $thisCard = $(this).closest(".card");

        if(!$thisCard.hasClass("clicked")){
            $thisCard.addClass("clicked");

            var tempArr = [];

            tempArr.push($thisCard.find(".additional-info .row p").text());
            tempArr.push($thisCard.find(".card-header h5").text());
            tempArr.push($thisCard.find(".additional-info .price p").text());
            tempArr.push("new");

            shoppingList.push(tempArr);

            console.log(shoppingList);

            fillShoppingList();
        }

    });

    $(document).on("click touchstart", ".shopping-list-items .row", function () {
        var $this = $(this);
        $(".shopping-list .row").removeClass("active");
        $this.addClass("active");
    });

    $(document).on("click touchstart", ".shopping-list .row .shopping-list-active-buttons .delete", function () {
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