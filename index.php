<?php
$url = "http://10.33.34.121/read.php";

$data = json_decode($response);
$results = $data->nama_depan;
        echo "<table border ='1'>
            <tr>
                <th>
             	Actor_id
                </th>
                <th>
             	 Nama Depan
                </th>
                <th>
                 Nama Belakang
                </th>
            </tr>";
        foreach($results as $result){
             echo 
            "<tr>
                <td>".
                $result->id_aktor
                ."</td>";
        }
        echo "</table>"

        
    ?>