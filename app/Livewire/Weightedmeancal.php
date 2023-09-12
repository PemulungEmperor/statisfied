<?php

namespace App\Livewire;

use Livewire\Component;

class Weightedmeancal extends Component
{
    public $datas;
    public $frequency_data;
    public $selected_radio='';

    public $decimal_count;
    public $decimal = true;
    
    public $xi=0; /*Total data multiple by frequency */
    public $wi=0; /*Total sum of frequency*/
    public $result;
    
    public function calculateMean() {
        $formatted_result = '';
        $decimal_count = '';
    
        if ($this->result) {
            $this->result = null;
            $this->xi = null;
            $this->wi = null;
        }
    
        $delimiter = ",";
        $data = $this->datas;
        $data_frequency = $this->frequency_data;
    
        // Cek apakah data mengandung koma
        if (strpos($data, $delimiter) === false || strpos($data_frequency, $delimiter) === false) {
            // Jika tidak ada koma pada salah satu data, pisahkan dengan spasi
            $delimiter = " ";
            $data = str_replace(" ", $delimiter, $data);
            $data_frequency = str_replace(" ", $delimiter, $data_frequency);
        } else {
            // Jika mengandung koma, hilangkan spasi dan pisahkan dengan koma
            $data = preg_replace('/\s+/', '', $data);
            $data_frequency = preg_replace('/\s+/', '', $data_frequency);
        }
    
        $split_data = explode($delimiter, $data);
        $split_frequency_data = explode($delimiter, $data_frequency);
    
        // Check the length of data and frequency
        $data_count = count($split_data);
        $frequency_count = count($split_frequency_data);
    
        if ($data_count === $frequency_count) {
            for ($i = 0; $i < $data_count; $i++) {
                $this->xi += ($split_data[$i] * $split_frequency_data[$i]);
            }
    
            for ($i = 0; $i < $data_count; $i++) {
                $this->wi += $split_frequency_data[$i];
            }
    
            $result = $this->xi / $this->wi;
    
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
        } else {
            session()->flash('error', 'Amount or Format of Data & Frequency must be the same.');
        }
    }
    

    public function toogleDecimal()
    {
        $this->decimal_count = null;
    }
}
