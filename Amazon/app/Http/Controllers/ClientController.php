<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.new');
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = request('name');
        $client->phone = request('phone');
        $client->b_date = request('b_date');
        $client->address = request('address');
        $client->city_id = request('city_id');
        $client->save();
        // $client->name = $request->('name');

        // ******* File Upload ******
        $img = $request->file('image');
        $ext =  $img->getClientOriginalExtension();
        $location = "public/clients/";
        $filename = $client->id . "-" . Date("Y-m-d-h-i-s") . "." . $ext;
        $img->storeAs($location, $filename);

        $client->image = $filename;
        $client->save();
        // return $img->getClientOriginalName(); show file name
        // img -> getSize(); show file size in bytes
        // img -> getMimeType(); show file type
        // $_FILES["IMAGE"]["TEMP_NAME"];
        // $_FILES


        return redirect('/clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update($id)
    {
        $client = Client::find($id);
        $client->name = request('name');
        $client->phone = request('phone');
        $client->address = request('address');
        $client->b_date = request('b_date');
        $client->city_id = request('city_id');
        $client->save();
        return redirect('/clients');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }

    public function index()
    {
        $client = Client::all();
        return view('clients.list', compact('client'));
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
