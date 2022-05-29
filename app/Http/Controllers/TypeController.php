<?php

namespace App\Http\Controllers;

use App\PostType;
use App\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $types = Types::where('type', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $types = Types::paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Post Type';
        return view('type.index', compact('types','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['type'=>'required|unique:types']);
        
        $typeModel = new Types;
        $typeModel->type = Str::lower($request->type);
        $typeModel->save();
        flash('Post Type created successfully!')->success();
        return redirect()->route('type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $typeModel = new Types;
        $typeModel->where('id',$id)->delete();
        // $typeModel->delete();
        flash('Post Type deleted successfully!')->success();
        return redirect()->route('type.index');

    }

    public function dpt(Request $request)
    {

        $pti = PostType::where([['type_id','=', $request->type_id],['post_id','=',$request->postID]])->first();
        $pti->delete();
        flash('Post Type deleted successfully!')->success();
        return redirect()->back();

    }
}
