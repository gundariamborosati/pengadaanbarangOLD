<html>
<head>
<style type="text/css" media="print">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    tr { border: solid 1px #000; page-break-inside: avoid;}
    td { padding: 7px 5px; font-size: 10px}
    th {
        font-family:Arial;
        color:black;
        font-size: 11px;
        background-color:lightgrey;
    }
    thead {
        display:table-header-group;
    }
    tbody {
        display:table-row-group;
    }
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
    table {border: solid 1px #000; border-collapse: collapse; width: 100%}
    tr { border: solid 1px #000}
    th {
        font-family:Arial;
        color:black;
        font-size: 11px;
        background-color: #999;
        padding: 8px 0;
    }
    td { padding: 7px 5px;font-size: 10px}
    h3 { margin-bottom: -17px }
    h2 { margin-bottom: 0px }
</style>
<title>Cetak Progress oleh direktur</title>
</head>

<body onload="window.print()">
    <center><b style="font-size: 20px"><h3> Progress Pengadaan</h3></b><br>
    

     Dari tanggal <b><?=date('F d Y', strtotime($tgl_start))."</b> sampai dengan tanggal <b>". date('F d Y',strtotime($tgl_end))."</b>"; ?> 
    </center><br> 

     <table id="dataProgress" class="table ">
                <thead>
                  <tr>
                  <th> nomor</th>
                     
                    <th>tanggal</th>
                    <th>nama customer</th>
                    <th>nama vendor</th>
                    <th>progress</th>
                    <th >kendala</th>
                   

                  
                  </tr>
                </thead>
                <tbody>

            <?php 
            if (!empty($progress)) {
                $no = 0;
                foreach ($progress as $d) {
                    $no++;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $d->tanggal; ?></td>
                <td><?php echo $d->nama_customer; ?></td>
                <td><?php echo $d->nama_vendor; ?></td>
              <!--   <td><?php echo $d->tanggal; ?></td> -->
                <td><?php echo $d->progress; ?></td>
                <td><?php echo $d->kendala; ?></td>
               
            </tr>
            <?php 
                }
            } else {
                echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
            }
            ?> 
         
         


   
    
  

        </tbody>
    </table>
</body>
</html>

