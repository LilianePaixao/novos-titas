<?php
    class Matrix 
    {
        var $array;
        var $split;

        function toMat ()
        {
            if(count($array) % $split == 0){
                $row = 1;
                for($i = 0; $i < count($array); $i = $i + $split){
                    for($j = 0; $j < $split; $j++){
                        global $mat;
                        $mat[$row][$j+1] = $array[$i +$j];
                    }
                $row++;
                }
                return $mat;
            }else{
                return FALSE;
            }
        }
        function toDisplay ()
        {
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
    }
