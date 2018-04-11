<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceUpdateRequest;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
use JD\Cloudder\Facades\Cloudder;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.index',compact('services'));
    }

    /**
      * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        //-----------------Featured Img Upload -------------------- //
        $featured_img = $request->file('featured_img');

        $featured_img_name = pathinfo($featured_img->getClientOriginalName(), PATHINFO_FILENAME);
        $featured_img_path = $featured_img->getRealPath();

        Cloudder::upload($featured_img_path,Carbon::now()->timestamp.$featured_img_name);
        $featured_img_cloud_id = Cloudder::getPublicId();


        //-----------------Page Img Upload -------------------- //
        $page_img = $request->file('page_img');

        $page_img_name = pathinfo($page_img->getClientOriginalName(), PATHINFO_FILENAME);
        $page_img_path = $page_img->getRealPath();

        Cloudder::upload($page_img_path,Carbon::now()->timestamp.$page_img_name);
        $page_img_cloud_id = Cloudder::getPublicId();


        //-----------------Service Model Creation -------------------- //
        $service = new Service();
        $service->name = $request->get('service_name');
        $service->icon = $request->get('service_icon');
        $service->short_description = $request->get('service_short_description');
        $service->content = $request->get('service_content');
        $service->featured_img = $featured_img_cloud_id;
        $service->featured_img_alt = $featured_img_name;
        $service->page_img = $page_img_cloud_id;
        $service->page_img_alt = $page_img_name;
        $service->request_type = $request->get('request_type');
        $service->slug = $request->get('service_slug');
        $service->status = $request->get('service_status');



        $sub_services = $request->get('sub_service');

        $service_count = 0;
        foreach($sub_services as $single_service){
            $service_count++;
        }
        $sub_service_arr = [
            'services' => $sub_services,
            'service_count' => $service_count
        ];

        $service->breakdown_services = $sub_service_arr;

        $service->save();

        return redirect()->route('services.index')->with('success','Service Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {

        $test = $request->all();

        dd($test);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect()->back()->with('success','Service Deleted Succesfully');
    }

    public function status_change(Request $request, Service $service){

        $status = $request->get('checkbox');

        if($status === "published"){
            $service->status = 'published';
            $service->save();
        }elseif($status == 'draft'){
            $service->status = 'draft';
            $service->save();
        }

        return ucfirst($service->status);


    }
}
