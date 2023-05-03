<html>

<head>
    <title>Input</title>
</head>

<body>
    <form action="output.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="ttl" /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="l" />Laki - Laki
                    <input type="radio" name="jk" value="p" />Perempuan
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="kirim" value="Kirim" /><input type="reset" name="batal" value="batal" /></td>
            </tr>
        </table>
    </form>
</body>

</html>