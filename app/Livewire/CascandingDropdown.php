<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Countries;
use Livewire\Component;

class CascandingDropdown extends Component {
	public $continents;
	public $countries = [];

	public $selectedContinent = '-1';
	public $selectedCountry = '-1';

	public function mount() {
		$this->continents = Continent::all();
	}

	public function changeContinent() {
		if ($this->selectedContinent !== '-1') {
			$this->countries = Countries::where('continent_id', $this->selectedContinent)->get();
		} else {
			$this->countries = [];
		}
	}

	public function render() {
		return view('livewire.cascanding-dropdown');
	}
}
