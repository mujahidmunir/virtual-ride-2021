<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function City($id)
    {
        $data = City::whereProvinceId($id)->get();
        return response()->json($data);
    }

    public function District($id)
    {
        $data = District::whereCityId($id)->get();
        return response()->json($data);
    }

    public function Village($id)
    {
        $data = Village::whereDistrictId($id)->get();
        return response()->json($data);
    }
}
