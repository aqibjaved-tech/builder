<?php

namespace App\Http\Controllers;

use App\Modules;
use App\Sites;
use Illuminate\Http\Request;
use App\Pages;
use Carbon\Carbon;
use DB;
use URL;
use Illuminate\Support\Facades\Config;
use Session;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     
     public function edit_page(){
        $fileName = $_POST;

return $fileName;

        //sanitize, remove double dot .. and remove get parameters if any
        $fileName = __DIR__ . '/' . preg_replace('@\?.*$@' , '', preg_replace('@\.{2,}@' , '', preg_replace('@[^\/\\a-zA-Z0-9\-\._]@', '', $fileName)));
        $html = $_POST['html'];

        if (file_put_contents($fileName, $html))
            echo $fileName;
        else
            echo 'Error saving file '  . $fileName;

      }

    public function index($siteid)
    {
        $data['pages'] = Pages::where('siteid', $siteid)->latest()->paginate(25);
        $data['siteid'] = $siteid;

        return view('pages.page-list',$data)
            ->with('i', (request()->input('page', 1) - 1) * 25);
        // return view('Pages.module-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($siteid)
    {
        // dd(config('constants.options.develop_site'));
        $site = Sites::where('id', $siteid)->first();
        $data['themes'] = Modules::where('themeid', $site->theme)->get();

        $data['exc_siteid'] = $site->exc_site_id;
        $data['siteid'] = $siteid;

        return view('pages.page-add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $original_name_of_file = str_replace(' ','-',strtolower($request->title));
        $original_name_of_file = preg_replace('/[^A-Za-z0-9\-]/', '', $original_name_of_file);
        $name_of_uploaded_file = $original_name_of_file.'.html';

        // Get Site Information
        // $siteData = get_records_where('sites','name','id',$request->siteid);
        // $row=mysqli_fetch_array($siteData,MYSQLI_ASSOC);
        $siteData = DB::table('sites')->select('name','id')->where('id',$request->siteid)->first();
        //print_r($siteData); exit;
        $sitefoldername = str_replace(' ','-',strtolower($siteData->name)).'-'.$request->siteid;
        $sitefoldername = preg_replace('/[^A-Za-z0-9\-]/', '', $sitefoldername);

        $send_a = $sitefoldername;
        // echo base_path()."/frontend/demo/$sitefoldername/"; exit;
        // Check site folder exist or Create
        if (!file_exists(base_path()."/frontend/demo/$sitefoldername/")) {
            mkdir(base_path()."/frontend/demo/$sitefoldername/", 0777, true);
        }
        // echo base_path()."/frontend/demo/$sitefoldername/assets/"; exit;
        // Check Site Asset folder for images etc...
        if (!file_exists(base_path()."/frontend/demo/$sitefoldername/assets")) {
            mkdir(base_path()."/frontend/demo/$sitefoldername/assets/", 0777, true);
            mkdir(base_path()."/frontend/demo/$sitefoldername/assets/images/", 0777, true);
        }
        // echo $name_of_uploaded_file; exit;
        // check file exist or not
        $FileCounter = 0;
        while (file_exists(base_path()."/frontend/demo/$sitefoldername/".$name_of_uploaded_file)) {
            $FileCounter++;
            $original_name_of_file = str_replace('.html','',$original_name_of_file);
            $name_of_uploaded_file = $original_name_of_file . '_' . $FileCounter . '.html';
        }

        $module = Modules::where('id', $request->module_name)->first();
        // Create Site File
        $titlec = $request->title;
        $contentc = $request->html;
        $moduelc = $module->html;


        //   include URL::to('/').'/frontend/demo/narrow-jumbotron/index.php';

        $htmlfile = fopen(base_path()."/frontend/demo/$sitefoldername/".$name_of_uploaded_file, "w") or die("Unable to open file!");
        $stylefile = fopen(base_path()."/frontend/demo/$sitefoldername/style.css", "w") or die("Unable to open file!");
        $get_html = file_get_contents(URL::to('/').'/frontend/demo/narrow-jumbotron/index.html', false);
        $css = file_get_contents(URL::to('/').'/frontend/demo/narrow-jumbotron/style.css', false);

        $title = str_replace('%title%', $titlec, $get_html);
        $content_f = str_replace('%content%', $contentc, $title);
        $content = str_replace('%module%', $moduelc, $content_f);
        $html = $content;

        file_put_contents(base_path()."/frontend/demo/$sitefoldername/".$name_of_uploaded_file, $html);
        file_put_contents(base_path()."/frontend/demo/$sitefoldername/style.css", $css);

        fclose($htmlfile);
        fclose($stylefile);
        $file_path = "demo/$sitefoldername/".$name_of_uploaded_file;
        // echo $file_path; exit;
        $name_of_folder = "demo/$sitefoldername/";
        $name_of_file = str_replace('.html','',$original_name_of_file);

        if($request->file('image') != ''){
            $image = $request->file('image');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('pageAssets'), $new_name);
        }else{
            $new_name = '';
        }

        $date = Carbon::parse($request->sceduledate)->format('d-m-Y H:i:s');
        $form_data = array(
            'title'             =>   $request->title,
            'type'              =>   $request->type,
            'active'            =>   $request->active,
            'status'            =>   $request->status,
            'siteid'            =>   $request->siteid,
            'image'             =>   $new_name,
            'filepath'          =>   $file_path,
            'filecontent'       =>   $html,
            'filename'          =>   $name_of_file,
            'folderpath'        =>   $name_of_folder,
            'scheduleaction'    =>   $request->scheduleaction,
            'scheduledate'      =>   date("Y-m-d H:i:s",strtotime($date)),
        );

        $curl_form_data = array(
            'title'             =>   $request->title,
            'site'            =>   $request->exc_siteid,
            'source'       =>   $html,
            'description'          =>   $name_of_file,
            'sitefolder'     => $send_a,
            'filename'             =>   $name_of_uploaded_file,
        );


        $form_send = json_encode($curl_form_data);
        $url = config('constants.options.ApiUrl')."/page";
        $header = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($form_send));

        $results = $this->curlPost($url, $form_send,$header);

        $result = json_decode($results);


        $site_pages_form_data = array(
            'file_name'             =>   $name_of_uploaded_file,
            'siteid'            =>   $request->exc_siteid,
            'source'       =>   $html,
            'description'          =>   $name_of_file,
            'site_folder'     => $send_a,
        );

        $add_page_form_send = json_encode($site_pages_form_data);
        $url = config('constants.options.develop_site');
        $header = array(
            'Content-Type: application/json'
        );

        $this->curlPost($url, $add_page_form_send,$header);

        $res = new Pages();
        $res->fill($form_data);
        $res->save();

        Session::flash('success','Page created successfully!');

        return url('pages/index/'.$request->siteid.'/'.$result['id']);
    }

    public function test(Request $request){

        $html = 'ahahah';
        return  $request->all();

    }

    public function duplicate ($id){
        // echo 'sdfsdfs'; exit;
        $Pages = Pages::find($id);
        $newSite = $Pages->replicate();
        $newSite->save();
        return redirect('Pages')->with('success', 'Duplicate Site Created Successfully');
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
    public function edit(Pages $page)
    {
        // print_r($page); exit;
        return view('pages.page-edit',compact('page'));
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
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // print_r($request->file('image')); exit;
        if($request->file('image') != ''){
            $image = $request->file('image');

            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('pageAssets'), $new_name);
        }else{
            $new_name = $request->oldimage;
        }
        $date = Carbon::parse($request->sceduledate)->format('d-m-Y H:i:s');
        $form_data = array(
            'title'             =>   $request->title,
            'type'              =>   $request->type,
            'active'            =>   $request->active,
            'status'            =>   $request->status,
            'siteid'            =>   $request->siteid,
            'image'             =>   $new_name,
            'filepath'          =>   $request->filepath,
            'filecontent'       =>   $request->html,
            'scheduleaction'    =>   $request->scheduleaction,
            'scheduledate'       =>   $date,
        );
        // print_r($form_data); exit;
        Pages::whereId($id)->update($form_data);

        return redirect('pages/index/'.$request->siteid)->with('success', 'Page updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pages = Pages::find($id);
        $frontendurl = Config::get('constants.options.frontendurl');
        $file_path = base_path().$frontendurl.$Pages->folderpath.$Pages->filename.'.html';
        // echo $file_path; exit;
        // echo '<pre>';
        // print_r($Pages); exit;
        unlink($file_path);
        Pages::find($id)->delete();

        return redirect()->back()->with('success', 'Theme has been deleted!!');
    }

    public function curlPost($url, $formdata, $header){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $formdata);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
            return $error_msg;
        }

        curl_close($ch);
        return $result;
    }
}
