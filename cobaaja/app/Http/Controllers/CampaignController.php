<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index() {
    $campaigns = Campaign::all();
    return view('campaigns.index', compact('campaigns'));
}

public function create() {
    return view('campaigns.create');
}

public function store(Request $request) {
    Campaign::create($request->all());
    return redirect()->route('campaigns.index')->with('success', 'Data berhasil ditambahkan');
}

public function edit($id) {
    $campaign = Campaign::findOrFail($id);
    return view('campaigns.edit', compact('campaign'));
}

public function update(Request $request, $id) {
    $campaign = Campaign::findOrFail($id);
    $campaign->update($request->all());
    return redirect()->route('campaigns.index')->with('success', 'Data berhasil diupdate');
}

public function destroy($id) {
    Campaign::destroy($id);
    return redirect()->route('campaigns.index')->with('success', 'Data berhasil dihapus');
}
}