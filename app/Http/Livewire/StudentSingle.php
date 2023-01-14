<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentSingle extends Component
{
    public $student;

    public function mount($student)
    {
        $this->student = $student;
    }

    public function render()
    {
        return view('livewire.student-single');
    }
}
