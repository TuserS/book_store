function validCategory() {
    var cate = document.getElementById("name").value;

    if (nameValid(cate)) {
        return true;
    }
    var err = document.getElementById("err");
    err.innerText = "Category name required!";
    return false;
}


function nameValid(name) {
    var n_len = name.length;
    if (n_len == 0 ) {
      return false;
    }
    return true;
  }