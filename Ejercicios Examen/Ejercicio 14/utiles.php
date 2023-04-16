<?php
    class Utiles{
        private $cadena;
        function __construct()
        {
            $this->cadena='';
        }
    function aumentarguiones($cadena,$n){
        for($i=0;$i<strlen($cadena);$i++){
            echo "$cadena[$i+1]";
            for($j=1;$j<$n;$j++){
                echo "-";
            }
        }
    }    
    }
?>