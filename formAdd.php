<!DOCTYPE html>
<html>
<head>
    <title>APP OLAH PEGAWAI</title>
</head>
<body>
    <header>
        <h1>APLIKASI OLAH DATA KEPEGAWAIAN</h1>
    </header>
    <form action="prosesAdd.php" method = "post">
        <fieldset>
            <table>
                <tr>
                <td><label for="idp">ID Pegawai  </label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawaian"></td>
                </tr>
                <tr>
                <td><label for="iddpt">ID Departemen  </label></td>
                <td><select name="iddpt" >
                    <option>101</option>
                    <option>102</option>
                    <option>103</option>
                    <option>104</option>
                    <option>105</option>
                    <option>106</option>
                    <option>107</option>
                </select></td>
                </tr>
                <tr>
                <td><label for="idkrj">ID Pekerjaan</label></td>
                <td><select name="idkrj" >
                    <option>201</option>
                    <option>202</option>
                    <option>203</option>
                    <option>204</option>
                    <option>205</option>
                    <option>206</option>
                </select></td>
                </tr>
                <tr>
                <td><label for="nama">Nama  </label></td>
                <td><input type="text" name = "nama" placeholder = "Nama Lengkap"></td>
                </tr>
                <tr>
                <td><label for="email">Email  </label></td>
                <td><input type="text" name = "email" placeholder = "contoh123@gmail.com"></td>
                </tr>
                <tr>
                <td><label for="telp">No Telepon  </label></td>
                <td><input type="text" name = "telp" placeholder = "Nomor telepon aktif"></td>
                </tr>
                <tr>
                <td><label for="alamat">Alamat  </label></td>
                <td><textarea name="alamat" cols="21" rows="10"></textarea></td>
                </tr>
            </table>
            <input type="submit" value = "Daftar" name = "daftar">
        </fieldset>
    </form>
</body>
</html> 