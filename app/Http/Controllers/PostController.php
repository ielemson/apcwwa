<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use App\PostImageGallery;
use App\PostType;
use App\State;
use App\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;

class PostController extends Controller
{
    public function __construct()
    {

        $this->middleware('permission:view-post');
        $this->middleware('permission:create-post', ['only' => ['create','store']]);
        $this->middleware('permission:update-post', ['only' => ['edit','update']]);
        $this->middleware('permission:destroy-post', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = Post::with(['user','category'])->where('post_title', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 15));
        }else{
            $posts = Post::with(['user','category'])->paginate(setting('record_per_page', 15));
        }
        $title =  'Manage Posts';
        return view('post.index', compact('posts','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create post';
        $categories = Category::pluck('category_name', 'id');
        $postType = Types::pluck('type','id');
        $states = State::orderBy('name')->get();
        return view('post.create', compact('categories', 'title','postType','states'));
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

            'post_title' => 'required',
            'post_type_id' => 'required',
            'post_body' => 'required',
            'featured_image' => 'required',
            // 'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
        ],
    
    [
        'post_type_id.required'=>'Post type is required',
        'category_id.required'=>'Post category is required',
        'featured_image.required'=>'Post image is required',
        'post_body.required'=>'Post body is required',
        'post_title.required'=>'Post title is required',
    ]);


        $slug = Str::slug($request->post_title.'-'.Str::random(5), '-');
        $request->merge(['user_id' => Auth::user()->id,'post_slug' =>$slug]);
        $post = $request->except(['featured_image']);

        // foreach($request->post_type_id as $post_typeid)
        // {
        //     $data[] = $post_typeid;  
        // }
    //  dd(json_encode($data));
        if ($request->featured_image) {
            $post['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }
        // $createdPost = Post::create($post);

        $createdPost = new Post;
        $createdPost->post_title = $request->post_title;
        $createdPost->category_id = $request->category_id;
        $createdPost->post_body = $request->post_body;
        $createdPost->status = $request->status;
        $createdPost->user_id = $request->user_id;
        $createdPost->post_slug = $request->post_slug;
        $createdPost->featured_image = $request->featured_image;
        $createdPost->state_id = $request->state_id;
        $createdPost->lga_id = $request->lga_id;
        // $createdPost->post_type_ids = json_encode($data);
        $createdPost->save();

        foreach ($request->post_type_id as $typeid) {
            $postType = new PostType();
            $postType->post_id = $createdPost->id;
            $postType->type_id = $typeid;
            $postType->save();
        }
        // if ($request->hasFile('images')) {
            // $image = $request->file('image');
            
            // foreach ($request->file('images') as $files) {
            //     $postGallery = new PostImageGallery;
            //     $destinationPath = '/public/storage/files/1/post/';
            //     $file_name = time() . "." . $files->getClientOriginalExtension();
            //     $files->move($destinationPath, $file_name);
            //     // $data[] = $file_name;
            //     // $post['img_gallery'] = json_encode($data);
                
            //     $postGallery->post_id = $createdPost->id;
            //     $postGallery->file_path = $file_name;
            //     $postGallery->save();
            // }
        // }


            if($request->file('images'))
            {
                $images = $request->file('images');
                foreach ($images as $single_image) {
                    $upload_location = 'storage/files/1/post_gallery/';
                    $name_gen = hexdec(uniqid()).'.'.$single_image->getClientOriginalExtension();
                    Image::make($single_image)->resize(600,600)->save($upload_location.$name_gen);
                    $save_url = $upload_location.$name_gen;
                    PostImageGallery::create([
                        'post_id' => $createdPost->id,
                        'file_path' => $save_url,
                    ]);
                }
            
        }

       
        // dd($post);
        
        flash('Post created successfully!')->success();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $title = "Post Details";
        $post->with(['category','user']);
        return view('post.show', compact('title', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $title = "Edit Post";
        $post->with(['category','user']);
        $categories = Category::pluck('category_name', 'id');
        $postType = Types::pluck('type','id');
        // dd($postType);
        $post_type_id = PostType::where('post_id',$post->id)->pluck('type_id');
        $typeIds = Types::whereIn('id',$post_type_id)->pluck('id');
        // dd($typeIds);
        $states = State::orderBy('name')->get();
        return view('post.edit', compact('title', 'categories', 'post','postType','states','typeIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        // dd($post->id);
        // dd($request);
        $postdata = $request->except('featured_image');
        if ($request->featured_image) {
            $postdata['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }
        $post->update($postdata);
// dd($request->post_type);
        foreach ($request->post_type as $type_id) { 


            $pti = PostType::where([['type_id','=', $type_id],['post_id','=',$post->id]])->first();

            if(is_null($pti)) {

                $post = new PostType([
                    'type_id' => $type_id,
                    'post_id' => $request->postID,
                ]);

                $post->save();

            }
        }
        flash('Post updated successfully!')->success();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        flash('Post deleted successfully!')->info();
        return back();
    }
}


