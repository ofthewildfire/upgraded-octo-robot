<?php

namespace App\Http\Controllers;

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
}
