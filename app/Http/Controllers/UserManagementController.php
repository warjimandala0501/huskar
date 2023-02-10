<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    //
    function index(){
        $members = User::all();
        return $members;
    }
    public function delete($id)
    {
        $members = User::find($id);
        $members->delete();
        
        return $members;
    }
    
}
