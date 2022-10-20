<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proj-php</title>

    <style>
        body{background-color: black;}
        p{font-size: 2vw;}
        #desc{color: white; text-align: center; text-shadow: -0.1vw 0 black, 0 0.1vw black, 0.1vw 0 black, 0 -0.1vw black;}
        img{height: 30vw; display: block; margin: auto;}
        #tb{height: 100vw;}
        #bt{margin: auto; background-color: white; border: none; color: black; border-radius: 1.5vw; border-style: ridge; border-color: black; text-align: center; text-decoration: none; display: flex; width: 7vw; height:4vw; font-size: 1.6vw; align-items: center; justify-content: center;}
        #div{background-image: url('img/marvel-vs-dc.jpg'); background-size: 100%; position:absolute; top: 0; left: 0; width: 100%; height: 100%; align-items: center; justify-content: center; background-repeat: no-repeat;}
    </style>

</head>

<body>
    <?php
    $ini = $_GET["ini"];
    $bt = 0;
    if($ini==1){
        $bt = 1;
    }

    if($bt==0){
        echo "<div id='div'>";
        echo '<p id="desc">Clique no botão abaixo para iniciar</p>
      <a href="inicio.php?ini=1&universo=Preencher&heroi=Preencher"><p id="bt">Iniciar</p></a>';
    }
    
        if($ini==1){
            $universo = $_GET["universo"];
            $heroi = $_GET["heroi"];
        if($universo=="Preencher"){
            echo"<p id='desc'>Substitua na URL acima onde possuir a palavra preencher</p>";
        }
        else if($universo=="Marvel"){
            echo "<p id='desc'>O universo escolhido foi <b>Marvel </b>";
            if($heroi=="Hulk"){
                echo"e o herói escolhido foi o <b>Hulk</b></p>";
                echo "<img src=img/hulk.png>";
            }
            else if($heroi=="Capitão America"){
                echo"e o herói escolhido foi o <b>Capitão America</b>";
                echo "<img src=img/capitao-america.png>";
            }
            else if($heroi=="Homem de Ferro"){
                echo"e o herói escolhido foi o <b>Homem de Ferro</b>";
                echo "<img src=img/homem-de-ferro.png>";
            }
            else if($heroi=="Homem Aranha"){
                echo"e o herói escolhido foi o <b>Homem Aranha</b>";
                echo "<img src=img/homem-aranha.png>";
            }
            else if($heroi=="Viúva Negra"){
                echo"e o herói escolhido foi o <b>Viúva Negra</b>";
                echo "<img src=img/viuva-negra.png>";
            }
            else{
                echo " mas o herói é <b>inválido</b>";
            }}
    
        else if($universo=="DC"){
            echo "O universo escolhido foi <b>DC </b>";
            if($heroi=="Batman"){
                echo"e o herói escolhido foi o <b>Batman</b>";
                echo "<img src=img/batman.png>";
            }
            else if($heroi=="Flash"){
                echo"e o herói escolhido foi o <b>Flash</b>";
                echo "<img src=img/flash.png>";
            }
            else if($heroi=="Superman"){
                echo"e o herói escolhido foi o <b>Superman</b>";
                echo "<img src=img/superman.png>";
            }
            else if($heroi=="Mulher Maravilha"){
                echo"e o herói escolhido foi o <b>Mulher Maravilha</b>";
                echo "<img src=img/mulher-maravilha.png>";
            }
            else if($heroi=="iniquaman"){
                echo"e o herói escolhido foi o <b>Aquaman</b>";
                echo "<img src=img/aquaman.png>";
            }
            else{
                echo " mas o herói é <b>inválido</b></p>";
            }}
        else{
            echo "<p id='desc'>Universo inválido";
        };
            $ini=0;
        }
    echo "</div>";
    ?>
</body>

</html>