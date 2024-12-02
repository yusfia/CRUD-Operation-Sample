<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function Psy\debug;

class PagePertamaController extends Controller {
    public function index(Request $request){

        $user = User::find(1);
        if ($user) {
            $address = $user->addresses;
        }

        return view('page_pertama', [
            'user' => $user,
            'addresses' => $address
        ]);
    }

    public function add() {
        return view('address_add');
    }

    public function create(Request $request){
        $address = $this->saveItem(null, $request);
        return redirect('pageone');
    }

    public function edit($id)
    {
        $address = Address::find($id);
        return view('address_edit', ['address' => $address]);
    }

    public function update($id, Request $request){
        $address = $this->saveItem($id, $request);
        return redirect('pageone');
    }

    public function destroy($id)
    {
        $address = Address::find($id);
        if ($address == null) {
            dd("Data tidak");
        } else {
            $address->delete();
            return back();
        }
    }

    private function saveItem($id, Request $request) {
        return Address::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'city' => $request->city,
                'street' => $request->street,
                'postal_code' => $request->postal_code,
                'user_id' => 1
            ]
        );
    }

}
