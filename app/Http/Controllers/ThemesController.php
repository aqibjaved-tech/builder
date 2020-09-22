<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Themes;
use App\Modules;
use Session;
use Illuminate\Support\Facades\Config;

class ThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Themes::latest()->paginate(12);

        return view('themes.theme-list',compact('themes'))
            ->with('i', (request()->input('page', 1) - 1) * 12);
        // return view('themes.theme-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('themes.theme-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image') != ''){
            $image = $request->file('image');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('themeAssets'), $new_name);
        }else{
            $new_name = 'null';
        }

        if($request->file('favicon') != ''){
            $image = $request->file('favicon');

            $favicon = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('themeAssets'), $favicon);
        }else{
            $favicon = 'null';
        }
        // echo '<pre>';
        // print_r($request->groupname[0]); exit;
        $count = count($request->groupname);
        $group = array();
        $clean_group = '';

        if($count > 1){
            for($i = 0; $i < $count; $i++){
                // $group['name'][] = $request->groupname[$i];
                $clean_group = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($request->groupname[$i]));
                $group[] = array('name'=>$request->groupname[$i], 'groups'=>$request->groups[$clean_group]);
            }

            $settings = json_encode($group);
        }else{
            $settings = '';
        }
        $form_data = array(
            'name'             =>   $request->name,
            'description'      =>   $request->description,
            'authorname'       =>   $request->authorname,
            'authoremail'       =>   $request->authoremail,
            'authorwebsite'       =>   $request->authorwebsite,
            'favicon'          =>   $favicon,
            'image'            =>   $new_name,
            'setting'          =>   $settings,
            'active'           =>   ($request->active)?$request->active:0,
            'platforms'        =>   $request->platforms,
        );

        Themes::create($form_data);
        Session::flash('success','Theme created successfully!');
        return url('themes');
        die();
        // return redirect()->route('themes.index')
        //                 ->with('success','Theme created successfully.');
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

    public function duplicate ($id){
        // echo 'sdfsdfs'; exit;
        $themes = Themes::find($id);
        $newTheme = $themes->replicate();
        $newTheme->save();
        return redirect('themes')->with('success', 'Duplicate Theme Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Themes $theme)
    {
        $modules = Modules::where('themeid', $theme->id)->latest()->paginate(25);
        return view('themes.theme-edit',compact('theme','modules'));
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
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // echo '<pre>';
        // print_r($request->all());
        // exit;

        if($request->file('image') != ''){
            $image = $request->file('image');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('themeAssets'), $new_name);
        }else{
            $new_name = $request->oldimage;
        }

        if($request->file('favicon')){
            $image = $request->file('favicon');

            $favicon = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('themeAssets'), $favicon);
        }else{
            $favicon = $request->oldfavicon;
        }

        $count = 0;
        $group = array();
        if($request->groupname){
            $count = count($request->groupname);
            $group = array();
            $clean_group = '';
            for($i = 0; $i < $count; $i++){
                $clean_group = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($request->groupname[$i]));
                $group[] = array('name'=>$request->groupname[$i], 'groups'=>$request->groups[$clean_group]);
            }
        }
        $form_data = array(
            'name'             =>   $request->name,
            'description'      =>   $request->description,
            // 'authorname'       =>   $request->authorname,
            // 'authoremail'      =>   $request->authoremail,
            // 'authorwebsite'    =>   $request->authorwebsite,
            'favicon'          =>   $favicon,
            'image'            =>   $new_name,
            // 'setting'          =>   json_encode($group),
            'active'           =>   ($request->active)?$request->active:0,
            // 'platforms'        =>   $request->platforms,
        );
        //   echo '<pre>';
        // print_r($form_data); exit;

        Themes::whereId($id)->update($form_data);
        //die();
        return redirect('themes')->with('success', 'Data is successfully updated');
    }

    public function search(Request $request){
        // echo $request->input('search'); exit;
        $themes = Themes::where('name', $request->input('search'))
            ->orWhere('name', 'like', '%' . $request->input('search') . '%')->paginate(12);
        // $themes = Themes::latest()->paginate(25);

        return view('themes.theme-list',compact('themes'))
            ->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Themes::find($id)->delete();

        return redirect()->back()->with('success', 'Theme has been deleted!!');
    }
}
