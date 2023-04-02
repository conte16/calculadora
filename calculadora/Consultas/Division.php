<?php
class Division{
    public $numero1;
    public $numero2;

    public  function __construct( $numero1,$numero2)
    {
        
        $this->numero1= $numero1;
        $this->numero2= $numero2;
    }
    
    public function dividir()
    {
       echo "numero 1 es:".$POST['numero1'];
       echo "numero 2 es:".$POST['numero2'];
    }
}
$total = new Division($_POST['numero1'],$_POST['numero2']);
$total->dividir();
?>