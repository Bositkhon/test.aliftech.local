<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchForm extends Component
{
    protected $action;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $action = '')
    {
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.search-form', [
            'action' => $this->action
        ]);
    }
}
