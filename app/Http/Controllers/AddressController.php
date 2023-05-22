<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use Illuminate\Support\Facades\Auth;




class AddressController extends Controller
{

    public function showAddresses()
    {
        $userId = Auth::id(); // Get the ID of the currently logged-in user

        // Pass the user ID to the route using route parameters
        return redirect()->route('address.index', ['userId' => $userId]);

        // Alternatively, pass the user ID as a query string parameter
        // return redirect()->route('address.index')->with('userId', $userId);
    }


public function create()
{
    return view('address.create');
}

public function store(Request $request)
{
    // Validate the request
    $userId = Auth::id();
    $validatedData = $request->validate([
        // 'username' => 'required',
        'description' => 'required',

    ]);
    $address=new Address();
    $address->username=$userId;
    $address->address=$request->description;

    $address->save();



    return redirect()->route('address.index')->with('success', 'address added successfully.');
}

public function index()
{
    // $address = Address::all();
    $userid = Auth::user()->id; // Assuming you have authenticated users and 'id' field represents the user's ID

$address = Address::where('username', $userid)->get();

    return view('address.index', ['address' => $address]);
}
}
