<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Group;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showGroup(Request $request)
    {
        $names['groups'] = Group::select('groupname','id')->get();
        $namesCount = Group::count();

        return view('group')->with($names);
    }

    public function callName(Request $request)
    {
        dd(\Arr::except($request->post(),'_token'));
        // $call = Calllist::create()
    }
}
