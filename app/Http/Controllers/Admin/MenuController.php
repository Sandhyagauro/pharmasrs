<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Session;
use Input;
use Response;

class MenuController extends Controller
{
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::orderBy('order','asc')->get();
        $menus=$this->menu->generateMenu($menu);
        return view('backend.admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'menu_name' => 'required',
        'url' => 'required'
    ]);

        $menus = new Menu();
        $menus->title = $request->menu_name;
        $menus->url = $request->url;
        $menus->order 	= Menu::max('order')+1;
        $menus->save();
        Session::flash('message', 'Menu added Successfully');
        return redirect('admin/menu')->with('success', 'Content updated successfully');
    }

    public function save()
    {
        $this->menu->changeParentById($this->menu->parseJsonArray(json_decode(Input::get('json'), true)));
        return Response::json(array('result' => 'success'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('backend.admin.menu.edit', compact('menu'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $menu = Menu::find($id);
        $menu->title = $request->menu_name;
        $menu->url = $request->url;
        $menu->save();
        Session::flash('message', 'Menu updated Successfully');
        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        Session::flash('message', 'Menu deleted Successfully');
        return redirect('admin/menu');

    }
}
