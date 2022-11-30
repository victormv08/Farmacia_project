function verficarCantidad(){
    var cantidad = document.getElementById("cantidad").value;
    if(cantidad <= 0){
        alert("La cantidad debe ser mayor a 0");
        document.getElementById("cantidad").style.borderColor = "red";
    }
    else{
        document.getElementById("cantidad").style.borderColor = "green";
    }
}

function verificarPrecio(){
    var precio = document.getElementById("precio").value;
    if(precio <= 0){
        alert("El precio debe ser mayor a 0");
        document.getElementById("precio").style.borderColor = "red";
    }
    else{
        document.getElementById("precio").style.borderColor = "green";
    }
}