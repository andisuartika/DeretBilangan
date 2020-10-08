<?php

// form inputan
echo " <form method = 'POST' action = '' ?>
            <table>
                <b>Form Input</b></br>
                <tr>
                    <td>Bilangan 1 </td>
                    <td><input type='text' name='bil1'></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td><input type='text' name='bil2'> </br></td>
                </tr>
                <tr>
                    <td>Banyak </td>
                    <td><input type='text' name='n'> </br></td>
                </tr>
                <tr>
                    <td><input type='submit' name='submit'></td>
                </tr>
            </table>
        </form>
    ";

// menampilkan hasil bilangan fibonacci
if (isset($_POST['submit'])) {
    if ($_POST['bil1'] && $_POST['bil2'] && $_POST['n'] > 0) {
        $fn1 = @(int)$_POST['bil1'];
        $fn2 = @(int)$_POST['bil2'];
        $fn = $fn1 + $fn2;
        // echo " </br> Bilangan 1 : " . $bil1;
        echo "<table border = '1' style='border-collapse: collapse;' width='100px'>
                    <tr> 
                    <td>i</td> 
                    <td>x</td> 
                    </tr>
                    <tr> 
                    <td>1</td> 
                    <td>$fn1</td> 
                    </tr>
                    <tr> 
                    <td>2</td> 
                    <td>$fn2</td> 
                    </tr>
            ";
        $n = @(int)$_POST['n'];
        for ($i = 3; $i <= $n; $i++) {
            $fn = $fn1 + $fn2;

            echo "<tr> 
                        <td>$i</td> 
                        <td>$fn</td> 
                    </tr>
                ";

            $fn1 = $fn2;
            $fn2 = $fn;
        }
        echo "</table>";
    }
}
