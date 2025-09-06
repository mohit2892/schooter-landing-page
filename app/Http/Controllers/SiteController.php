<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'message' => 'nullable'
        ]);

        Application::create($request->all());

        return back()->with('success', 'Your application has been submitted successfully!');
    }
}
