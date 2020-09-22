<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;
use App\Themes;
use App\Pages;
use DB;
use mysql_xdevapi\Result;
use Illuminate\Support\Facades\Config;
use Session;

class SitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Sites::latest()->paginate(24);

        return view('sites.site-list',compact('sites'))
            ->with('i', (request()->input('page', 1) - 1) * 24);
        // return view('sites.module-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['themeid'] = $id;
        $themes = Themes::latest()->paginate(120);

        return view('sites.site-add',compact('themes'))
            ->with('i', (request()->input('page', 1) - 1) * 120);

        //return view('sites.site-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
      //     'name' => 'required',
      //     'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      // ]);
      if($request->file('image') != ''){
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('siteAssets'), $new_name);
      }else{
        $new_name = '';
      }
      // echo '<pre>';
      // print_r($request->all()); exit;
      $settings = array();
      if(!empty($request->input('module'))){
      foreach ($request->input('module') as $modulename) {
        $groupname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($modulename));
      // echo '<pre>';
      // print_r($request->input('settings')[$groupname]); exit;
      if(!empty($request->file('settingfile')[$groupname])){
        foreach ($request->file('settingfile')[$groupname] as $key=>$file) {
          // print_r($key); exit;
          $settingifle = $request->file('settingfile')[$groupname][$key];
          //
          $filename = $settingifle->getClientOriginalName();
          $settingifle->move(public_path('siteAssets'), $filename);
          $settings['files'][$groupname] = $settingifle->getClientOriginalName();
        }
      }
      $settings['settings'][$groupname] = $request->input('settings')[$groupname];
      $settings['modulename'][$groupname] = $modulename;
      }
      // code...
    }

      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'url'              =>   $request->url,
          'logo'             =>   $new_name,
          'active'           =>   (isset($request->active) ? $request->active : ''),
          'apikey'           =>   $request->apikey,
          'apisecret'        =>   $request->apisecret,
          'apiemail'         =>   $request->apiemail,
          'apipassword'      =>   $request->apipassword,
          'theme'            =>   (isset($request->theme_name) ? $request->theme_name : ''),
          'setting'          =>   json_encode($settings),
          'platform'         =>   (isset($request->platforms) ?  $request->platforms : ''),
      );
        $form_send = json_encode($form_data);


        $ch = curl_init(config('constants.options.ApiUrl')."/site");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $form_send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($form_send))
        );

        $result = curl_exec($ch);

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
            return $error_msg;
            // return redirect('sites')->with('error', 'Server Error');
        }
        curl_close($ch);

        $site_obj = new Sites();
        $site_obj->fill($form_data);
        $site_obj->exc_site_id = $result;
        $site_obj->save();

        Session::flash('success','Site created successfully!');

        return url('sites');

    }


    public function gettheme ($id){
       // echo $id; exit;
      $data['setting'] = DB::table('themes')->where('id', $id)->pluck('setting');
      // print_r($data['setting']); exit;
      return view('widgets.themeSetting', $data)->render();

    }

    public function duplicate ($id){
      // echo 'sdfsdfs'; exit;
      $sites = Sites::find($id);
      $newSite = $sites->replicate();
      $newSite->save();
      return redirect('sites')->with('success', 'Duplicate Site Created Successfully');
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
    public function edit(Sites $site)
    {
        $setting = DB::table('themes')->where('id', $site->theme)->pluck('setting');

        $themes  = DB::table('themes')->select(array('name as themename','id as themeid'))->get();
        $pages   = Pages::where('siteid', $site->id)->latest()->paginate(25);
        // print_r($themes); exit;
        return view('sites.site-edit',compact('site','setting','themes','pages'));
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

      $settings = array();
      if($request->input('module')){
          foreach ($request->input('module') as $modulename) {
              $groupname = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($modulename));

              if(!empty($request->file('settingfile')[$groupname])){

                  foreach ($request->file('settingfile')[$groupname] as $key=>$file) {
                      // print_r($key); exit;
                      $settingifle = $request->file('settingfile')[$groupname][$key];
                      //
                      $filename = $settingifle->getClientOriginalName();
                      $settingifle->move(public_path('siteAssets'), $filename);
                      $settings['files'][$groupname] = $settingifle->getClientOriginalName();
                  }
              }
              $settings['settings'][$groupname] = $request->input('settings')[$groupname];
              $settings['modulename'][$groupname] = $modulename;
              // code...
          }
      }

      $form_data = array(
          'name'             =>   $request->name,
          'description'      =>   $request->description,
          'url'              =>   $request->url,
          'logo'             =>   $new_name,
          'apikey'           =>   $request->apikey,
          'apisecret'        =>   $request->apisecret,
          'apiemail'         =>   $request->apiemail,
          'apipassword'      =>   $request->apipassword,
          // 'theme'            =>   $request->theme_name,
          // 'setting'          =>   json_encode($settings),
          'platform'         =>   $request->platforms,
      );

      $form_send = json_encode($form_data);
        $ch = curl_init(config('constants.options.ApiUrl')."/updateSite/".$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $form_send);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($form_send))
        );

        $result = curl_exec($ch);
        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
            return redirect('sites')->with('error', 'Server Error');
        }
        curl_close($ch);

        Sites::whereId($id)->update($form_data);
      return redirect('sites')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $site = Sites::where(['id' => $id])->first();
        
        $ch = curl_init(config('constants.options.ApiUrl')."/deleteSite/".$site->exc_site_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
        ));

        $result = curl_exec($ch);

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
            return redirect()->back()->with('error', 'Server Error. ');
        }
        curl_close($ch);

        Sites::find($id)->delete();
        return redirect()->back()->with('success', 'Theme has been deleted!!');
    }
}
