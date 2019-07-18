<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 19:54
 */

namespace App\Repositories;

use App\User;
use App\Hotelier;

class HotelierRepository
{
    protected $hotelier;
    protected  $user;
    public  function __construct(User $user,   Hotelier $hotelier)
    {
      $this->hotelier = $hotelier;
      $this->user = $user;
    }

    //methodes pour les crud normaux
    public function  listHotel(){
        return Hotelier::all();
    }
    public  function store(Array $inputs){
        $hotelier = Hotelier::create([
            'user_id'=>$inputs['user_id'],
            'hotel_id'=>$inputs['hotel_id'],
            'numero_cni'=>$inputs['numero_cni'],
        ]);
    return $hotelier;
    }
    public function update(Array $inputs){
        $hotelierUpdate = Hotelier::where('id',$inputs['hotelier_id'])->update([
           'numero_cni'=>$inputs['numero_cni'],
        ]);
        return $hotelierUpdate;
    }

    public function updateUser(Array $inputs){
        $userUpdate = User::where('id', $inputs['user_id'])->update([
            'nom'=>$inputs['nom'],
            'prenom'=>$inputs['prenom'],
            'telephone_1'=>$inputs['telephone_1'],
            'telephone_2'=>$inputs['telephone_2'],
        ]);
        return $userUpdate;
    }

    public function getPaginate($n){

    }

}