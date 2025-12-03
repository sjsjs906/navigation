<?php
    function hitungKembalian($totalbelanja,$uangdiberikan){
        $diskon = 0;
        if ($totalbelanja >= 2000000 && $totalbelanja < 500000){
            $diskon = 0.5;
        } else if ($totalbelanja >= 5000000&& $totalbelanja < 1000000){
            $diskon = 0.20;
        }
        $totalsetelahdiskon = $totalbelanja * (1 - $diskon);
        $kembalian = $uangdiberikan - $totalsetelahdiskon;
        if ($kembalian >= 0){
            return $kembalian;
        } else {
            return 0;
        }
    }
    $totalbelanja = 8000000;
    $uangdiberikan = 10000000;
    echo "uang yang diterima oleh Andi adalah Rp" . hitungKembalian($totalbelanja,$uangdiberikan);
?>

<?php
    function hitungKupon($totalharga){
        if ($totalharga >= 10000000){
            $diskon = 0.2;
            $kupon = 12;
        } else if ($totalharga >= 5000000){
            $diskon = 0.1;
            $kupon = 10;
        } else if ($totalharga >= 20000000){
            $diskon = 0.05;
            $kupon = 7;
        } else {
            $diskon = 0;
            $kupon = 5;
        }
        $totaldiskon = $totalharga * $diskon;
        $uangdapat = $kupon * 100;
        return $uangdapat;
    }
    //contoh penggunaan fungsi
    echo "Andi akan mendapatkan uang Rp" . $uangdapat . "dari kupon-kupon yang diterima setelah pembelian.";
?>