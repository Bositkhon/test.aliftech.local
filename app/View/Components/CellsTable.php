<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CellsTable extends Component
{

    protected $cells;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cells)
    {
        $this->cells = $cells;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cells-table', [
            'cells' => $this->cells
        ]);
    }
}
