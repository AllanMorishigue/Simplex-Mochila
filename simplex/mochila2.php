<html>
<head>
    <title> Mochila </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    $PesoMochila = $_GET["PesoMochila"];
    $QuantItens = $_GET["QuantItens"];
    include("ItemClass.php");
  ?>
  <div class="wrape">
    <form class="container" action="mochila3.php">
        <div class="title">
            <span class="">Mochila</span>
        </div>
        <input type="hidden" name="PesoMochila" value="<?php echo $PesoMochila; ?>">
        <input type="hidden" name="QuantItens" value="<?php echo $QuantItens; ?>">
        <?php
            $quant = 1;
            for($i=0; $i<$QuantItens; $i++){
        ?>
            
            Nome: 
            <input type="text" name="nome<?php echo $quant; ?>">
            Peso: 
            <input type="text" name="peso<?php echo $quant; ?>"> 
            Valor: 
            <input type="text" name="valor<?php echo $quant; ?>">
            <br>

            
        <?php
            $quant++;
        }  
        ?>  
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>