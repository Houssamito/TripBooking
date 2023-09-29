<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ReelsController extends Controller
{
    public function index()
    {
        $data['route'] = 'Reels';
        $data['Reels']=Reels::select('id','titre', 'video')->get();
        return view('admin.Reels.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'Reels';
        return view('admin.Reels.create',$data);
    }

    public function store(Request $request)
{
    {
        $this->validate($request, [
            'titre' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
 
        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
 
        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
 
        if ($isFileUploaded) {
            $reel = new Reels();
            $reel->titre = $request->titre;
            $reel->video = $filePath;
            $reel->save();
 
            return back()
            ->with('success','Video has been successfully uploaded.');
        }
 
        return back()
            ->with('error','Unexpected error occured');
    }
}

}
