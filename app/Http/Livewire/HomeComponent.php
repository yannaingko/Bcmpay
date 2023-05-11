<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{
    public $phone;
    public $contact;
    public $phoneNub;
    public $amount;    

    public function registerPhone()
    {
        function generateId(){
            $number = mt_rand(0000001,9999999);

            if(idNumberExist($number)){
                return generateId();
            }
            return $number;
        }
        function idNumberExist($number){
            return User::where('customer_id',$number)->exists();
        }
        $genID = generateId();

        $user = User::where('id',auth()->user()->id)->first();
        $user->customer_id = $genID;
        $user->phone = $this->phone;
        $user->save();

        return redirect(route('home'));
    }

    public function render()
    {
        $history = Transaction::all();
        return view('livewire.home-component',[
            'history' => $history,
        ]);
    }
}
