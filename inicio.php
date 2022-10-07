<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proj-php</title>
</head>
<body>
     <!--<  ?php para iniciar -->
     <!-- ?> para finalizar php 

    // $ para declarar variável
    $x=5;
    echo $x;
    
    if($x==5){
        // . concatena ao invés de +
        echo"<br>"."Ok";
    }
    else{
        echo"<br>Errado";
    }
    ?> -->

    <?php
        $universo = "Marvel";
        $heroi = "Aquaman";
        if($universo=="Marvel"){
            echo "<br>O universo escolhido foi <b>Marvel</b>";
            if($heroi=="Hulk"){
                echo"e o herói escolhido foi o <b>Hulk</b>";
                echo "<br><img src=img/hulk.png>";
            }
            else if($heroi=="Capitão America"){
                echo"e o herói escolhido foi o <b>Capitão America</b>";
                echo "<br><img src=img/capitao-america.png>";
            }
            else if($heroi=="Homem de Ferro"){
                echo"e o herói escolhido foi o <b>Homem de Ferro</b>";
                echo "<br><img src=img/homem-de-ferro.png>";
            }
            else if($heroi=="Homem Aranha"){
                echo"e o herói escolhido foi o <b>Homem Aranha</b>";
                echo "<br><img src=img/homem-aranha.png>";
            }
            else if($heroi=="Viúva Negra"){
                echo"e o herói escolhido foi o <b>Viúva Negra</b>";
                echo "<br><img src=img/viuva-negra.png>";
            }
            else{
                echo " mas o herói é <b>inválido</b>";
            }}
    
        else if($universo=="DC"){
            echo "O universo escolhido foi <b>DC</b>";
            if($heroi=="Batman"){
                echo"e o herói escolhido foi o <b>Batman</b>";
                echo "<br><img src=img/batman.png>";
            }
            else if($heroi=="Flash"){
                echo"e o herói escolhido foi o <b>Flash</b>";
                echo "<br><img src=img/flash.png>";
            }
            else if($heroi=="Superman"){
                echo"e o herói escolhido foi o <b>Superman</b>";
                echo "<br><img src=img/superman.png>";
            }
            else if($heroi=="Mulher Maravilha"){
                echo"e o herói escolhido foi o <b>Mulher Maravilha</b>"
                echo "<br><img src=img/mulher-maravilha.png>";;
            }
            else if($heroi=="Aquaman"){
                echo"e o herói escolhido foi o <b>Aquaman</b>";
                echo "<br><img src=img/aquaman.png>";
            }
            else{
                echo " mas o herói é <b>inválido</b>";
            }}
            
        else{
            echo "Universo inválido";
        };
    ?>

</body>
</html>