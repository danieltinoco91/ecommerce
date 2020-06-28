function countCart() {
    var lcart = localStorage.getItem("shopping_cart");
    var lst = [];
    if (lcart !== null && lcart !== "null") {
        lst = JSON.parse(lcart);
    }
    $("#countCart").text(lst.length);
    return lst.length;
}
function addCart(item) {
    var lcart = localStorage.getItem("shopping_cart");
    var lst = [];
    if (lcart !== null && lcart !== "null") {
        lst = JSON.parse(lcart);
    }
    var ok = true;
    lst.forEach(function (i, index) {
        if (i.id == item.id) {
            ok = false;
        }
    });
    if (ok) {
        lst.push(item);
    }
    $("#countCart").text(lst.length);
    localStorage.setItem("shopping_cart", JSON.stringify(lst));
}
function removeCart(item) {
    var lcart = localStorage.getItem("shopping_cart");
    var lst = [];
    if (lcart !== null && lcart !== "null") {
        lst = JSON.parse(lcart);
    }
    var i_remove;
    lst.forEach(function (i, index) {
        if (i.id == item.id) {
            i_remove = index;
        }
    });
    lst.splice(i_remove, 1);
    $("#countCart").text(lst.length);
    localStorage.setItem("shopping_cart", JSON.stringify(lst));
}
function listCart() {
    var lcart = localStorage.getItem("shopping_cart");
    var lst = [];
    if (lcart !== null && lcart !== "null") {
        lst = JSON.parse(lcart);
    }
    return lst;
}
function changeCantidad(id, cant) {
    var lcart = localStorage.getItem("shopping_cart");
    var lst = [];
    if (lcart !== null && lcart !== "null") {
        lst = JSON.parse(lcart);
    }    
    lst.forEach(function (i, index) {
        if (i.id == id) {
            lst[index].cantidad=cant;
        }
    });    
    $("#countCart").text(lst.length);
    localStorage.setItem("shopping_cart", JSON.stringify(lst));
}

function clearCart() {
    localStorage.removeItem("shopping_cart");
    countCart();
}