<?php

namespace App\Livewire;

use Livewire\Component;

class Deviationcal extends Component
{
    public $datas;
   
    public $decimal_count;
    
    public $result;


    public function calculateDeviation() {
        $formatted_result = null;
    
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
    
        $arr = explode($delimiter, $data);
    
        $sumArr = array_sum($arr);
        $mean = $sumArr / count($arr);
    
        $sumDistance = 0;
    
        foreach ($arr as $value) {
            $sumDistance += pow(($value - $mean), 2);
        }
    
        $result = sqrt($sumDistance / count($arr));
    
        if ($this->decimal_count !== null) {
            $formatted_result = number_format($result, $this->decimal_count);
            $this->result = $formatted_result;
        } else {
            $this->result = $result;
        }
    }
    

   public function toogleDecimal()
   {
       $this->decimal_count = null;
   }
}
