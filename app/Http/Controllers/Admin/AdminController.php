<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewAutomatedReceiver;
use App\Http\Requests\Admin\NewReceiver;
use App\Http\Requests\UpdateUserRole;
use App\Models\AutomatedReceiver;
use App\Models\DisabledUser;
use App\Models\Package;
use App\Models\Pair;
use App\Models\Payer;
use App\Models\Receiver;
use App\Models\Role;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $users = User::all()->count();
        $r_done = Receiver::where('status',2)->count();
        $r_pending = Receiver::where('status',0)->count();
        $r_processing = Receiver::where('status',1)->count();
        $p_done = Payer::where('finished', 1)->count();
        $p_processing = Payer::where('status', 1)->count();
        return view('admin.index',
            compact('users','r_pending','r_done','r_processing','p_done','p_processing')
        );
    }

    public function apiTokens()
    {
        return view('admin.apitokens.index');
    }

    public function roleIndex()
    {
        $data = User::paginate(20);
        $roles = Role::all();
        return view('admin.roles.index', ['data'=>$data, 'roles'=>$roles]);
    }


    public function postRole(UpdateUserRole $request)
    {
        $request->save();
        flash('Roles saved', 'success');
        return redirect()->back();
    }


    public function Pairs()
    {
        $data = Receiver::with('pairs', 'user')->where('status', '>', 0)->paginate(20);
        //dd($data);
        return view('admin.pairs.index', compact('data'));
    }


    public function PostPairs()
    {

    }


    public function automatedReceivers(User $user)
    {
        $data = AutomatedReceiver::select()->with('user','package')->get();
        $admins = Role::where('type', 'admin')->with('users')->first();
        $packages = Package::all();
        return view('admin.automated-receivers.index', compact('data', 'admins', 'packages'));
    }

    public function PostAutomatedReceivers(NewAutomatedReceiver $automatedReceiver)
    {
        $automatedReceiver->save();
        return redirect()->back();
    }


    public function Receivers()
    {
        $data = Receiver::with('user', 'packages')->paginate(20);
        $users = User::select(['id', 'username', 'email'])->get();
        $packages = Package::all();
        return view('admin.receivers.index', compact('data', 'users', 'packages'));
    }


    public function PostReceivers(NewReceiver $request)
    {
        $request->save();
        return redirect()->back();
    }


    public function DelReceiver($id)
    {
        $row = Receiver::where('id', $id)->where('status', 0)->first();
        if ($row):
            $row->delete();
            flash()->overlay('Receiver deleted');
        endif;
        return redirect()->back();
    }


    public function Users()
    {
        $data = User::with('userDetail')->paginate(20);
        return view('admin.users.index', compact('data'));
    }


    public function DisabledUsers()
    {
        $data = DisabledUser::with('user')->latest()->paginate(20);
        return view('admin.disabled-users.index', compact('data'));
    }


    public function PostDisabledUsers()
    {

    }


    public function ApiDefaulters()
    {
        return Payer::where('pairing_result', 1)->with('user', '')->get();
    }
    public function defaulters()
    {
        $data = Payer::where('pairing_result', 1)->with('user')->get();
        //return $data;
        return view('admin.defaulters.index');
    }


    public function SearchUser()
    {

    }


    public function Packages()
    {
        $data = Package::all();
        return view('admin.packages.index', compact('data'));
    }
}
