<!DOCTYPE html>
<html>
<head>
    <title>Mengirim Data</title>
</head>
<body>
<form method="post" action="#">
    <img src="gambar/fruits.jpg" width="" height="">
<table align="center">
    <tr>
        <td>Item</td>
        <td>Buah</td>
        <td>Harga (per kg)</td>
        <td>Jumlah Kg</td>
    </tr>
    <tr>
        <td><img src="gambar/apel.jpg" width="100" height="100"></td>
        <td><label>Apel</label></td>
        <td><input type="number" name="angka1"></td>
        <td><input type="number" name="kg1"></td>
    </tr>
    <tr>
        <td><img src="gambar/stroberi.jpg" width="100" height="100"></td>
        <td><label>Stroberi</label></td>
        <td><input type="number" name="angka2"></td>
        <td><input type="number" name="kg2"></td>
    </tr>
    <tr>
        <td><img src="gambar/pisang.jpg" width="100" height="100"></td>
        <td><label>pisang</label></td>
        <td><input type="number" name="angka3"></td>
        <td><input type="number" name="kg3"></td>
    </tr>
    <tr>
       <td><input type="submit" value="total" name="total"></td>
    </tr>
</table>
</form>
<?php
    if (isset($_POST['total'])){
        /*$fruit1 =$_POST['fruit1'];
        $fruit2 =$_POST['fruit2'];
        $fruit3 =$_POST['fruit3'];*/
        $angka1 =$_POST['angka1'];
        $angka2 =$_POST['angka2'];
        $angka3 =$_POST['angka3'];
        $kg1 =$_POST['kg1'];
        $kg2 =$_POST['kg2'];
        $kg3 =$_POST['kg3'];

        $buah1 = $angka1 * $kg1;
        $buah2 = $angka2 * $kg2;
        $buah3 = $angka3 * $kg3;
        $total = $buah1 + $buah2 + $buah3;
        $diskon = ($total / 100) * 20;
        if ($total >=100000){
        $hargaAkhir = $total - $diskon;
        //echo "Total belanja anda dengan diskon 20% ($diskon), total belanja menjadi Rp.$hargaAkhir";
        //echo "1. $fruit1: Rp.$angka1 x$kg1 Kg = Rp.$buah1" . "<br>";
        //echo "2. $fruit2: Rp.$angka2 x$kg2 Kg = Rp.$buah2" . "<br>";
        //echo "3. $fruit3: Rp.$angka3 x$kg3 Kg = Rp.$buah3" . "<br>";
        //echo "Total = Rp.$total" . "<br>";
        //echo "Diskon 20% = Rp.$diskon" . "<br>";
        //echo "Harga Bayar = Rp.$hargaAkhir";
        echo "<table>
            <tr>
                <td>1.Apel</td>
                <td>=Rp.$angka1 x$kg1 Kg =</td>
                <td>Rp.$buah1</td>
            </tr>
            <tr>
               <td>2.Stroberi</td>
                <td>=Rp.$angka2 x$kg2 Kg =</td>
                <td>Rp.$buah2</td>

            </tr>
            <tr>
                <td>3.Pisang</td>
                <td>=Rp.$angka3 x$kg3 Kg =</td>
                <td>Rp.$buah3</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>=Rp.$total</td>
            </tr>
            <tr>
                <td>Diskon 20%</td>
                <td>=Rp.$diskon</td>
            </tr>
            <tr>
                <td>Harga Bayar</td>
                <td>=Rp.$hargaAkhir</td>
            </tr>
            </table>";
    }else{
        //echo "Total belanja anda Rp." . $total;
        /*echo "1. Buah Mangga: Rp.$angka1 x$kg1 Kg = Rp.$buah1" . "<br>";
        echo "2. Buah Stroberi: Rp.$angka2 x$kg2 Kg = Rp.$buah2" . "<br>";
        echo "3. Buah Anggur: Rp.$angka3 x$kg3 Kg = Rp.$buah3" . "<br>";
        echo "Total = Rp.$total" . "<br>";
        echo "Harga Bayar = Rp.$total";*/
        echo "<table>
                <tr>
                <td>1.Apel</td>
                <td>=Rp.$angka1 x$kg1 Kg =</td>
                <td>Rp.$buah1</td>
            </tr>
            <tr>
               <td>2.Stroberi</td>
                <td>=Rp.$angka2 x$kg2 Kg =</td>
                <td>Rp.$buah2</td>

            </tr>
            <tr>
                <td>3.Pisang</td>
                <td>=Rp.$angka3 x$kg3 Kg =</td>
                <td>Rp.$buah3</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>=Rp.$total</td>
            </tr>
            <tr>
                <td>Harga Bayar</td>
                <td>=Rp.$total</td>
            </tr>
            </table>";
    }
}
?>
</body>
</html>