<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component {
	public $number1 = 0;
	public $number2 = 0;
	public $result = 0;
	public $action = '+';
	public $disabled = false;

	public function calculator() {
		$num1 = (float) $this->number1;
		$num2 = (float) $this->number2;

		switch ($this->action) {
		case '+':
			$this->result = $num1 + $num2;
			break;
		case '-':
			$this->result = $num1 - $num2;
			break;
		case '*':
			$this->result = $num1 * $num2;
			break;
		case '/':
			if ($num2 != 0) {
				$this->result = $num1 / $num2;
			} else {
				$this->result = 'Error: Division by zero';
			}
			break;
		case '%':
			$this->result = ($num1 / 100) * $num2;
			break;
		default:
			$this->result = 'Invalid Operation';
		}
	}

	public function updated($propertyName) {
		// Disable the button if either number1 or number2 is empty
		$this->disabled = $this->number1 === '' || $this->number2 === '';
	}

	public function render() {
		return view('livewire.calculator');
	}
}
