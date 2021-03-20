<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <table class="table table-dark table-hover table-bordered" border="1" align="center">
        <thead>
            <tr>
                <td style="font-weight: bold;">id</td>
                <td style="font-weight: bold;">Name</td>
                <td style="font-weight: bold;">price</td>
                <td style="font-weight: bold;">stories</td>
                <td style="font-weight: bold;">Numberofpages</td>
                <td style="font-weight: bold;">Volumeimagesize</td>
                <td style="font-weight: bold;">Papertexture</td>
            </tr>
        </thead>
        <?php
        $data = file_get_contents('http://localhost:3001/Librarys/');
        $Librarys_data = json_decode($data);
        
        $index = 0;

        if (!empty($Librarys_data)) {
            foreach ($Librarys_data as $Librarys) {
                $price = $Librarys->price;
                $price = $Librarys->price;
                $total = $price / (($price / 100) * ($price / 100));
                $total = number_format($total, 2);
                $result = "";
                if ($total < 18.5) {
                    $result = "UnderWeight";
               } elseif ($total <= 22.9) {
                    $result = "Normal weight";
                } elseif ($total <= 29.9) {
                   $result = "Overweight ";
                } else {
                    $result = "Obesity  ";
                }


               ?>
        
                <tr>
                    <td><?php echo $Librarys->_id; ?></td>
                    <td><?php echo $Librarys->name; ?></td>
                    <td><?php echo $Librarys->price; ?></td>
                    <td><?php echo $Librarys->stories; ?></td>
                    <td><?php echo $Librarys->stories; ?></td>
                    <td><?php echo $Librarys->stories; ?></td>
                    <td><?php echo $Librarys->stories; ?></td>
                    

                </tr>
        <?php
                $index++;
            }
        }
        ?>

    </table>
</body>

</html>