<?php

namespace App\Livewire;

use Livewire\Component;

class Modecal extends Component
{
    public $datas;
    public $result;

    public function calculateMode() {
        $modeObject = array();
    
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
    
        $split_data = explode($delimiter, $data);
        sort($split_data);
    
        $sorted_data = $split_data;
        $data_length = count($sorted_data);
    
        for ($i = 0; $i < $data_length; $i++) {
            if (isset($modeObject[$sorted_data[$i]])) {
                $modeObject[$sorted_data[$i]] += 1;
            } else {
                $modeObject[$sorted_data[$i]] = 1;
            }
        }
    
        $integerLimit = -1;
        $mode = [];
    
        foreach ($modeObject as $key => $valueOfObject) {
            if ($valueOfObject > $integerLimit) {
                $integerLimit = $valueOfObject;
                $mode = [$key];
            } elseif ($valueOfObject === $integerLimit) {
                $mode[] = $key;
            }
        }
    
        $mode = implode(',', $mode);
    
        $this->result = $mode;
    }
    
    
}
