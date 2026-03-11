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

        /*$User = UserModel::where('username', 'manager 9')->firstOrFail();
        return view('user', ['data' => $User]);*/

        /*$User = UserModel::where('level_id', 2)->count();
        return view('jumlah_pengguna', ['data' => $User]);*/

        /*$User = UserModel::firstOrCreate(
            [
                'username' => 'manager22', 
                'nama' => 'Manager Dua Dua',
                'password' => Hash::make('123456'),
                'level_id' => 2
                ],
        );
            return view('user', ['data' => $User]);*/

            /*$User = UserModel::firstOrNew(
            [
                'username' => 'manager', 
                'nama' => 'Manager',
                'password' => Hash::make('123456'),
                'level_id' => 2
                ],
        );
        $User->save();
            return view('user', ['data' => $User]);*/

        /*$User = UserModel::create(
            [
                'username' => 'manager55',
                'nama' => 'Manager55',
                'password' => Hash::make('12345'),
                'level_id' => 2
                ],
        );
        $User->username = 'manager56';
        $User->isDirty();
        $User->isDirty('username');
        $User->isDirty('nama');
        $User->isDirty('nama', 'username');

        $User->isClean();
        $User->isClean('username');
        $User->isClean('nama');
        $User->isClean('nama', 'username');

        $User->save();

        $User->isDirty();
        $User->isClean();
        dd($User->isDirty());*/

        $User = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2
                ],
        );
        $User->username = 'manager12';

        $User->save();

        $User->wasChanged();
        $User->wasChanged('username');
        $User->wasChanged('username', 'level_id');
        $User->wasChanged('nama');
        dd($User->wasChanged('nama', 'username'));


        


    }

    public function tambah()
    {
        return view('user_tambah');
    }

}
