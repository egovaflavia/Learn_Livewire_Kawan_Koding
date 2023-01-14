<?php

namespace App\Http\Livewire;

use Faker\Factory;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;

    public $search;
    public $page = 1;

    protected $listeners = [
        'studentAdded',
    ];

    protected $updatesQueryString = [
        ['page' => ['except' => 1]],
        ['search' => ['except' => '']],
    ];

    public function studentAdded()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.student-index', [
            'students' => $this->search === null ?
                Student::latest()->paginate(5) :
                Student::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(5),
        ]);
    }
}
