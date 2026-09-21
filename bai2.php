<?php
$products = [
    ["name" => "Bàn phím cơ", "price" => 1500000, "quantity" => 10],
    ["name" => "Chuột không dây", "price" => 450000, "quantity" => 25],
    ["name" => "Màn hình 24 inch", "price" => 3200000, "quantity" => 5]
];

echo "Danh sách sản phẩm:\n";
foreach ($products as $product) {
    echo "- Tên: " . $product['name'] . " | Giá: " . number_format($product['price']) . " | Số lượng: " . $product['quantity'] . "\n";
}

function calculateTotalValue($productsList) {
    $total = 0;
    foreach ($productsList as $item) {
        $total += ($item['price'] * $item['quantity']);
    }
    return $total;
}

echo "---------------------------------\n";
echo "Tổng giá trị: " . number_format(calculateTotalValue($products)) . "\n";
?>