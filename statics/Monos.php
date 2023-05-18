<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad MONO</title>
    <link rel="stylesheet" href=".\MonosCool.css">
    <style> 
        h1{
            color: red;
            text-align: center;
        }
        span{
            color: red;
            font-weight: 900;
            font-size: medium;
        }
        td{
            text-align: justify;
        }

    </style>
</head>
<body>
    <?php    
        $palabra = array(
            0 => "lámpara",
            1 => "avión",
            2 => "ventana",
            3 => "pelota",
            4 => "sonrisa",
            5 => "árbol",
            6 => "montaña",
            7 => "taza",
            8 => "libro",
            9 => "mariposa",
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
        
        $cadFrase = array(
            0 => "En",
            1 => "medio",
            2 => "del",
            3 => "caos",
            4 => "y",
            5 => "la",
            6 => "destrucción",
            7 => "el",
            8 => "Doom",
            9 => "Slayer",
            10 => "emerge",
            11 => "como",
            12 => "un",
            13 => "símbolo",
            14 => "de",
            15 => "esperanza"
        );

        $arregloNumCad = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

        $modo = (isset($_POST['modo']) && $_POST['modo'] != "")? $_POST["modo"]: 0 ;

        function frase($cadFrase, $modo, $arregloNumCad )
        {
            if($modo == 1){
                for($num=0; $num <= 15; $num++)
                {
                    echo "<span>".$cadFrase[$num]." </span>";
                }
            }   
            else 
            {
                if($modo == 2){
                    shuffle($arregloNumCad);
                    for($num=0; $num <= 15; $num++)
                    {
                        echo "<span>".$cadFrase[ $arregloNumCad[$num] ]." </span>";
                    }
                }                
            }
        }  
        
    ?>
    
    <h1>MonkeyNovela</h1>
    
    <table align="center" border="2" style="border-collapse: collapse;" cellpadding=30px>
        <thead>
            <tr>
                <th>
                    Libro de Monito: 
                    <?php 
                        $numpalabrastitulo = rand (1,5);
                        for ($i=1; $i <= $numpalabrastitulo ; $i++) 
                        { 
                            $numerito = rand (0,49);
                            echo $palabra[$numerito]." ";
                        }    
                    ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php 
                        if($modo != 0)
                        {
                            shuffle($arregloNumCad);
                            $cl=0;
                            $comprobador = 0;
                            
                            for ($c=1; $c<=300; $c++)
                            {
                                $Prb25 = rand(1,10);
                                $numerito = rand (0,50);
                                if ($c == 300 && $comprobador==0)
                                {
                                    frase($cadFrase, $modo, $arregloNumCad);
                                    $comprobador ++;
                                }
                                else
                                {
                                    if ($numerito == 50 && $comprobador==0)
                                    {
                                        frase($cadFrase, $modo, $arregloNumCad);
                                        $comprobador ++;
                                    }
                                    else
                                    {
                                        if($modo==3 && $cl <= 15)
                                        {                                  
                                            $Prb25 = rand(1,10);
                                            if($Prb25 == 1) 
                                            {
                                                echo "<span>".$cl.$cadFrase[$arregloNumCad[$cl]]." </span>";
                                                $cl++;
                                            }    
                                        }
                                        echo $palabra[$numerito]." ";
                                    }
                                }
                            }
                        }  
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <form action="./Monos.php" method="post">
        <fieldset>
            <legend>Selecciona a tu escritor favorito</legend>
            <label for="modo">Escoge un modo</label>
            <select name="modo">
                <option value="1">Normal</option>
                <option value="2">Desordenado</option>
                <option value="3">Aleatorio</option>
            </select>
            <button type="sumbit">Enviar</button>
        </fieldset>
    </form>
    
</body>
</html>