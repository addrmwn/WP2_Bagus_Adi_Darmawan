<html>
<head>
  <title> Tampil data toko Sepatu </title>
</head>

<body>
  <center>
    <table>
      <tr>
        <th colspan="3"> Tampil data toko Sepatu </th>
      </tr>

      <tr>
      <td colspan="3">
        <hr>
      </td>
    </tr>

    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>
        <?= $nama; ?>
      </td>
    </tr>

    <tr>
      <td>Nomor HP</td>
      <td>:</td>
      <td>
        <?= $nohp; ?>
      </td>
    </tr>

    <tr>
      <td>Merk</td>
      <td>:</td>
      <td>
        <?= $merk; ?>
      </td>
    </tr>

    <tr>
      <td>size</td>
      <td>:</td>
      <td>
        <?= $size; ?>
      </td>
    </tr>

    <tr>
      <td>harga</td>
      <td>:</td>
      <td>
        <?= $harga; ?>
      </td>
    </tr>

    <tr>
      <td colspan="3" align="center">
        <a href="<?= base_url('Sepatu');?>">Kembali</a>
      </td>
    </tr>

  </table>
</center>
</body>
<html>
