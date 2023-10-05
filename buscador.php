<?php
include('conexion.php');

if(!isset($_POST['buscar'])){$_POST['buscar']='';}
if(!empty($_POST)){
    function resaltar_frase($string, $frase,$taga = '<b>' , $tagb = '</b>'){
        return ($string !== '' && $frase !== '')
        ?preg_replace('/(' .preg_quote($frase, '/').')/i' .('true' ? 'u' : ''), $taga.'\\1' .$tagb, $string)
        : $string;
        }
    $akeyword=explode(" ",$_POST['buscar']);
    $query="SELECT * FROM musica WHERE nomMusic LIKE LOWER('%".$akeyword[0]."%') OR artMusic LIKE LOWER('%".$akeyword[0]."%') ";
    for($i=1;$i< count($akeyword);$i++){
        if(!empty($akeyword[$i])){

            $query .=" OR nomMusic like '%" .$akeyword[$i] ."%' OR artMusic LIKE '%" .$akeyword[$i] ."%'";
        }
    }
    $result =$conexion->query($query);
    $numero = mysqli_num_rows($result);
    if(mysqli_num_rows($result)> 0 AND $_POST['buscar'] !=''){
        $row_count=0;
        echo"<br>Resultados encontrados:<b>" .$numero."</b>";
        echo"<br><br><table class='table table-striped'>
        <thead>
        <th> # </th>
        <th> nomMuisc </th>
        <th> artMusic </th>
        </tr>
        </thead>
        ";
        while($row = $result->fetch_assoc()){
            $row_count ++;
            echo "<tr><td>" .$row_count. "</td><td>" .resaltar_frase($row['artMusic'] ,$_POST["buscar"]) ."</td><td>" . resaltar_frase($row['nomMusic'] ,$_POST['buscar']) ."</td></tr>";

        }
        echo "</table>";
        }
}




?>