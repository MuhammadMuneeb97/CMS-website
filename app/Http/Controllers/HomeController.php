<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Data;
use App\Models\Team;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DataRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }

   
    public function addImage()
    {
        
        return view('slider');
        
    }

    public function storeImage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $slider = new Image();
        $slider->image = $imageName;
        $slider->save();
        return back()->with('image_added','Image record has been inserted successfully!!');
    }

    public function allImages()
    {
        $slider = Image::all();
        return view('all-images',compact('slider'));
    }

    public function editImage($id)
    {
        $slider = Image::find($id);
        return view('edit-image',compact('slider'));
    }

    public function updateImage(Request $request)
    {
        $image = $request->file('file');
        
        $img= Image::find($request->id);
        $imageName = $img['image'];
        if(!empty($image)):
            $image_path =public_path()."/images/".$imageName;
            if(File::exists($image_path)) {  
                File::delete($image_path);
        }
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$imageName);

        endif;
        $slider = Image::find($request->id);
        $slider->image = $imageName;
        $slider->save();
        return back()->with('image-update','Image changed successfully!!');
    }

    public function deleteImage($id)
    {
        $slider = Image::find($id);
        unlink(public_path('images').'/'.$slider->image);
        $slider->delete();
        return back()->with('Image_deleted','Image has been deleted successfully!!');

    }

    public function addData()
    {
        return view('gift');
    }

    public function storeData(Request $request)
    {
        
        $text = $request->text;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('datai'),$imageName);

        $student = new Data();
        $student->text = $text;
        $student->image =$imageName;
        $student->save();
    }

    public function allData()
    {
        $students = Data::all();
        return view ('all-data',compact('students'));
    }

    public function editData($id)
    {
        $student = Data::find($id);
        return view('edit-data',compact('student'));
    }

    public function updateData(Request $request)
    {
        $text = $request->text;
        $image = $request->file('file');
        $img= Data::find($request->id);
        $imageName = $img['image'];
        if(!empty($image)):
            $image_path =public_path()."/datai/".$imageName;
            if(File::exists($image_path)) {  
                File::delete($image_path);
        }
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('datai'),$imageName);

        endif;
        $student = Data::find($request->id);
        $student->text = $text;
        $student->image = $imageName;
        $student->save();
        return back()->with('data_updated','Data updated successfully!!');
    }

    public function addTeam()
    {
        return view('addteam');
    }

    public function storeTeam(Request $request)
    {
        $name = $request->name;
        $text = $request->text;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('teamimage'),$imageName);

        $employe = new Team();
        $employe->name = $name;
        $employe->text = $text;
        $employe->image = $imageName;
        $employe->save();
        return back()->with('team_added','Team record has been inserted successfully!!');
    }

    public function teams()
    {
        $employes = Team::all();
        return view('all-team',compact('employes'));
    }

    public function editTeam($id)
    {
        $employe = Team::find($id);
        return view('edit-team',compact('employe'));
    }

    public function updateTeam(Request $request)
    {
        $name = $request->name;
        $text = $request->text;
        $image = $request->file('file');
        $img= Team::find($request->id);
        $imageName = $img['image'];
        if(!empty($image)):
            $image_path =public_path()."/teamimage/".$imageName;
            if(File::exists($image_path)) {  
                File::delete($image_path);
        }
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('teamimage'),$imageName);
    endif;
        $employe = Team::find($request->id);
        $employe->name = $name;
        $employe->text = $text;
        $employe->image = $imageName;
        $employe->save();
        return back()->with('team_updated','Team record has been updated successfully!!');
    }

    public function deleteTeam($id)
    {
        $employe = Team::find($id);
        unlink(public_path('teamimage').'/'.$employe->image);
        $employe->delete();
        return back()->with('team_deleted','Team record has been deleted successfully!!');
    }
}
