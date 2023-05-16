<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad MONO</title>
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
            6=> "montaña",
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
            49 => "ratón"
        );
        $numerito = rand (0,49);
        
    ?>



<table align="center" border="2" style="border-collapse: collapse;" cellpadding=30px>
        <thead>
            <tr>
                <th>
                    Libro de Monito: <?php echo $palabra[$numerito];?>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php 
                        for ($c=1; $c<=10; $c++)
                        {
                            for ($c2=1; $c2 <=15 ; $c2++) { 
                                $numerito = rand (0,49);
                                echo $palabra[$numerito]." ";
                            }
                            echo "<br>";
                        }
                        
                    ?>

                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>