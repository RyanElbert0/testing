<?php
class laundry
{
    function laundry($berat, $pilih, $PakaianDalam, $Struk)
    {
        $harga = 0;
        $cas = 5000;
        $denda = 10000;

        if ($pilih == "Setrika saja") {
            $setrika = $berat * 3500;
            echo "Harga laundry setrika saja dengan berat " . $berat . " kg adalah " . $setrika;
            $harga += $setrika;
            if ($PakaianDalam == "ada") {
                echo " <br> Dikenakan cas  " . $cas;
                $harga += $cas;
            } else {
                echo "<br> Tidak Dikenakan cas ";
            }
            if ($Struk == "tidak ada") {
                echo " <br> Dikenakan denda  " . $denda;
                $harga += $denda;
            } else {
                echo " <br> Tidak Dikenakan denda ";
            }
        } else if ($pilih == "Cuci dan Setrika") {
            $cuci_setrika = $berat * 5000;
            echo "Harga laundry cuci dan setrika dengan berat " . $berat . " kg adalah " . $cuci_setrika;
            if ($PakaianDalam == "tidak ada") {
                echo " <br> Dikenakan cas  " . $cas;
                $harga += $cas;
            } else {
                echo " <br> Tidak Dikenakan cas ";
            }
            if ($Struk == "tidak ada") {
                echo " <br> Dikenakan denda  " . $denda;
                $harga += $denda;
            } else {
                echo " <br> Tidak Dikenakan denda ";
            }
        } else {
            echo "Pilih tidak ada";
        }
        echo "<br> Total Harga = " . $harga;
    }
}
