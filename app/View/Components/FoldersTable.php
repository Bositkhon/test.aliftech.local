<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FoldersTable extends Component
{

    protected $folders;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($folders)
    {
        $this->folders = $folders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.folders-table', [
            'folders' => $this->folders
        ]);
    }
}
