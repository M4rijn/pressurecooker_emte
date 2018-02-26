var snd = new Audio("beep.mp3"); // buffers automatically when created

alles();
function alles(){
  Quagga.init({
    inputStream : {
      name : "Live",
      type : "LiveStream"
    },
    decoder : {
      readers : ["ean_reader"]
    }
  }, function() {
        Quagga.start();
        Quagga.onDetected(function(result) {
          var code = result.codeResult.code;
          snd.play(); 
                $.ajax({
                  type: "POST",
                  url: "connection.php" ,
                  data: { code: code }
                });                
                location.reload(false);
      });
  });
}