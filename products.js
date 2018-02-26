// Enable pusher logging - don't include this in production
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
          $(".product1").show();
          $(".product2").hide();
          $(".product3").hide();
          $(".product4").hide();
            break;
        case 2222222222222:
          $(".product1").hide();
          $(".product2").show();
          $(".product3").hide();
          $(".product4").hide();
            break;
        case 1111111111116:
          $(".product1").hide();
          $(".product2").hide();
          $(".product3").show();
          $(".product4").hide();
            break;
        case 3333333333338:
        //3333333333338:
          $(".product1").hide();
          $(".product2").hide();
          $(".product3").hide();
          $(".product4").show();
            break;
    }
});