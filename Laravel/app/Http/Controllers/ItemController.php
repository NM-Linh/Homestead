<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ItemController extends Controller
{
    private $item;

    private $user;

    public function __construct(Item $item)
    {
        $this->item = $item;
        $this->user = Auth::user();
    }

    public function index()
    {
//        $item = Item::all();
//        if(Gate::denies('view', $this->item)){
//            abort(404);
//        }

       var_dump(Gate::denies('view', $this->item));

        return view('item', ['item' => $this->item]);
    }
}
