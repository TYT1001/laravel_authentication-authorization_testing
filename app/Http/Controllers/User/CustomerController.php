<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function home() {
        return "This is home";
    }
    public function about() {
        return "This is about";
    }
    public function service() {
        return "This is service";
    }
}
