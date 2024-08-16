<?php

namespace App\Livewire;

use Livewire\Component;

class RegisterForm extends Component {
	public string $email = '';
	public string $password = '';
	public string $first_name = '';
	public string $last_name = '';
	public string $role = 'customer';
	public string $company_name = '';
	public string $vat_number = '';

	protected $rules = [
		'first_name' => 'required|min:2',
		'last_name' => 'required|min:2',
		'email' => 'required|email',
		'password' => 'required|min:8',
		'company_name' => 'required_if:role,vendor',
		'vat_number' => 'required_if:role,vendor',
	];

	public function submit() {
		$this->validate();

		session()->flash('message', 'Customer created successfully');

		$this->first_name = '';
		$this->last_name = '';
		$this->email = '';
		$this->password = '';
		$this->company_name = '';
		$this->role = 'customer';
		$this->vat_number = '';
	}

	public function update($property) {
		$this->validateOnly($property);
	}

	public function updatedRole($value) {
		$this->role = $value;
		$this->resetValidation(); // Optional: Resets validation errors when the role changes
	}

	public function render() {
		return view('livewire.register-form');
	}
}
