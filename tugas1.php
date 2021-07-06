<?php
    $false = false;
    $true = true;
    $satu= ($false and $false);
    
    echo "
        <p>Tabel Logika
    ";
    echo (int)($true);
    echo (int)($true);
    echo (int)($true);
    echo (int)($true);
    echo "
        </p>
        <table border=1>
            <tr>
                <td>Input 1</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>
            <tr>
                <td>false</td>
                <td>false</td>
                <td>".(int)($false and $false)."</td>
                <td>".(int)($false or $false)."</td>
            </tr>
            <tr>
                <td>false</td>
                <td>true</td>
                <td>".(int)($false and $true)."</td>
                <td>".(int)($false or $true)."</td>
            </tr>
            <tr>
                <td>true</td>
                <td>false</td>
                <td>".(int)($true and $false)."</td>
                <td>".(int)($true or $false)."</td>
            </tr>
            <tr>
                <td>true</td>
                <td>true</td>
                <td>".(int)($true and $true)."</td>
                <td>".(int)($true or $true)."</td>
            </tr>
        </table>
    ";
?>