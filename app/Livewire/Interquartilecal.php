<?php

namespace App\Livewire;

use Livewire\Component;

class Interquartilecal extends Component
{
    public $datas;
    public $frequency;
    public $interquartile;
    public $result;


    public function calculateInterQuartile() {
        $container = [];
    
        // Kalau result ada dikosongkan dulu sama supaya tidak bentrok saat fungsi dijalankan ulang
        if ($this->result) {
            $this->result = null;
        }
    
        $delimiter = ",";
        $data = $this->datas;
        $frequency = $this->frequency_data;
    
        // Cek apakah data mengandung koma
        if (strpos($data, $delimiter) === false || strpos($frequency, $delimiter) === false) {
            // Jika tidak ada koma pada salah satu data, pisahkan dengan spasi
            $delimiter = " ";
            $data = str_replace(" ", $delimiter, $data);
            $frequency = str_replace(" ", $delimiter, $frequency);
        } else {
            // Jika mengandung koma, hilangkan spasi dan pisahkan dengan koma
            $data = preg_replace('/\s+/', '', $data);
            $frequency = preg_replace('/\s+/', '', $frequency);
        }
    
        $split_data = explode($delimiter, $data);
        $split_frequency = explode($delimiter, $frequency);
    
        // Length of array
        $n = count($split_data);
    
        for ($i = 0; $i < $n; $i++) {
            $data = array_fill(0, $split_frequency[$i], $split_data[$i]);
            $container = array_merge($container, $data);
        }
    
        $res = $this->calculateQuartiles($container);
    
        // Finally main Formula for Interquartiles Q3 - Q1
        $this->interquartile = $res[2] - $res[0];
    }
    
    
    public function calculateQuartiles($arr) {
    
        sort($arr);
        $n = count($arr);
        $q2 = $this->calculateMedian($arr);
        
        $lowerHalf = array_slice($arr, 0, floor($n / 2));
        $q1 = $this->calculateMedian($lowerHalf);
    
        $upperHalf = array_slice($arr, ceil($n / 2));
        $q3 = $this->calculateMedian($upperHalf);
    
        $this->result = [$q1, $q2, $q3];

        return [$q1, $q2, $q3];
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
