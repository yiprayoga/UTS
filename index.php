<!DOCTYPE html>
<html lang="en">
<head>

    <!-- 

        UTS Pemrograman Web 2
        Nama  : Yulian Islam Prayoga
        NIM   : 191011401222
        Kelas : 06TPLM007

     -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YULIAN ISLAM PRAYOGA - 191011401222</title>

    <script>

        function selesai(){
            alert("Data berhsil tersimpan");
        }
    </script>
</head>
<body style="background-color:gray">

<h3 style="style=margin-bottom:200px"></h3>

<form action="config.php">
<table border="1" align="center" style="background-color:white">
    <tr>
        <td>
        <h3>
        <center>Input Data Pemantauan Covid19</center>
        </h3>

        <table align="center" style="padding: 10px;">
            <!-- Nama Wilayah -->
            <tr>
                <td><label for="wilayah">Nama Wilayah</label></td>
                <td>
                    <select name="wilayah" required>
                        <option disabled="disabled" selected="selected">Pilih wilayah</option>
                        <option>DKI Jakarta</option>
                        <option>Jawa Barat</option>
                        <option>Banten</option>
                        <option>Jawa Tengah</option>
                    </select>
                </td>
            </tr>
            <!-- Jumlah Positif -->
            <tr>
                <td><label for="jpositif">Jumlah Positif</label></td>
                <td><input type="number" name="jpositif" autocomplete="off" required></td>
            </tr>
            <!-- Jumlah di rawat -->
            <tr>
                <td><label for="jdirawat">Jumlah Dirawat</label></td>
                <td><input type="number" name="jdirawat" autocomplete="off" required></td>
            </tr>
            <!-- Jumlah sembuh -->
            <tr>
                <td><label for="jsembuh">Jumlah Sembuh</label></td>
                <td><input type="number" name="jsembuh" autocomplete="off" required></td>
            </tr>
            <!-- Jumlah meninggal -->
            <tr>
                <td><label for="jmeninggal">Jumlah Meninggal</label></td>
                <td><input type="number" name="jmeninggal" autocomplete="off" required></td>
            </tr>
            <!-- Nama Operator -->
            <tr>
                <td><label for="operator">Nama Operator</label></td>
                <td><input type="text" name="operator" autocomplete="off" required></td>
            </tr>
            <!-- NIM Mahasiswa -->
            <tr>
                <td><label for="nim">NIM Mahasiswa</label></td>
                <td><input type="number" name="nim" autocomplete="off" required></td>
            </tr>
            <!-- Submit -->
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" onclick="selesai()"></td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</form>

</body>
</html>