<?php
    $input1_1 ='Ayo ';
    $input1_2 = 'Belajar ';

    $input2_1 = 'Bersama ';
    $input2_2 = 'Niomic ';
    echo "
        <h1>Operator String</h1>
        <table border=1>
        <tr>
            <td>Input 1</td>
            <td>Input 2</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td>$input1_1</td>
            <td>$input1_2</td>
            <td>".($input1_1.$input1_2)."</td>
        </tr>
        <tr>
            <td>$input2_1</td>
            <td>$input2_2</td>
            <td>".($input2_1.$input2_2)."</td>
        </tr>
        </table>
        <br/>
        <p>
            Gabungan : ".($input1_1.$input1_2.$input2_1.$input2_2)." :)
        </p>
    ";
?>