<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganisationRequest;
use App\Http\Resources\Organisation\OrganisationResource;
use App\Http\Resources\Organisation\OrganisationCollection;
use App\Model\Organisation;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrganisationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return OrganisationCollection::collection(Organisation::paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(OrganisationRequest $request)
    {
        $organisation = new Organisation;
        $organisation->name = $request->name;
        $organisation->detail = $request->description;
        $organisation->image = $request->image;
        $organisation->address = $request->address;
        $organisation->phone = $request->phone;
        $organisation->email = $request->email;
        $organisation->longitude = $request->longitude;
        $organisation->latitude = $request->latitude;

        $organisation->save();
        return response([
            'data' => new OrganisationResource($organisation)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Organisation  $organisation
     * @return OrganisationResource
     */
    public function show(Organisation $organisation)
    {
        return new OrganisationResource($organisation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        $request['detail'] = $request->description;
        unset($request['description']);
        $organisation->update($request->all());

        return response([
            'data' => new OrganisationResource($organisation)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        $organisation->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
