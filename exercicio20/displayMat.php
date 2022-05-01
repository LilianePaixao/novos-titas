<?php
    function displayMat($mat){
        echo
        '<table>';

        for($i = 1; $i <= count($mat); $i++){
            echo
            '<tr>';

            for($j = 1; $j <= count($mat[$i]); $j++){
                echo
                '<td>' .
                $mat[$i][$j] .
                '</td>';
            }
            echo
            '</tr>';
        }
        echo
        '</table>' . '<br><br>';
    }