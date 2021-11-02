<?php
    if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == "true"){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        
        if($sexo == 0){
            $sexoNome = "Masculino";
        }else{
            $sexoNome = "Feminino";
        }
                
    }

?>