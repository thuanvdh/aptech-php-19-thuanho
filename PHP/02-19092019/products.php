<?php
$products = [
    'iphone 11' => [
        'price' => 1099,
        'made' => [
            'in' => 'China',
            'by' => 'California'
        ]
        ],
    'note 9' => [
        'price' => 1099,
        'made' => [
            'in' => 'Viet Nam',
            'by' => 'Korean'
        ]
        ],
    'mua tai' => 'namcoi.com'
    ];

$tenCuaSanPham = array_keys($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1> Mua hang tai <?php echo $products['mua tai']; ?></h1>
    <table>
        <thead>
        <tr>
            <th>Ten</th>
            <th>Price</th>
            <th>Made In</th>
            <th>Made By</th>
        </tr>
        </thead>
        <tbody>
             <!-- <?php $iphonePrice = $products['iphone 11']['price']; ?>
            <tr>
                <td><?php echo $tenCuaSanPham[0]; ?></td>
                <td><?php echo $products['iphone 11']['price']; ?></td>
                <td><?php echo $products['iphone 11']['made']['in']; ?></td>
                <td><?php echo $products['iphone 11']['made']['by']; ?></td>
            </tr>
            <tr>
                <td><?php echo $tenCuaSanPham[1]; ?></td>
                <td><?php echo $products['note 9']['price']; ?></td>
                <td><?php echo $products['note 9']['made']['in']; ?></td>
                <td><?php echo $products['note 9']['made']['by']; ?></td>
            </tr>
            <tr>
                <td>Tong</td>
                <td><?php echo $iphonePrice + $products['note 9']['price']; ?></td>
            </tr> -->


            
            <?php $tong = 0;
            for ($i = 0; $i < count($products) - 1; $i++) {
                $tong = $tong + $products[$tenCuaSanPham[$i]]['price'];
                ?>
            <tr>
                <td><?php echo $tenCuaSanPham[$i]; ?></td>
                <td><?php echo $products[$tenCuaSanPham[$i]]['price']; ?></td>
                <td><?php echo $products[$tenCuaSanPham[$i]]['made']['in']; ?></td>
                <td><?php echo $products[$tenCuaSanPham[$i]]['made']['by']; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td>Tong</td>
                <td>
                    <?php echo '$' . $tong; ?>
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>