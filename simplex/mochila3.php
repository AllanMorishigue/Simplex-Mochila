<html>
<head>
    <title> Mochila </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="wrape">
    <form action="" class="container">
    <div class="title">
            <span class="">Resultado</span>
        </div>
  <?php
    $pesoMochila = $_GET["PesoMochila"];
    $quantidade = $_GET["QuantItens"];
    include("ItemClass.php");

    for ($i=1; $i<=$quantidade;$i++){
        $nome = $_GET["nome"."$i"];
        $peso = $_GET["peso"."$i"];
        $valor = $_GET["valor"."$i"];

        $itens = new ItemClass();
        $itens->nome = $nome;
        $itens->peso = $peso;
        $itens->valor = $valor;
        $vetor[$i-1] = $itens;
    }

    //testes

    //print_r($vetor);

    /*$itens = new ItemClass();
    $itens->nome = "mesa";
    $itens->peso = "3";
    $itens->valor = "5";
    $vetor[0] = $itens;

    $itens = new ItemClass();
    $itens->nome = "cadeira";
    $itens->peso = "2";
    $itens->valor = "4";
    $vetor[1] = $itens;

    $itens = new ItemClass();
    $itens->nome = "copo";
    $itens->peso = "2";
    $itens->valor = "2";
    $vetor[2] = $itens;

    $itens = new ItemClass();
    $itens->nome = "fone";
    $itens->peso = "1";
    $itens->valor = "4";
    $vetor[3] = $itens;*/

    $peso = 0.0;
    $valor = 0.0;
    $itensmochila = array();
    $count_itens = 0;
    $tamanho_vetor = sizeof($vetor);

    usort($vetor, array("ItemClass", "compara"));

    //foreach ($vetor as $item) {
    //  echo $item->nome . "\n";
    //}
    
    for($i = 0; $i < $tamanho_vetor; $i++) {
        if($peso + $vetor[$i]->peso <= $pesoMochila) {
            $peso += $vetor[$i]->peso;
            $valor += $vetor[$i]->valor;
            $itensmochila[$count_itens++] = $vetor[$i];
        }
    }
    
    echo "Peso ocupado da mochila:".$peso;
    echo "</br>";
    echo "Valor total da mochila:".$valor;
    echo "</br>";
    echo "Itens inseridos na mochila:";
    for($j=0;$j<sizeof($itensmochila);$j++){
      //echo "</br>";
      echo "\n".$itensmochila[$j]->nome;
    }
?>
    </form>
</div>
</body>
</html>