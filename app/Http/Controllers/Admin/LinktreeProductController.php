<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\linkproduct;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LinktreeProductController extends Controller
{
    public function index(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        $banners = linkproduct::orderBy('id', 'desc');
        $banners = $banners->paginate(Helpers::pagination_limit())->appends($query_param);

        return view('admin-views.linktree.product', compact('banners', 'search'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
                'name' => 'required',
                'logo' => 'required',
            ], [
                'title.required' => 'title is required!',
                'logo.required' => 'Image is required!',
            ]);

        $banner = new linkproduct();
        // $banner->type = $request->type;
        // $banner->link = $request->link;
        $banner->title = $request->name;
        $banner->image = ImageManager::upload('linktree/', 'png', $request->file('logo'));
        $banner->save();
        Toastr::success('Product added successfully!');

        return back();
    }

    public function edit(Request $request)
    {
        $data = linkproduct::where('id', $request->id)->first();

        return response()->json($data);
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
                'name' => 'required',
            ], [
                'title.required' => 'title is required!',
            ]);
        $banner = linkproduct::find($request->id);
        // $banner->type = $request->type;
        $banner->title = $request->name;
        // $banner->name = $request->name;
        if ($request->file('logo')) {
            $banner->image = ImageManager::update('linktree/', $banner['image'], 'png', $request->file('logo'));
        }

        $banner->save();

        // return response()->json();
        Toastr::success('Product image updated successfully!');

        return back();
    }

    public function delete(Request $request)
    {
        $br = linkproduct::find($request->id);
        ImageManager::delete('/linktree/'.$br['logo']);
        $br->delete();

        return response()->json();
    }
}
