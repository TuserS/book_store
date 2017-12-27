function showCart() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);
            // document.getElementById("demo").innerHTML = myObj[2];
            console.log('hi');
        }
    };
    xmlhttp.open("POST", "../../../service/cartDetails_service.php", false);
    xmlhttp.send();
}
