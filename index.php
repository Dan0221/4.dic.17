<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" />
 <title>AJAX - XML</title>
<style type="text/css">

</style>

</head>
<body>

Buscar persona: <input type = "type" id="nombre" onkeyup = "mostrarUsuario(this.value)" placeholder = "Ingresar nombre"/>

<div id="info"></div>

<script type="text/javascript">

    var resultado = document.getElementById("info");

    function mostrarUsuario(nombre){
        var xmlhttp;
        if (window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if (nombre.length === ""){
            resultado.innerHTML = "";
        }else{
            xmlhttp.onreadystatechange = function(){

                if (xmlhttp.readyState === 4 && this.status === 200) {
                    resultado.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","server.php?nombre=" + nombre,true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>
