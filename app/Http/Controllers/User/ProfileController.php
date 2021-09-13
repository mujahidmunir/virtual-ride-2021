<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Nationality;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('user.profile.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nik' => 'required|unique:users',
            'ig_account' => 'unique:users',
            'digicash' => 'unique:users',
        ]);

        $prov = $request->input('prov');
        $city = $request->input('city');
        $district = $request->input('dist');
        $village = $request->input('vill');
        $address = $request->input('address');

        if ($request->input('agree') == false){
            $prov = $request->input('dom_prov');
            $city = $request->input('dom_city');
            $district = $request->input('dom_dist');
            $village = $request->input('dom_vill');
            $address = $request->input('dom_address');
        }


        User::whereId(Auth::user()->id)->updateOrCreate([
            'id' => Auth::user()->id
        ],[
            'name' => $request->input('name'),
            'whatsapp' => $request->input('whatsapp'),
            'digicash' => $request->input('digicash'),
            'nik' => $request->input('nik'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'prov_id' => $prov,
            'city_id' => $city,
            'dist_id' => $district,
            'vill_id' => $village,
            'address' => $address,
            'ig_account' => $request->input('ig_account')
        ]);

        Nationality::updateOrCreate([
            'user_id' => Auth::user()->id,
        ], [
            'province_id' => $request->input('prov'),
            'city_id' => $request->input('city'),
            'district_id' => $request->input('dist'),
            'village_id' => $request->input('vill'),
            'address' => $request->input('address'),
        ]);








    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.profile.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
