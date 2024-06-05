<?php

// app/View/Components/Preference.php
namespace App\View\Components;

use Illuminate\View\Component;

class Prefence extends Component
{
    public $ids;

    public function __construct($ids = [])
    {
        $this->ids = $ids;
    }

    public function render()
    {
        return view('components.prefence');
    }
}
