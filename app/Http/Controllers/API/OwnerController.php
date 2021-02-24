<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;
use App\Http\Resources\API\OwnerListResource;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OwnerListResource::collection(Owner::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();

        // store owner in a variable
        $owner = Owner::create($data)->setTreatment($request->get("treatments"));

        // create Owner with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        return new OwnerResource($owner);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        // just return the owner
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // request is passed in because we ask for it with type hinting
// and the URL parameter is always passed in
    public function update(Request $request, Owner $owner)
    {
        // get the request data
        $data = $request->all();

        $owner->fill($data)->save();

        $owner->setTreatments($request->get("treatments"));

        // return the updated version
        return new OwnerResource($owner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        // delete the owner from the DB
        $owner->delete();

        // use a 204 code as there is no content in the response
        return response(null, 204);
    }
}
