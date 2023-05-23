<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad MONO</title>
    <link rel="stylesheet" href="./styles/MonosCool.css">
</head>
<body id="Banana" >
    <?php    
        $palabra = array(
            0 => "a",
            1 => "b",
            2 => "c",
            3 => "d",
            4 => "e",
            5 => "f",
            6 => "g",
            7 => "h",
            8 => "i",
            9 => "j",
            10 => "camisa",
            11 => "nube",
            12 => "perro",
            13 => "gato",
            14 => "canción",
            15 => "guitarra",
            16 => "reloj",
            17 => "computadora",
            18 => "chocolate",
            19 => "llave",
            20 => "espejo",
            21 => "otoño",
            22 => "arcoíris",
            23 => "bolígrafo",
            24 => "zapatos",
            25 => "lápiz",
            26 => "silla",
            27 => "naranja",
            28 => "fresa",
            29 => "cama",
            30 => "mochila",
            31 => "bicicleta",
            32 => "sol",
            33 => "abrigo",
            34 => "río",
            35 => "radio",
            36 => "puerta",
            37 => "papel",
            38 => "estrella",
            39 => "maleta",
            40 => "calcetines",
            41 => "vángel",
            42 => "sombrero",
            43 => "ventana",
            44 => "bufanda",
            45 => "globo",
            46 => "carro",
            47 => "cerrojo",
            48 => "lámpara",
            49 => "ratón",
            50 => "patata",
        );

        
        $modo  = (isset($_POST['modo'])  && $_POST['modo'] != "")?    $_POST["modo"]: 0 ;
        $zona  = (isset($_POST['zona'])  && $_POST['zona'] != "")?    $_POST["zona"]: 0 ;
        $frase = (isset($_POST['frase']) && $_POST['frase'] != "")?   $_POST["frase"]: 0 ;//La frase hecha cadena
        
        $arrayFrase = explode(" ", $frase);//nuestra frase cadena ----> se transforma a un arreglo con la cantidad de palabras de nuestra cadena
        
        
        $numlocalidades = count($arrayFrase);// nos guarda en un int/número la cantidad de localidades del arreglo anterior, o cantidad de palabras

        //arreglo con la cantidad de localidades igual a la cantidad de palabras en arrayFrase
        $arregloNumLocal;
        for($contador=0; $contador < $numlocalidades; $contador++){
            $arregloNumLocal[$contador] = $contador;
        }

        function frase($arrayFrase, $modo, $arregloNumLocal, $numlocalidades, $frase)
        {
            if($modo == 1){
                    
                    echo "<span>"." ".$frase." </span>";
            }   
            else 
            {
                if($modo == 2){
                    for($num=0; $num < $numlocalidades; $num++)
                    {
                        echo "<span>".$arrayFrase [$arregloNumLocal[$num]]." </span>";
                    }
                }                
            }
            return;
        }  

        function palabra(){
            $randchar = rand (3,8);
            for ($m=0; $m < $randchar; $m++) {
                $numerito = rand (63,126);
                printf("%c", $numerito);
            }
            echo " ";
            return;
        }
    ?>
    
    <center><span id="titulo">MonkeyNovela</span></center>
    
    <table align="center" border="2" style="border-collapse: collapse;" cellpadding=30px>
        <thead>
            <tr>
                <th id ="titulo2">
                    Libro de Monito: 
                    <?php 
                        $ptitulo = rand (3,5);
                        for ($g=0; $g < $ptitulo ; $g++) { 
                            palabra(); 
                        } 
                    ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php 
                        if($modo != 0 && $frase!=0)
                        {
                            shuffle($arregloNumLocal);
                            //nos da # aleatorio entre 1 y 300
                            $rand300 = rand(1,300);
                            //contador local del if para el modo 3
                            $cl=0;
                            //inicia el ciclo para impresión 300 palabras
                            for ($c=1; $c<=300; $c++)
                            {   
                                //si el # de palabra en el que vamos, es igual al que nos dio rand300, imprime la frase 
                                if ($c == $rand300 && $modo != 3)
                                {
                                    frase($arrayFrase, $modo, $arregloNumLocal, $numlocalidades, $frase);
                                }
                                else
                                {
                                    if($modo==3 && $cl < $numlocalidades)
                                    {                                  
                                        //Prb25 es un # aleatorio entre el 1 y 10
                                        $Prb25 = rand(1,5);
                                        if($Prb25 == 1) 
                                        {
                                            echo "<span>".$arrayFrase[$arregloNumLocal[$cl]]." </span>";
                                            $cl++;
                                        }    
                                    }
                                    palabra();
                                }
                                
                            }
                        } 
                        else {
                            echo "Wachon, pon la frase :>";
                        } 
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <br>

    <?php 
    echo "Mode: ".$modo;
    /*
        America/Monterrey --- CDMX/Monterrey
        America/New_York  --- New York
        America/Chicago   --- Chicago
        Asia/Beirut       --- Beirut
    */
    // horario es una cadena que por predeterminado ya tiene una zona horaria y s ele asignarán con un switch case
        $horario = "America/Monterrey";

        switch ($zona) {
            case '1':
                $horario = "America/Monterrey";
                break;

            case '2':
                $horario = "America/New_York";
                break;

            case '3':
                $horario = "America/Chicago";
                break; 

            case '4':
                $horario = "Asia/Beirut";
                break; 

            default:
                $horario = "America/Monterrey"; 
                break;
        }

        date_default_timezone_set($horario);
        $fecha=date('d-m-y '); 
        $hora=date(' h:i a '); 
    
    ?>
    <table align="center" border="2" style="border-collapse: collapse;" cellpadding=10px>
        <thead>
            <tr>
                <th class="zona">
                    <?php
                        echo "Fecha de Consulta: ".$fecha;
                        echo "<br>Hora: ".$hora;
                        //me despliega la cadena para saber que zona horaria...
                        echo "<br>La zona horaria seleccionada es: ".$horario;        
                    ?>      
                        <form action="./index.html" target="_self">
                            <button type="submit">Volver</button>  
                        </form> 
                </th>
            </tr>
        </thead>
    </table>
</body>
</html>