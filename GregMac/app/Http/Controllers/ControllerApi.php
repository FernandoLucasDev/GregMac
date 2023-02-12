<?php

namespace App\Http\Controllers;

use App\Models\Courses as Courses;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ControllerApi extends Controller
{
    public function getCoursesList() {
        $data = Courses::all();
        $data = json_encode($data);
        
        return $data;
    }
}
