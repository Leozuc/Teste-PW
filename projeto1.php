<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No title</title>
    <link rel="stylesheet" href="opa.css">
</head>

<body>






    <table border="1" width="40%">
        <?php
        $rows = 1;
        for ($rows = 0; $rows < 20; $rows++) {
            $is_par = ($rows % 2 == 0 ? "#fff000" : "tomato");
            $txt_num = "" . $is_par;
 
            echo "<tr>
                <td width='5%' style ='background-color: $is_par;'> .</td>
                <td width='20%' style ='background-color: $is_par;'> .</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>