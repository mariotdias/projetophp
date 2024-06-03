
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container text-center mt-5">
<h1>Seleção de Universo e Heróis</h1>
    <form action="index1.php" method="post">
        <label>Universo</label>
        <input type="text" name="txt_universo">
        <label>Herói</label>
        <input type="text" name="txt_heroi">
        <input type="submit">
    </form>
</div>
</main>
<div class="container text-center mt-5">
    <?php
    if(empty($_POST["txt_universo"]) or empty($_POST["txt_heroi"])){
    ?>


    <?php
    } else{
        $universo = $_POST["txt_universo"];
        $heroi = $_POST["txt_heroi"];   
        
        if ($universo == "Marvel" or $universo == "marvel"){

            if ($heroi == "homem aranha" or $heroi == "Homem Aranha"){
                echo "<img src='imgs/homemaranha.png' alt='Homem Aranha' id='heroi'> <br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "hulk" or $heroi == "Hulk"){
                echo "<img src='imgs/hulk.png' alt='Hulk' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "capitão américa" or $heroi == "Capitão América"){
                echo "<img src='imgs/capitaoamerica.png' alt='Capitão América' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "pantera negra" or $heroi == "Pantera Negra"){
                echo "<img src='imgs/panteranegra.png' alt='Panetera Negra' id='heroi'> <br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "doutor estranho" or $heroi == "Doutor  Estranho"){
                echo "<img src='imgs/doutorestranho.png' alt='Doutor Estranho' id='heroi'> <br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else {
                echo "O universo ou herói não correspondem! <br>";
            }
        }
        else if ($universo == "DC" or $universo == "dc"){


            if($heroi == "batman" or $heroi == "Batman"){
                echo "<img src='imgs/batman.png' alt='Batman' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "super homem" or $heroi == "Super Homem"){
                echo "<img src='imgs/superman.png' alt='Super Homem' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if ($heroi == "flash" or $heroi =="Flash"){
                echo "<img src='imgs/flash.png' alt='Flash' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else if($heroi == "aquaman" or $heroi == "Aquaman"){
                echo "<img src='imgs/flash.png' alt='Flash' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else  if ($heroi == "lanterna verde" or $heroi == "Lanterna Verde"){
                echo "<img src='imgs/lanternaverde.png' alt='Lanterna Verde' id='heroi'><br>";
                echo "O  universo selecionado foi ", $universo ," e o herói foi ", $heroi;
            }
            else {
                echo "O universo ou herói não correspondem! <br>";
            }
          

        }    }
        ?>
               </div>
<style>
    #heroi {
        width: 10vw;
        height: 10vw;
    }
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</style>
</body>
</html>


