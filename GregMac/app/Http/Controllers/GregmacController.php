<?php

namespace App\Http\Controllers;

use App\Models\Courses;

use Illuminate\Http\Request;
use Exception;

class GregmacController extends Controller
{
    public function index() {
    return view('welcome');
    }

    public function courses(){

        $search = request('search');

        try {
            if($search){
            
            $courses = Courses::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();

            } else {
                $courses = Courses::all();
            }
            
            return view('courses', ['courses'=>$courses]);
        } catch (Exception $e) {
            return view('404');
        }

        
    }

    public function show($id){

        $course = Courses::findOrFail($id);

        return view('showcourse', ['course'=>$course]);
    }

    public function services(){
        return view('services');
    }

    public function about(){
        return view('about');
    }

    public function registerDeveloper(){
        return view('register');
    }
}
