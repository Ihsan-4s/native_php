<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::latest()->get();
        return view('home', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'nullable',
            'timezone' => 'required',
        ]);

        TeamMember::create($request->all());

        return redirect('/');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect('/');
    }
}
