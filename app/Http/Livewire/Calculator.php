<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;
    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;

        if ($this->action === '-'){
            $this->result = $num1 - $num2;
        } elseif ($this->action === '+'){
            $this->result = $num1 + $num2;
        } elseif ($this->action === '/'){
            $this->result = $num1 / $num2;
        } elseif ($this->action === '*'){
            $this->result = $num1 * $num2;
        } elseif ($this->action === '%'){
            $this->result = ($num1 * $num2) / 100;
        }
    }

    public function updated($property){
        if ($this->number1 == '' || $this->number2 == ''){
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}