<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $persona=["Nombre"=> "Jon", "Apellido"=>"Snow", "Edad"=>27,"Hobbies"=>["Netflix","Fútbol","Programar"]];
    $persona["Edad"]=25;
    echo "Su edad es: " .$persona["Edad"]."<br>";
    $persona["Direccion"]="Winterfell";
    $persona["Hobbies"][]="Play Station";
    echo "Sus hobbies son: <br>";
    for ($i=0;$i<count($persona["Hobbies"]);$i++){
      echo $persona["Hobbies"][$i];
      echo "<br>";
    }

    $numero1=123;
    $numero2=210;
    if ($numero1>$numero2){
      echo "El mayor numero es: ". $numero1;
    }
    else{
      echo "El mayor numero es: ". $numero2;
    }
    echo "<br>";
    echo "<br>Ejercicio 2: <br>";
    $numeroAleatorio=rand(1,5);
    //ejercicio 2
    if($numeroAleatorio>=3 && $numeroAleatorio<=5 ){
      echo $numeroAleatorio;
    }
    echo "<br>Ejercicio 3: <br>";
    //ejercicio 3
    if($numeroAleatorio!= 3){
      echo "<br>el número NO es 3<br>";
    }
    else {
      echo $numeroAleatorio;
    }
    echo "<br>Ejercicio 4: <br>";
    $numeroAleatorio=rand(1,100);
    if($numeroAleatorio>50){
      echo "el numero es mayor a 50";
    }
    else{
      echo "el numero es menor que 50";
    }
    echo "<br>Ejercicio 5 y 6: <br>";
    $nombreDeUsuario="admin";
    $ContraseniaDeUsuario="1234";

    if($nombreDeUsuario=="admin" && $ContraseniaDeUsuario=="1234"){
      echo "Bienvenido!";
    }
    else{
      if ($nombreDeUsuario!="admin") {
        echo "usuario incorrecto";
      }
      elseif ($ContraseniaDeUsuario!="1234") {
        echo "pass incorrecto";
      }
    }
    echo "<br>Ejercicio 7: <br>";
    $cantidadDeAlumnos=100;
    if ($cantidadDeAlumnos) {
    echo “true”;
    }
    else {
    echo “false”;
    }
    echo "<br>Ejercicio 8: <br>";
    $numero=9;
    if ($numero%2==0){
      echo "el numero es par.";
    }
    else{
      echo "el numero es impar";
    }
    echo "<br>Ejercicio 9: <br>";
    $nota= 7;
    switch ($nota) {
      case ($nota<4):
        echo "desaprobado";
        break;
      case ($nota==4 || $nota==5):
        echo "zafamos";
        break;
      case (($nota>=6) && ($nota<=8)):
        echo "Bien!!!";
        break;
      case ($nota==9):
        echo "Muy Bien!!!";
        break;
      case ($nota==10):
        echo "Excelente!!!!!";
        break;
      default:
      echo "El número no es válido";
      break;
    }
    echo "<br>Ejercicio 10: <br>";
     ?>


  </body>
</html>
