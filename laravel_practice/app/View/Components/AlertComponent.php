<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $students;
    public $title;
    public function __construct($name, $students, $title)
    {
        $this->name = $name;
        $this->students = $students;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-component');
    }
}
