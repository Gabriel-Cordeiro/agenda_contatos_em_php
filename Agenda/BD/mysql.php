<?php

class mysql 
{
    var $myCon = "";
    
    function Conecta()
    {
    $connection =  mysqli_connect('localhost','root','','agenda_online');

    if(!$connection)
    {
        echo "Erro ao conectar ao banco de dados";
    }

    else{

        $this->myCon =  $connection;
        //echo "conexão realizada";
        return $this->myCon;

    }
        
    }

    function fechar($myConnection)
    {
        mysqli_close($myConnection);
        //echo "conexão fechada";
    }
}

?> 