<?php

namespace App\Http\Controllers;

use App\Models\ItemCondition;
use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemConditionController extends Controller
{
    public function index()
    {
        $itemConditions = ItemCondition::all();
        $itemTypes = ItemType::all();

        return view('shared-view', compact('itemConditions', 'itemTypes'));
    }

    public function create()
    {
        // Display the item condition/item type creation form (adjust as needed)
        return view('shared-view.create');
    }

    public function store(Request $request)
    {
        // Store a new item condition/item type in the database (adjust as needed)
        if ($request->input('item_type')) {
            ItemType::create($request->all());
        } else {
            ItemCondition::create($request->all());
        }

        return redirect()->route('item-conditions.index')->with('success', 'Item created successfully');
    }

    public function edit($id)
    {
        // Display the edit form for a specific item condition/item type (adjust as needed)
        $item = ItemCondition::find($id) ?? ItemType::find($id);
        if (!$item) {
            // Handle item not found
        }

        return view('shared-view.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Update an existing item condition/item type in the database (adjust as needed)
        $item = ItemCondition::find($id) ?? ItemType::find($id);
        if (!$item) {
            // Handle item not found
        }
        
        $item->update($request->all());

        return redirect()->route('item-conditions.index')->with('success', 'Item updated successfully');
    }

    public function destroy($id)
    {
        // Delete a specific item condition/item type (adjust as needed)
        $item = ItemCondition::find($id) ?? ItemType::find($id);
        if (!$item) {
            // Handle item not found
        }

        $item->delete();

        return redirect()->route('item-conditions.index')->with('success', 'Item deleted successfully');
    }
}
