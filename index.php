<?php
// Kết nối tới container DB (đã định nghĩa trong docker-compose)
$conn = new mysqli("db", "root", "rootpassword", "shop_db");
$result = $conn->query("SELECT * FROM flowers");
?>

<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    <?php while($row = $result->fetch_assoc()): ?>
        <div class="bg-white p-4 rounded shadow text-center">
            <div class="text-5xl mb-2"><?php echo $row['icon']; ?></div>
            <h3 class="font-bold"><?php echo $row['name']; ?></h3>
            <p class="text-pink-500 font-bold"><?php echo number_format($row['price']); ?>đ</p>
        </div>
    <?php endwhile; ?>
</div>