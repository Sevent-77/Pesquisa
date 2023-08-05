<?php
    function Gerar_item($array){
        echo('<div class="item">
                <img src="./public/img/'.$array->imagem.'">
                <h2>'.$array->nome.'</h2>
                <a>'.$array->genero.'</a>
                <h4>'.$array->autor.'</h4>
            </div>');
    }
?>
