<?php

namespace App\Livewire;

use Livewire\Component;

class Mediancal extends Component
{
    public $datas;
    public $result;
    
    public function calculateMedian() {
        // Kalau result ada dikosongkan dulu sama seperti fungsi di atas
        if ($this->result) {
            $this->result = null;
        }
    
        // Cek apakah data mengandung koma
        if (strpos($this->datas, ',') === false) {
            // Jika tidak ada koma, pisahkan dengan spasi
            $delimiter = " ";
        } else {
            // Jika mengandung koma, hilangkan spasi dan pisahkan dengan koma
            $delimiter = ",";
            $this->datas = preg_replace('/\s+/', '', $this->datas);
        }
    
        // Pastikan $this->datas adalah array numerik
        $sorted_data = array_map('intval', explode($delimiter, $this->datas));
    
        sort($sorted_data, SORT_NUMERIC); // Pengurutan dalam urutan numerik
    
        $data_length = count($sorted_data);
    
        if ($data_length % 2 === 0) {
            $middle_index = $data_length / 2;
            $this->result = ($sorted_data[$middle_index] + $sorted_data[$middle_index - 1]) / 2;
        } else {
            $middle_index = floor($data_length / 2);
            $this->result = $sorted_data[$middle_index];
        }
    }
    
    

}
