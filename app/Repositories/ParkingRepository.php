<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 17:15
 */

namespace App\Repositories;


use App\Parking;

class ParkingRepository implements ParkingRepositoryInterface
{
    protected $parking;
    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }

    public function listParking()
    {
        // TODO: Implement listParking() method.
        return Parking::all();
    }
    public function store(Array $inputs){
        $parking = Parking::create([
            'nom'=> $inputs['nom'],
            'standing'=> $inputs['standing'],
            'quantite'=> $inputs['quantite'],
            'prix'=> $inputs['prix'],
            'image'=> $inputs['image'],
            'hotel_id'=> $inputs['hotel_id'],

        ]);
        return $parking;
    }

    public function update(Array $inputs){
        $parkingUpdate = Parking::where('id', $inputs['parking_id'])->update([
            'nom'=>$inputs['nom'],
            'quantite'=>$inputs['quantite'],
            'standing'=>$inputs['standing'],
            'prix'=>$inputs['prix'],
            'nbre_places'=>$inputs['nbre_places'],
        ]);
        return $parkingUpdate;

    }
}