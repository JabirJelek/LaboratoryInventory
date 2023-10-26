<?php
namespace App\Http\Controllers;

use App\Models\ItemType;
use App\Models\ItemCondition;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    public function index()
    {
        $itemConditions = ItemCondition::all();
        $itemTypes = ItemType::all();
    
        return view('shared-view', compact('itemConditions', 'itemTypes'));
    }
    
    public function create()
    {
        // Display the item type creation form
        return view('item-types.create');
    }

    public function store(Request $request)
    {
        // Store a new item type in the database
        ItemType::create($request->all());
        return redirect()->route('item-types.index')->with('success', 'Item type created successfully');
    }

    public function edit(ItemType $itemType)
    {
        // Display the edit form for a specific item type
        return view('item-types.edit', compact('itemType'));
    }

    public function update(Request $request, ItemType $itemType)
    {
        // Update an existing item type in the database
        $itemType->update($request->all());
        return redirect()->route('item-types.index')->with('success', 'Item type updated successfully');
    }

    public function destroy(ItemType $itemType)
    {
        // Delete a specific item type
        $itemType->delete();
        return redirect()->route('item-types.index')->with('success', 'Item type deleted successfully');
    }
}
