<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WeddingPackageRequest;
use App\Models\WeddingPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class WeddingPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $items = WeddingPackage::where('title', 'LIKE', '%'.$request->search.'%')
            ->orWhere('price', 'LIKE', '%'.$request->search.'%')
            ->orWhere('description', 'LIKE', '%'.$request->search.'%')
            ->get();
        }else{
            $items = WeddingPackage::all();
        }
        
        return view('pages.admin.wedding-package.index',[
                'items' => $items
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.wedding-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeddingPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        WeddingPackage::create($data);
        return redirect()->route('wedding-package.index');

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
        $item = WeddingPackage::findOrfail($id);

        return view('pages.admin.wedding-package.edit' ,[
        'item' => $item,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WeddingPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = WeddingPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('wedding-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WeddingPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('wedding-package.index');
    }


    
}
