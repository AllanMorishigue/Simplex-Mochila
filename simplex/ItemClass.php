<?php
 
class ItemClass {
  
    public $nome;
    public $peso;
    public $valor;

    public function AddNewItem($Item, $vetor){
      $item = new ItemClass();
      $item->nome = $Item->nome;
      $item->peso = $Item->peso;
      $item->valor = $Item->valor;

      array_push($vetor, $item);

      return $vetor;
    }

    static function compara($a, $b)
    {
        $primeiro = (float)$a->valor / $a->peso;
        $segundo  = (float)$b->valor / $b->peso;
        if ($primeiro == $segundo) {
            return 0;
        }
        return ($primeiro < $segundo) ? +1 : -1;
    }
}
?>