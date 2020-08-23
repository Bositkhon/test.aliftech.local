<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{

    protected $pagination;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pagination)
    {
        $this->pagination = $pagination;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.pagination', [
            'pagination' => $this->pagination
        ]);
    }
}
