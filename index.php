<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Flower Shop PHP - Project 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-pink-600">Tiệm Hoa PHP</h1>
        <span class="bg-yellow-300 px-3 py-1 font-bold">Chiều Thứ Hai - ca 3</span>
    </nav>

    <div class="max-w-6xl mx-auto p-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <?php
        $flowers = [
            ['n' => 'Hoa Hồng Đỏ', 'p' => '500.000', 'i' => '🌹'],
            ['n' => 'Hoa Hướng Dương', 'p' => '350.000', 'i' => '🌻'],
            ['n' => 'Hoa Tulip', 'p' => '450.000', 'i' => '🌷'],
            ['n' => 'Hoa Lan Hồ Điệp', 'p' => '1.200.000', 'i' => '🌸'],
            ['n' => 'Cẩm Tú Cầu', 'p' => '400.000', 'i' => '💠']
        ];
        foreach ($flowers as $f) {
            echo "<div class='bg-white p-4 rounded shadow-md text-center'>
                    <div class='text-5xl mb-4'>{$f['i']}</div>
                    <h3 class='font-bold'>{$f['n']}</h3>
                    <p class='text-pink-600 font-bold'>{$f['p']} VNĐ</p>
                    <button class='mt-3 bg-pink-500 text-white px-4 py-1 rounded'>Mua</button>
                  </div>";
        }
        ?>
    </div>
</body>
</html>