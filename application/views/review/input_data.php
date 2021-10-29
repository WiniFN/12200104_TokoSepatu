<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
    <style>
        fieldset {
            width: 23%;
            margin: 20px auto;
            border-radius: 5px;
			background-color: #D3D3D3;
        }

        select {
            width: 100%;
        }
		center {
			background-color: #f2f2f2;
			margin: 20px auto;
			width: 50%;
			border-radius: 5px;
			padding: 1px 3px;
			color: #191970;
			border: 1px solid #ccc;
		}
		legend {
			color: #191970;
		}	
		input[type=text],input[type=password], select {
			width: 90%;
			padding: 8px 15px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
    </style>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->
<center>
		<h1> Toko Sepatu </h1>
</center>		
    <fieldset>
        <th><h3>Input Data Transaksi</h3></th>
		<hr>
        <form method="POST">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nohp" id="nohp">
                        <?= form_error('nohp', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option>-Pilih Merk-</option>
                            <?php foreach($merk as $m) : ?>
                                <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option>-Pilih Ukuran-</option>
                            <?php for($i = 32; $i <= 44; $i ++) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Proses</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>