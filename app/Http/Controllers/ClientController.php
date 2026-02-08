<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
  public function index(Client $clients)
  {
    return view("clients.index", [
        'clients' => Client::latest()->paginate(10)
    ]);
  }

    public function show(Client $client)
    {
        return view("clients.show", [
            'client' => $client
        ]);
    }

    public function edit(Client $client)
    {
        return view('clients.edit', [
           'client' => $client
        ]);
    }

    public function update(UpdateClientRequest $request,  Client $client)
    {
        $client->update($request->validated());


        return redirect("/client/" . $client->id);
    }

    public function create()
    {
        return view("clients.create");
    }

    public function store(StoreClientRequest $request)
    {
        Client::create($request->validated());

        return redirect("/clients");
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect("/clients");
    }
}
