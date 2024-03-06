<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function employe()
    {
        $data = array(
            'title' => 'Employe'
        );
        return view('admin.employe',$data);
    }


}