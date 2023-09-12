<?php

namespace App\Livewire;

use Livewire\Component;

class Meancal extends Component
{
    public $datas;
    public $selected_radio='';

    public $decimal_count;
    public $decimal = true;
    
    public $result;
    
    public function calculateMean() {
        $formatted_result = '';
        $decimal_count = '';
    
        // Inisialisasi $this->result sebagai angka nol
        $this->result = 0;
    
        $delimiter = ",";
        $data = $this->datas;
    
        // Periksa apakah data mengandung koma
        if (strpos($data, $delimiter) === false) {
            // Jika tidak ada koma, pisahkan dengan spasi
            $split_data = explode(" ", $data);
        } else {
            // Jika mengandung koma, hilangkan spasi dan pisahkan dengan koma
            $data = preg_replace('/\s+/', '', $data);
            $split_data = explode($delimiter, $data);
        }
    
        $data_length = count($split_data);
    
        for ($i = 0; $i < $data_length; $i++) {
            // Pastikan setiap elemen yang ditambahkan adalah angka
            $this->result += (float) $split_data[$i];
        }
    
        $result = $this->result / $data_length;
    
        if ($this->selected_radio === "rounded") {
            $formatted_result = round($result);
        } else {
            if ($this->decimal_count !== null) {
                $formatted_result = number_format($result, $this->decimal_count);
            } else {
                $formatted_result = $result; // Tanpa number_format jika decimal_count adalah null
            }
        }
        $this->result = $formatted_result;
    }
    
    
    

    public function toogleDecimal()
    {
        $this->decimal_count = null;
    }
}
