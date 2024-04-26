<?php

// Inside AccessoriesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessory;

class AccessoriesController extends Controller
{
    public function index()
    {
        return view('accessories');
    }

    public function sell(Request $request)
    {
        $request->validate([
            'item' => 'required',
            'price' => 'required',
            'contact' => 'required',
        ]);

        // Save the sell information to the database
        Accessory::create([
            'item' => $request->item,
            'price' => $request->price,
            'contact' => $request->contact,
        ]);

        return redirect()->back()->with('success', 'Item listed for sale successfully!');
    }

    public function showItemsForSale()
    {
        // Fetch all items for sale from the database
        $itemsForSale = Accessory::all();

        // Pass the items to the view
        return view('items_for_sale', compact('itemsForSale'));
    }
}
// In AccessoriesController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessory;

