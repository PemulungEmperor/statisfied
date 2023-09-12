<?php

namespace App\Livewire;

use Livewire\Component;

class Quartilescal extends Component
{
    public $datas;
    public $result;
    
    public function calculateQuartiles() {
        // Kalau result ada dikosongkan dulu sama seperti fungsi di atas
        if ($this->result) {
            $this->result = null;
        }
    
        $delimiter = ",";
        $data = $this->datas;
    
        // Cek apakah data mengandung koma
        if (strpos($data, $delimiter) === false) {
            // Jika tidak ada koma, pisahkan dengan spasi
            $delimiter = " ";
            $data = str_replace(" ", $delimiter, $data);
        } else {
            // Jika mengandung koma, hilangkan spasi dan pisahkan dengan koma
            $data = preg_replace('/\s+/', '', $data);
        }
    
        // Konversi data masukan menjadi array numerik
        $split_data = array_map('intval', explode($delimiter, $data));
        sort($split_data);
    
        $n = count($split_data);
        $q2 = $this->calculateMedian($split_data);
    
        // Pembagian data menjadi lowerHalf dan upperHalf
        $mid = floor($n / 2);
        $lowerHalf = array_slice($split_data, 0, $mid);
        $upperHalf = array_slice($split_data, ($n % 2 == 0) ? $mid : ($mid + 1));
    
        $q1 = $this->calculateMedian($lowerHalf);
        $q3 = $this->calculateMedian($upperHalf);
    
        $this->result = [$q1, $q2, $q3];
    }
    
    


    public function calculateMedian($arr) {
        $len = count($arr);
        $mid = floor($len / 2);
    
        if ($len % 2 === 0) {
            return ($arr[$mid - 1] + $arr[$mid]) / 2;
        } else {
            return $arr[$mid];
        }
    }
}
