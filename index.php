<script src="jquery.js"></script>
<table>
  <tr>
    <td>Id Karyawan</td>
    <td>:</td>
    <td><input type="text" id="id_karyawan"></td>
  </tr>

  <tr>
    <td>Nama </td>
    <td>:</td>
    <td><input type="text" id="nama"></td>
  </tr>

    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type="text" id="office"></td>
    </tr>
</table>

<script type="text/javascript">
  $(document).ready(function(){
    $('#id_karyawan').keyup(function(){ //untuk cek inputan id_karyawan

      // ############ Kirim data post id_karyawan ############
      var id_karyawan = $('#id_karyawan').val();// buat variabel
        $.post('load_data_autocomplete.php', {parent_id:id_karyawan}, 
          function(data){
            $('#nama').val(data[0].first_name);
            $('#office').val(data[0].office);
          },'json');
      // ####################################################

    });
  });
</script>
