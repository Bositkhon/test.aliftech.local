<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Document;
use App\Http\Requests\StoreDocumentFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folders = Folder::all();
        return view('documents.create', [
            'folders' => $folders
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentFormRequest $request)
    {
        $files = $request->file('files');
        $folderID = $request->get('folder_id');
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filePath = $file->store('documents', 'public');

            $folder = Folder::find($folderID);

            $folder->documents()->create([
                'folder_id' => $request->get('folder_id'),
                'file_name' => $fileName,
                'extension' => $extension,
                'file_path' => $filePath
            ]);
        }

        return back()->with([
            'success' => __('messages.store_success', ['model' => __('models.document')])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return back()->with([
            'success' => __('messages.destroy_success', ['model' => __('models.document')])
        ]);
    }
}
