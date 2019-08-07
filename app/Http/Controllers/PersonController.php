<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;

class PersonController extends Controller
{
    /** 
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     * @return PersonResourceCollection
     */

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }
}
