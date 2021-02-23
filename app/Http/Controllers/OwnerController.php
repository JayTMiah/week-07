<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\OwnerRequest;


class OwnerController extends Controller
{
    public function index()
    {
        return view("owners/index", ["owners" => Owner::all()]);
    }

    public function create()
    {
        return view("owners/form");
    }

    // accept the Request object
    // this gives us access to the submitted data
    public function createPost(OwnerRequest $request)
    {
        // get all of the submitted data
        $data = $request->all();

        // create a new owner, passing in the submitted data
        $owner = Owner::create($data);

        // redirect the browser to the new owner
        return redirect("/owners/{$owner->id}");
    }

    public function show(Owner $owner) 
    {
        return view("show", ["owner" => $owner]); 
    }
}
