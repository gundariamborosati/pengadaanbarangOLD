
<!doctype html>
<html>
    <head>
        <title>Cara Membuat Form Dinamis Menggunakan JavaScript</title>
        <style>
            body{
                padding: 15px
            }
            input[type="text"]{
                margin-bottom: 0px !important;
            }
        </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row-fluid">
            <div class="span6">
                <form action=""<?php echo base_url(). 'c_pesanan/coba'; ?>"" method="post">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="150px">Nama Barang</th>
                                <th width="250px">Spesifikasi Barang</th>
                                <th width="50px">Volume</th>
                                <th width="50px">Satuan</th>
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td><input name="nama_input[0]" class="form-control" /></td>
                                <td><input name="spesifikasi_input[0]" class="form-control" /></td>
                                <td><input name="volume_input[0]" class="form-control" /></td>
                                <td><input name="satuan_input[0]" class="form-control" /></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-small btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i></button>
                                    <button name="submit" class="btn btn-small btn-primary"><i class="glyphicon glyphicon-ok"></i></button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div class="span6">
                <p>Hasil :</p>
                <p>
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama = $_POST['nama_input'];
                        $spesifikasi = $_POST['spesifikasi_input'];
                        $volume = $_POST['volume_input'];
                        $satuan = $_POST['satuan_input'];

                        foreach ($nama as $key => $j) {
                            echo "<p>" . $j . " : " . $spesifikasi[$key] . " : " . $volume[$key] . " : " . $satuan[$key] . "</p>";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
        <script>
            var i = 1;
            function additem() {
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var nama = document.createElement('td');
                var spesifikasi = document.createElement('td');
                var volume = document.createElement('td');
                var satuan = document.createElement('td');
                var aksi = document.createElement('td');

//                meng append element
                itemlist.appendChild(row);
                row.appendChild(nama);
                row.appendChild(spesifikasi);
                row.appendChild(volume);
                row.appendChild(satuan);
                row.appendChild(aksi);

//                membuat element input
                var nama_input = document.createElement('input');
                nama_input.setAttribute('name', 'nama_input[' + i + ']');
                nama_input.setAttribute('class', 'form-control');

                var spesifikasi_input = document.createElement('input');
                spesifikasi_input.setAttribute('name', 'spesifikasi_input[' + i + ']');
                spesifikasi_input.setAttribute('class', 'form-control');

                var volume_input = document.createElement('input');
                volume_input.setAttribute('name', 'volume_input[' + i + ']');
                volume_input.setAttribute('class', 'form-control');

                var satuan_input = document.createElement('input');
                satuan_input.setAttribute('name', 'satuan_input[' + i + ']');
                satuan_input.setAttribute('class', 'form-control');



                var hapus = document.createElement('span');

                nama.appendChild(nama_input);
                spesifikasi.appendChild(spesifikasi_input);
                volume.appendChild(volume_input);
                satuan.appendChild(satuan_input);

                aksi.appendChild(hapus);

                hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
//                Aksi Delete
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                };

                i++;
            }
        </script>
    </body>
</html>