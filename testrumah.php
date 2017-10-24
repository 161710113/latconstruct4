<?php
require_once "datarumah.php";
$data = new data ('72','4','20','4','Baleendah');
echo "Rumah dengan type " . $data->get_type()."<br>";
echo "Memiliki " . $data->get_kamar()." Kamar <br>";
echo "DP Rumah tersebut " . $data->get_dp()." Jt<br>";
echo "Cicilannya " . $data->get_cicilan()." Jt<br>";
echo "Lokasinya di " . $data->get_lokasi()."<br>";
?>