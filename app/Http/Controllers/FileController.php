<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $files = File::orderBy('id', 'DESC')->paginate(10);

        return view('pages.file.index', compact('files'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.file.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FileRequest $request)
    {
        $fileModel = new File;

        // Generate a unique filename
        $fileName = 'files/' . $request->name . '_' . time() . '.' . $request->file->getClientOriginalExtension();

        // Store the file in the public disk
        $filePath = Storage::putFileAs('public', $request->file('file'), $fileName);
        // // $filePath = $request->file('file')->storeAs('files', $fileName, 'public');
        // $filePath = Storage::put($fileName, $request->file('file'), 'public');

        // Fill the file model attributes
        $fileModel->name = $request->name;
        $fileModel->mimeType = $request->file->getClientMimeType();
        $fileModel->size = $request->file->getSize();
        $fileModel->user_id = auth()->id(); // Use auth() helper instead of Auth facade
        $fileModel->path = Storage::url($filePath); // Generate a public URL for the file

        $fileModel->save();
        return redirect()->route('files.index')
            ->with('success', 'File created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        // Delete the file from storage
        if (Storage::exists($file->path)) {
            Storage::delete($file->path);
        }
        // Storage::delete($file->path);

        // Delete the file record from the database
        $file->delete();

        return response()->json(['success' => true, 'status'=> 'File has been deleted.']);
    }
}
