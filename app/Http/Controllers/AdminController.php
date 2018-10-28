<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Register;

class AdminController extends Controller
{

    /**
     * Admin Panel dashboard.
     *
     * @return Response
     */
    public function home(Request $request)
    {
        $yr_1 = Register::where('year', '1')->count();
        $yr_2 = Register::where('year', '2')->count();
        $yr_3 = Register::where('year', '3')->count();
        $yr_4 = Register::where('year', '4')->count();
        return view('AdminPanel.dashboard', ['yr_1' => $yr_1, 'yr_2' => $yr_2, 'yr_3' => $yr_3, 'yr_4' => $yr_4]);
    }

    /**
     * To generate printable attendence sheetd.
     *
     * @return Response
     */
    public function print(Request $request)
    {
        $data = Register::select('name', 'admission_no', 'year')->orderBy('name')->get();
        return view('AdminPanel.print_data', ['data' => $data]);
    }

    /**
     * Reset login credentials.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function reset(Request $request)
    {
        $this -> validate($request,[
            'username' => 'required|max:20',
            'password' => 'required|min:6|max:20',
            'password2' => 'required|min:6|max:20',
        ]);

        if($request->input('password') != $request->input('password2'))
            return back()->with(['msg' => 'Password do not match.', 'class' => 'alert-danger'])->withInput($request->all);

        $user = User::where('id', Auth::User()->id)->update([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'new' => '0',
        ]);

        Auth::logout();
        return redirect('admin')->with(['msg' => 'You had successfully updated your login credentials. Please login again with your new details', 'class' => 'alert-success']);
    }
}
