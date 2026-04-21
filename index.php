<?php include 'header.php'; ?>

<?php
$products = [
    [
        'name' => '키보드',
        'price' => 30000,
        'stock' => 10
    ],
    [
        'name' => '마우스',
        'price' => 15000,
        'stock' => 3
    ],
    [
        'name' => '모니터',
        'price' => 120000,
        'stock' => 0
    ]
];

function getStockMessage($stock)
{
     if ($stock >= 5) {
        return "재고 충분";
    } elseif ($stock >= 1) {
        return "재고 부족";
    } else {
        return "품절";
    }
}
function getStockColor($stock)
{
    if ($stock >= 5) {
        return "green";
    } elseif ($stock >= 1) {
        return "orange";
    } else {
        return "red";
    }
}

$totalValue = 0;
?>

<table>
    <tr>
        <th>상품명</th>
        <th>가격</th>
        <th>재고</th>
        <th>재고 상태</th>
    </tr>

    <?php foreach ($products as $product): ?>
    <?php
        $color = getStockColor($product['stock']);
    ?>
    <tr>
        <td><?php echo $product['name']; ?></td>
        <td><?php echo number_format($product['price']); ?>원</td>
        <td><?php echo $product['stock']; ?></td>
        <td style="color: <?php echo $color; ?>">
            <?php echo getStockMessage($product['stock']); ?>
        </td>
    </tr>
<?php endforeach; ?>
     
</table>

<?php include 'footer.php'; ?>