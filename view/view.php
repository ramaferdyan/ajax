<table border="1" cellpadding="8">
  <tr>
    <th>NO Barang</th>
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>Harga</th>
  </tr>
  <?php
  if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa dari controller
      echo "<tr>";
      echo "<td>".$data->no_barang."</td>";
      echo "<td>".$data->nama."</td>";
      echo "<td>".$data->satuan."</td>";
      echo "<td>".$data->harga."</td>";
      echo "</tr>";
    }
  }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
  ?>
</table>