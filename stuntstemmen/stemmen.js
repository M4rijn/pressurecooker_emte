var urlJSON = '../json/stemmen.json';
var urlPHP = 'postvote.php';

function appendData(number,data){
    $("#product" + number).append(data["voteProducts"][number]["productName"]);
}

$.getJSON(urlJSON,function(data) {
    appendData(0,data);
    appendData(1,data);
})

$('.vote-button').on('click',function () {
    var product = $(this).data("product");
    var data = {
        vote: 1,
        product: product
    }
    $.post(urlPHP,data);
})