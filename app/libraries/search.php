<?php
    function Pesquisa($tex){
        include '../app/libraries/Database.php';
        include '../app/view/iten.php';
        $db = new Database;
        if (isset($tex)){
            $tt = " concat('%',lower(trim('".$tex."')),'%')";
            $texto = ('nome LIKE '.$tt.' OR ano like'.$tt.' OR genero LIKE'.$tt.' OR autor LIKE'.$tt);
            $db->query("SELECT * FROM livro WHERE ".$texto);
            $array = $db->resultados();
            foreach ($array as $key => $value){
                Gerar_item($array[$key]);
            }}
}
?>
