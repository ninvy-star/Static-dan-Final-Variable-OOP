<?php

class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function LuasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";
if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $op   = $_POST['operasi'];

    switch ($op) {
        case 'tambah': $hasil = Matematika::tambah($bil1, $bil2); break;
        case 'kurang': $hasil = Matematika::kurang($bil1, $bil2); break;
        case 'kali':   $hasil = Matematika::kali($bil1, $bil2); break;
        case 'bagi':   $hasil = Matematika::bagi($bil1, $bil2); break;
        case 'luas':   $hasil = Matematika::luasPersegi($bil1); break;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Static PHP</title>
    <style>
        body { font-family: 'Arial', sans-serif; background: linear-gradient(135deg, #4a7eee, #3d41bb); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .calculator { background: rgba(255, 255, 255, 0.68); padding: 25px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.2); width: 320px; }
        .display { width: 100%; background: #117cd3; color: #55efc4; padding: 15px; border-radius: 10px; text-align: right; font-size: 1.5rem; font-weight: bold; margin-bottom: 20px; box-sizing: border-box; min-height: 60px; overflow: hidden; }
        .label-text { font-size: 0.8rem; color: #636e72; margin-bottom: 5px; display: block; }
        input[type="number"], select { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #dfe6e9; border-radius: 8px; font-size: 1rem; box-sizing: border-box; }
        button { width: 100%; padding: 15px; background: #0984e3; color: white; border: none; border-radius: 8px; font-size: 1rem; font-weight: bold; cursor: pointer; transition: 0.2s; }
        button:hover { background: #74b9ff; }
        .note { font-size: 0.7rem; color: #b2bec3; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>

<div class="calculator">
    <div class="display">
        <?php echo ($hasil !== "") ? $hasil : "0"; ?>
    </div>

    <form method="POST">
        <span class="label-text">Angka 1 / Sisi Persegi</span>
        <input type="number" name="bil1" step="any" required placeholder="0">

        <span class="label-text">Pilih Operasi</span>
        <select name="operasi">
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (x)</option>
            <option value="bagi">Bagi (/)</option>
            <option value="luas">Luas Persegi (Sisi * Sisi)</option>
        </select>

        <span class="label-text">Angka 2 (Abaikan jika Luas)</span>
        <input type="number" name="bil2" step="any" placeholder="0">

        <button type="submit" name="hitung">HITUNG</button>
    </form>
    
    <p class="note">Aplikasi Matematika Static Method</p>
</div>

</body>
</html>