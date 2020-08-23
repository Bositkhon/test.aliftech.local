<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BoxesTable extends Component
{
    protected $boxes;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($boxes = [])
    {
        $this->boxes = $boxes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.boxes-table', [
            'boxes' => $this->boxes
        ]);
    }
}
