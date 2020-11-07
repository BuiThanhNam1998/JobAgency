<?php

namespace App\Http\Controllers\quantri;

use App\Http\Requests\QuanTriVien\UserUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\vaitro;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $users = \App\User::query();
        $filter_mail = $request->get('filter_mail');
        $filter_vaitro = $request->get('filter_vaitro');
        $filter_name = $request->get('filter_name');
        if($request->has('filter_mail') && empty($request->get('filter_mail')) == false) {
            $users = $users->where('email', 'like', "%$filter_mail%");
        }

        if($request->has('filter_name') && empty($request->get('filter_name')) == false) {
            $users = $users->where('name', 'like', "%$filter_name%");
        }

        if($request->has('filter_vaitro')&& empty($request->get('filter_vaitro')) == false) {
            $users = $users->where('vaitro_id', '=', $filter_vaitro);
        }


        $users = $users->get();
        $vaitros = vaitro::query()->get();
        return view('quantri.users.index',
            compact('users',
            'vaitros','filter_name','filter_mail','filter_vaitro'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaitros=vaitro::query()->get();
        return view('quantri.users.create',compact('vaitros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $name = $request->get('name');
        $email= $request->get('email');
        $password=$request->get('password');
        $vaitro_id=$request->get('vaitro_id');
        $usermoi = \App\User::query()->create([
            'name' => $name,
            'email'=> $email,
            'password'=>bcrypt($password),
            'vaitro_id'=>$vaitro_id,
        ]);
        return redirect()->route('quantri.users.index');
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
        $user = \App\User::query()->find($id);
        $vaitros = vaitro::query()->get();
        return view('quantri.users.edit',compact('user','vaitros'));
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
        $name = $request->get('name');
        $email = $request->get('email');
        $password=$request->get('password');
        $vaitro_id = $request->get('vaitro_id');
        $user = \App\User::query()->find($id);
        $user -> update([
//           'name'=>$name,
//            'email'=>$email,
//            'password'=>bcrypt($password),
            'vaitro_id'=>$vaitro_id
        ]);
        return redirect()->route('quantri.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       \App\User::query()->find($id)->delete();
        return redirect()->route('quantri.users.index');
    }
}
