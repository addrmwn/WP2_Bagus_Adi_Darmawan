<html>
<head>
  <title>
    Tampil data Matakuliah
  </title>

</head>

<body>
  <center>
    <table>
      <tr>
        <th colspan="3">
           Tampil Data Mata Kuliah
          </th>
         </tr>
          <tr>
             <td colspan="3">
                <hr>
               </td>
              </tr>
               <tr>
                 <th>Kode MTK</th>
                   <td>:</td>
                    <td>
                      <?= $kode; ?>
                      </td>
                     </tr>
                      <tr>
                         <td>Nama MTK</td>
                          <td>:</td>
                           <td>
                              <?= $nama; ?>
                             </td>
                            </tr>
                             <tr>
                                <td>SKS</td>
                                 <td>:</td>
                                  <td>
                                     <?= $sks; ?>
                                    </td>
                                   </tr>
                                    <tr>
                                       <td colspan="3" align="center">
                                          <a href="<?= base_url('matakuliah');?>">Kembali</a>
                                         </td>
                                       </tr>
                                     </table>
                                   </center>
                                 </body>
                                 </html>
