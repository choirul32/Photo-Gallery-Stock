<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Auth;
use App\Models\Tag;

class PhotoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Photo::where('user_id', Auth::id())->get();
        return view('gallery', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload_image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name_photo' => 'required|string',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('image');
 
        $fileName = time()."_".$file->getClientOriginalName();
        $target_upload = 'storage/images';
        $file->move($target_upload,$fileName);
        
        $photo = Auth::user()->photo()->create([
            'src' => $fileName,
            'name' => $request->name_photo,
        ]);

        if(isset($request->tag_photo)){
            $tags = explode(',', $request->tag_photo);
            foreach($tags as $item){
                $tag = Tag::where('name', $item)->first();
                if(is_null($tag)){
                    $model = Tag::create(['name' => $item]);
                    $photo->tag()->attach($model->id);
                }else{
                    $photo->tag()->attach($tag);
                }
            }
            $photo->save();
            
        }

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Photo::findOrFail($id);
        return view('show_image', ['model' => $model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
