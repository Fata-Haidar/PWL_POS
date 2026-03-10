<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga', 
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
            ];
        UserModel::create($data);*/

        /*$data= [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);*/

        /*$User = UserModel::all();
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::find(1);
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::where('level_id', 1)->first();
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::firstWhere('level_id', 1);
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::findOr(20,['username', 'nama'], function(){
        abort(404);
        });
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::findOrFail(1);
        return view('user', ['data' => $User]);*/

        $User = UserModel::where('username', 'manager 9')->firstOrFail();
        return view('user', ['data' => $User]);

        /*$User = UserModel::where('level_id', 2)->count();
        dd($User);
        return view('user', ['data' => $User]);*/
    }

    public function tambah()
    {
        return view('user_tambah');
    }

}
