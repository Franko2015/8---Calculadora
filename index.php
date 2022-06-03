<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="estilos.css">
    <style type="text/css">
    @media screen and (max-width:1000px){
      html{
        zoom: 200%;
      }
      input{
        opacity: 80%;
        width: 100%;
        text-align: center;
      }
      td{
        width: 10%;
        height: 100%;
      }
      th{
        width: 100%;
        height: 100%;
      }
      table{
        margin-left: 0%;
        margin-right: 20%;
        width: 50%;
        height: 20%;
      }
      button{
        opacity: 100%;
        width: 100%;
        text-align: center;
      }
      .container{
        margin-left: 0%;
        margin-right: 10%;
        width: 90%;
        height: 100%;
      }
      .cont-resultado{
        opacity: 70%;
        padding-top: 5%;
        margin-left: 0%;
        margin-right: 5%;
        background-color: white;
      }
      h4{
        text-align: center;
        color: black;
      }
      #resultado{
        color:red;
        text-align: left;
      }
      #operacion{
        color:green;
        text-align: left;
      }
      .op{
        float: left;
      }
      .re{
        float: left;
      }
      body {
        font-family:helvetica;
        width: 100%;
        margin:0;
        height: 100%;
        border: 0;
        padding: 0 ;
        background: url("R.jpg") no-repeat center top;
      }
      .volver{
        opacity: 100%;
        width: 50%;
        margin-left:20%;
        margin-bottom: 5%;
      }
    }
    body{
      background: url("R.jpg")
    }
    input{
        width:80px;
        text-align: center;
      }
      button{
        width:80px;
      }
      .container{
        padding-left: 35%;
        padding-top: 30px
      }
      .cont-resultado{
        margin:5%;
        padding: 20px;
        background-color: white;
      }
      h4{
        padding: 2px;
        margin:10px;
        text-align: center;
        color: black;
      }
      #resultado{
        color:red;
      }
      #operacion{
        color:green;
      }
      .op{
        float: left;
      }
      .re{
        float: left;
      }
      .volver{
        margin-left:70%;
        padding:0%;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <table>
      <tr>
        <td><input type="number" name="txtUno" id="txtUno" value="0" step="1"></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="resta()">-</button></td>
      </tr>
      <tr>
        <td><input type="number" name="txtDos" id="txtDos" value="0" step="1"></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="suma()">+</button></td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="multiplicacion()">x</button></td>
        <td><button type="button" class="btn btn-dark" name="submit" value="1" onclick="division()">/</button></td>
      </tr>
    </table>
    </div>
<br>
<div class="cont-resultado">
    <h4 class="op">&nbsp &nbsp Operacion: </h4><h4 id="operacion">&nbsp Sin operación</h4>
    <br>
    <h4 class="re">&nbsp &nbsp Resultado: </h4><h4 id="resultado">&nbsp Sin resultado</h4>
    <br>

    <a href="index.php" class="volver"><input type="button" class="btn btn-dark align" value="Volver"></a>
  
</div>
<script>
//Adición
  function suma() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)+parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Adición";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Sustracción
  function resta() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)-parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Sustracción";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Multiplicacion
  function multiplicacion() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)*parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp Multiplicación";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}

//Division
  function division() {
    var res,text;
    uno = document.getElementById("txtUno").value;
    dos = document.getElementById("txtDos").value;

    if (isNaN(uno) || uno=='' && isNaN(dos) || dos=='') {
        text = "Es necesario introducir un número";
    } else {
      res=parseInt(uno)/parseInt(dos);
      text= res;
    }
    document.getElementById("operacion").innerHTML = "&nbsp División";
    document.getElementById("resultado").innerHTML = "&nbsp"+text;
}
</script>
  </body>
</html>
