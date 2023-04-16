<?php
class Cola {
    private $elementos;
    private $tope;
    function __construct()
    {
        $this->elementos=array();
        $this->tope=-1;
    }
    public function insertardelante($valor)
    {
        $this->tope++;
        for($i=0;$i<$this->tope;$i++){
            
            if($i==0){
                $v=$this->elementos[$i];
                $this->elementos[$i]=$valor;
   
            } 
            else{
                $v1=$this->elementos[$i];
                $this->elementos[$i]=$v; 
                $v=$v1;
            }    
            
            }
        
    }
    public function insertardetras($valor)
    {
        $this->tope++;
        $this->elementos[$this->tope]=$valor;
    }
    public function eliminar()
    {
        if($this->tope>=0)
        {
           for($i=0;$i<$this->tope;$i++){
            if($i==0){
            $valor=$this->elementos[$this->tope];
            unset($this->elementos[$this->tope]);
            $this->tope--;
            return $valor;    
            }
           }
            
        }
        else
        {
            return null;
        }
    }
   
    public function imprimir()
    {
        for($i=0;$i<=$this->tope;$i++)
        {
            echo $this->elementos[$i].'<br>';
        }
    }
}
?>
