<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DocumentsTable extends Component
{
    protected $documents;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($documents)
    {
        $this->documents = $documents;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.documents-table', [
            'documents' => $this->documents
        ]);
    }
}
