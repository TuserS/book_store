function addCart(bookid) {

    var id = Number(bookid);

    document.getElementById("cartnumber").innerHTML = this.responseText;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cartnumber").innerHTML = this.responseText;
            document.getElementById("cartnumber").style.color = "tomato";
        }
    };
    xmlhttp.open("POST", "../../../service/cart_service.php?id="+id, false);
    xmlhttp.send();

}
