

function crearXMLHttpRequest(){

    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    return xmlhttp;
}


function getProductos(id) {
    $("#contenido").fadeOut("fast", function () {
        $("#contenido").load("./index.php?accion=productos&categoria=" + id, function () {
            $("#contenido").fadeIn("fast");
        });
    });


}


function getDetalleProducto(idProducto){

    $("#contenido").fadeOut("fast", function () {
        $("#contenido").load("./index.php?accion=detalleproducto&id=" + idProducto, function () {
            $("#contenido").fadeIn("fast");
        });
    });

}


function anadirProductoCarrito(id) {

    var xmlhttp = crearXMLHttpRequest();

    var cantidad = document.getElementById("cantidad").value;

    xmlhttp.open("GET", "index.php?accion=carrito&id=" + id + "&cantidad=" + cantidad + "&estado=3", true);

    xmlhttp.send();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert("Producto añadido al carrito");
            location.href="index.php";
        }
    }
}


function anadirProductoCarritoFail() {

    alert("Inicia sesión para poder comprar!");

    location.href = "index.php?accion=login&estado=0";

}


function finalizarCompra() {

    $("#contenido").load("./index.php?accion=compra&estado=0");
}

function vaciarCarrito() {

    location.href = "./index.php?accion=compra&estado=1";

}