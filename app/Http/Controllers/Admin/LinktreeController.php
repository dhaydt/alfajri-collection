<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\linktree;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LinktreeController extends Controller
{
    public function index(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        $banners = linktree::orderBy('id', 'desc');
        $banners = $banners->paginate(Helpers::pagination_limit())->appends($query_param);

        return view('admin-views.linktree.view', compact('banners', 'search'));
    }

    public function store(Request $request)
    {
        if ($request->type == 'wa') {
            $request->validate([
                'link' => 'required',
                'name' => 'required',
                // 'image' => 'required',
            ], [
                'link.required' => 'No whatsapp is required!',
                'name.required' => 'AppStore url is required!',
                // 'image.required' => 'Image is required!',
            ]);

            $banner = new linktree();
            $banner->type = $request->type;
            $banner->link = $request->link;
            $banner->name = $request->name;
            $banner->logo = ImageManager::upload('linktree/', 'png', $request->file('logo'));
            $banner->save();
            Toastr::success('Linktree added successfully!');

            return back();
        }
        $request->validate([
            'link' => 'required',
            'logo' => 'required',
            'name' => 'required',
        ], [
            'link.required' => 'link is required!',
            'logo.required' => 'logo is required!',
            'name.required' => 'name is required!',
        ]);

        $banner = new linktree();
        $banner->type = $request->type;
        $banner->link = $request->link;
        $banner->name = $request->name;
        $banner->logo = ImageManager::upload('linktree/', 'png', $request->file('logo'));
        $banner->save();
        Toastr::success('Banner added successfully!');

        return back();
    }

    public function edit(Request $request)
    {
        $data = linktree::where('id', $request->id)->first();

        return response()->json($data);
    }

    public function update(Request $request)
    {
        // dd($request);
        if ($request->type == 'wa') {
            $request->validate([
                'link' => 'required',
                'name' => 'required',
                // 'image' => 'required',
            ], [
                'link.required' => 'No whatsapp is required!',
                'name.required' => 'AppStore url is required!',
                // 'image.required' => 'Image is required!',
            ]);
            $banner = linktree::find($request->id);
            $banner->type = $request->type;
            $banner->link = $request->link;
            $banner->name = $request->name;
            if ($request->file('logo')) {
                $banner->logo = ImageManager::update('linktree/', $banner['logo'], 'png', $request->file('logo'));
            }

            $banner->save();

            // return response()->json();
            Toastr::success('Linktree updated successfully!');
        }
        $request->validate([
            'link' => 'required',
            // 'logo' => 'required',
            'name' => 'required',
        ], [
            'link.required' => 'link is required!',
            // 'logo.required' => 'logo is required!',
            'name.required' => 'name is required!',
        ]);
        $banner = linktree::find($request->id);
        $banner->type = $request->type;
        $banner->link = $request->link;
        if ($request->file('logo')) {
            $banner->logo = ImageManager::update('linktree/', $banner['logo'], 'png', $request->file('logo'));
        }

        $banner->save();

        // return response()->json();
        Toastr::success('Linktree updated successfully!');

        return back();
    }

    public function delete(Request $request)
    {
        $br = linktree::find($request->id);
        ImageManager::delete('/linktree/'.$br['logo']);
        $br->delete();

        return response()->json();
    }
}
