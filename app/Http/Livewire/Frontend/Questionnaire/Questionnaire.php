<?php

namespace App\Http\Livewire\Frontend\Questionnaire;

use Livewire\Component;

class Questionnaire extends Component
{
    public $name;
    public $email;
    public $age;
    public $gender;
    public $medication;
    public $medical_history;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'age' => 'required|numeric',
        'gender' => 'required',
        'medication' => 'required',
        'medical_history' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Save the questionnaire data to the database
        // ...

        session()->flash('message', 'Questionnaire submitted successfully!');
    }
    public function render()
    {
        return dd(view('livewire.frontend.questionnaire.questionnaire')->layout('layouts.base'));
    }
}
