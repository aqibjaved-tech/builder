<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(25);

        return view('users.users-list',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 25);
        // return view('users.module-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['themeid'] = $id;
        return view('users.user-add');
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
          'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if($request->file('image') != ''){
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('siteAssets'), $new_name);
      }else{
        $new_name = '';
      }

      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'url'              =>   $request->url,
          'logo'             =>   $new_name,
          'active'           =>   $request->active,
          'apikey'           =>   $request->apikey,
          'apisecret'        =>   $request->apisecret,
          'apiemail'         =>   $request->apiemail,
          'apipassword'      =>   $request->apipassword,
      );

      User::create($form_data);

      return redirect()->route('users.index')
                      ->with('success','Theme created successfully.');
    }

    public function duplicate ($id){
      // echo 'sdfsdfs'; exit;
      $users = User::find($id);
      $newSite = $users->replicate();
      $newSite->save();
      return redirect('users')->with('success', 'Duplicate Site Created Successfully');
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
    public function edit(users $site)
    {
        return view('users.site-edit',compact('site'));
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
          'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      // print_r($request->file('image')); exit;
      if($request->file('image') != ''){
          $image = $request->file('image');

          $new_name = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('siteAssets'), $new_name);
      }else{
        $new_name = $request->oldimage;
      }
      // echo $new_name; exit;
      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'url'              =>   $request->url,
          'logo'             =>   $new_name,
          'apikey'           =>   $request->apikey,
          'apisecret'        =>   $request->apisecret,
          'apiemail'         =>   $request->apiemail,
          'apipassword'      =>   $request->apipassword,
      );

      User::whereId($id)->update($form_data);

        return redirect('users')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::find($id)->delete();

      return redirect()->back()->with('success', 'Theme has been deleted!!');
    }
}
