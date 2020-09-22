<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules;
class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $themeid)
    {
        $numberofrecord = 24;
        if($request->has('num') && $request->get('num') > 24){
            $numberofrecord = $request->get('num');
        }

        $data['modules'] = Modules::where('themeid', $themeid)->latest()->paginate($numberofrecord);
        $data['themeid'] = $themeid;
        $data['num'] = $numberofrecord;

        return view('modules.module-list', $data)
            ->with('i', (request()->input('page', 1) - 1) * $numberofrecord);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($themeid)
    {
      $data['themeid'] = $themeid;
      return view('modules.module-add',$data);
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
          'name' => 'required',
          'description' => 'required',
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if($request->file('image') !=''){
          $image = $request->file('image');

          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('moduleAssets'), $new_name);
        }else{
          $new_name= '';
        }
      // print_r($request->all()); exit;
      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'category'         =>   $request->category,
          'image'            =>   $new_name,
          'html'             =>   utf8_encode($request->html),
          'themeid'          =>   $request->themeid,
      );
// print_r($form_data); exit;
      Modules::create($form_data);

      return redirect('modules/'.$request->themeid)->with('success','Module created successfully.');
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
    public function edit($modules)
    {

        $module = Modules::where('id',$modules)->first();
        return view('modules.module-edit',compact('module'));
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
      ]);
      
      if($request->file('image') != ''){
          $image = $request->file('image');

          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('moduleAssets'), $new_name);
      }else{
        $new_name = $request->oldimage;
      }

      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'category'         =>   $request->category,
          'html'             =>   utf8_encode($request->html),
          'image'            =>   $new_name,
          'themeid'          =>   $request->themeid,
      );

      Modules::whereId($id)->update($form_data);

        return redirect('modules/'.$request->themeid)->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Modules::find($id)->delete();

      return redirect()->back()->with('success', 'Theme has been deleted!!');
    }
}
