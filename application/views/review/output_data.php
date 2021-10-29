<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
    <style>
        fieldset {
            width: 30%;
            margin: 20px auto;
            border-radius: 5px;
			background-color: #D3D3D3;
        }

        select {
            width: 100%;
        }
        a {
            text-decoration: none;
			margin: 2px 4px;
			cursor: pointer;
			float: center;
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
		h3 {
			color: #191970;
		}
		table th {
			width: 90%;
			padding: 8px 15px;
			margin: 8px 0;
			display: inline-block;
			color: #191970;
		}
		table td {
			color: #191970;
		}	
    </style>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->
<center>
		<h1> Toko Sepatu </h1>
</center>		
    <fieldset>
        <th><h3>Hasil Transaksi</h3></th>
		<hr>
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <?= $nohp; ?>
                    </td>
                </tr>

                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $merk; ?>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $ukuran; ?>
                    </td>
                </tr>

                <tr>
                    <th>Harga</th>
                    <td>:</td>
                    <td>
                        <?= $harga; ?>
                    </td>
                </tr>

                <tr>
				<td>
                    <hr>
                    <a href="<?php base_url('review/input_data'); ?>">Kembali</a>
				</td>
                </tr>
            </table>
    </fieldset>
</body>
</html>