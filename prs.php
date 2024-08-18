<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="ds.css">
</head>
<body>
    <center>
    <?php
        $r=$_POST["rawon"];
        $s=$_POST["soto"];
        $t=$_POST["teh"];
        $k=$_POST["kopi"];

        $rT=15000*$r;
        $sT=10000*$s;
        $tT=5000*$t;
        $kT=2000*$k;

        $TT=$rT+$sT+$tT+$kT;

    ?>
    <table id="gatau">
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>QTY</th>
            <th>Subtotal</th>
        </tr>
        <?php if($r>0) {?>
            <tr>
                <td>1</td>
                <td>Rawon</td>
                <td><?php echo $r ?></td>
                <td><?php echo $rT ?></td>
    
            </tr>
        <?php }?>

        <?php if($s>0) {?>
            <tr>
                <td>2</td>
                <td>Soto</td>
                <td><?php echo $s ?></td>
                <td><?php echo $sT ?></td>
    
            </tr>
        <?php }?>

        <?php if($t>0) {?>
            <tr>
                <td>3</td>
                <td>Teh</td>
                <td><?php echo $t ?></td>
                <td><?php echo $tT ?></td>
    
            </tr>
        <?php }?>
        
        <?php if($k>0) {?>
            <tr>
                <td>4</td>
                <td>Kopi</td>
                <td><?php echo $k ?></td>
                <td><?php echo $kT ?></td>
    
            </tr>
        <?php }?>

        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td><?php echo $TT ?></td>
        </tr>
    </table>
    </center>
</body>
</html>
<?php
