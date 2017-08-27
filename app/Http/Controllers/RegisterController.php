<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Register;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register(Request $request)
    {
        $data = $request->input();
        $result = [];

        $validator = Validator::make(
            $data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:register',
            'admission_no' => 'required|max:255|unique:register',
            'mobile' => 'required|max:10|min:10',
            'year' => 'required',
            ]
        );

        if ($validator->fails()) {
            return Response::json(
                [
                "status" => false,
                "errors" => $validator->errors()
                ]
            );
        }

        $register = new Register;
        $register->name = $data['name'];
        $register->email = $data['email'];
        $register->admission_no = $data['admission_no'];
        $register->mobile = $data['mobile'];
        $register->year = $data['year'][0];

        if($register->save())
        {
            $result['status'] = True;
        }

        return response()->json($result);
    }

    public function verify(Request $request)
    {
        $data = $request->input();
        $result = [];

        foreach ($data as $key => $value) {
            if ($key == "email") {
                $input_against = ['email' => 'required|email|max:255|unique:register'];
                $input = [$key => $value];

                return $this->valid($input, $input_against);
            } elseif ($key == "admission_no") {

                $input_against = ['admission_no' => 'required|max:255|unique:register'];
                $input = [$key => $value];

                return $this->valid($input, $input_against);
            }
        }
    }

    public function valid($input, $input_against)
    {
        $validator = Validator::make(
            $input, $input_against
        );

        if ($validator->fails()) {
            return Response::json(
                [
                "status" => false,
                "errors" => $validator->errors()
                ]
            );
        }

        return Response::json(
            [
            "status" => true
            ]
        );
    }

    //
}
