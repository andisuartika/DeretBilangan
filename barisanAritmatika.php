<?php

//Form inputan 
echo " <form method = 'POST' action = '' ?>
            <table>
                <b>Form Input</b></br>
                <tr>
                    <td>Suku Pertama </td>
                    <td><input type='text' name='u1'></td>
                </tr>
                <tr>
                    <td>Suku kedua </td>
                    <td><input type='text' name='u2'> </br></td>
                </tr>
                <tr>
                    <td>Suku ke N </td>
                    <td><input type='text' name='un'> </br></td>
                </tr>
                <tr>
                    <td><input type='submit' name='submit'></td>
                </tr>
            </table>
        </form>
    ";

// menampilkan hasil barisan aritmatika 
if (isset($_POST['submit'])) {
    if ($_POST['un'] > null) {
        $u1 = @(int)$_POST['u1'];
        $u2 = @(int)$_POST['u2'];
        $b = $u2 - $u1;

        echo "<table border = '1' style='border-collapse: collapse;' width='100px'>
                    <tr> 
                    <td>i</td> 
                    <td>x</td> 
                    </tr>
                    <tr> 
                    <td>1</td> 
                    <td>$u1</td> 
                    </tr>
            ";
        $n = @(int)$_POST['un'];
        $nilai = 0;
        for ($i = 2; $i <= $n; $i++) {
            $nilai = $nilai + $b;

            echo "<tr> 
                        <td>$i</td> 
                        <td>$nilai</td> 
                    </tr>
                ";
        }
        echo "</table>";
    }
}
