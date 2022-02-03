<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::where('category','dnc')->paginate(10);
        return view('gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([

                'title'=>'required',
                'category'=>'required',
                'image_path'=>'required'
            ],[
                'title.required'=>'Gallery title is required',
                'category.required'=>'Gallery Category is required',
                'image_path.required'=>'Gallery Image is required'
            ]);


            $galleryData = $request->all();
            $galleryData['image_path'] = parse_url($request->image_path, PHP_URL_PATH);
            // if ($request->profile_photo) {
            //     $galleryData['image_path'] = parse_url($request->profile_photo, PHP_URL_PATH);
            // }

            Gallery::create($galleryData);

            // if ($gallery) {
                
            //     $request->merge(['gallery_id' => $gallery->id]);
            //     $galleryImage = $request->except(['title','category']);
            //     $galleryImage['image_path'] = parse_url($request->image_path, PHP_URL_PATH);
      
            //     GalleryImage::create($galleryImage);

            // }

            flash('Gallery created successfully!')->success();
            return redirect()->route('gallery.create');
    }

   
    public function show(Gallery $Gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $Gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
      
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $Gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([

            'title'=>'required',
            'category'=>'required',
            // 'image_path'=>'required'
        ],[
            'title.required'=>'Gallery title is required',
            'category.required'=>'Gallery Category is required',
            // 'image_path.required'=>'Gallery Image is required'
        ]);

        $galleryData = $request->except(['image_path']);

        if ($request->image_path) {
            $galleryData['image_path'] = parse_url($request->image_path, PHP_URL_PATH);
        }
        $gallery->update($galleryData);
        flash('Gallery updated successfully!')->success();
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $Gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        flash('Gallery deleted successfully!')->success();
        return redirect()->route('gallery.index');

    }
}
