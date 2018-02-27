function ajax_get(url, callback) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            try {
                var data = JSON.parse(xmlhttp.responseText);
            } catch(err) {
                console.log(err.message + " in " + xmlhttp.responseText);
                return;
            }
            callback(data);
        }
    };
 
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
 
ajax_get('../json/stemmen.json', function(data) {
    $("#product1").append(data["voteProducts"][0]["productName"])
    $("#product2").append(data["voteProducts"][1]["productName"])
    $("#product1").append(data["voteProducts"][0]["numberVotes"])
    $("#product2").append(data["voteProducts"][1]["numberVotes"])
    
    // document.getElementById("title").innerHTML = data["title"];
 
    // var html = "<h2>" + data["title"] + "</h2>";
    // html += "<h3>" + data["description"] + "</h3>";
    // html += "<ul>";
    //    for (var i=0; i < data["articles"].length; i++) {
    //        html += '<li><a href="' + data["articles"][i]["url"] + '">' + data["articles"][i]["title"] + "</a></li>";
    //    }
    // html += "</ul>";
    // document.getElementById("text").innerHTML = html;
});