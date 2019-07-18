<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 14:32
 */

namespace App\Repositories;


use App\Appartement;

class AppartementRepository implements AppartementRepositoryInterface
{
    private $appartement;

    public function __construct(Appartement $appartement)
    {
        $this->appartement = $appartement;
    }

    public function listAppartement(){
        return Appartement::all();
    }
    public function store(Array $inputs){
        $appartement = Appartement::create([
            'hotel_id'=>$inputs['hotel_id'],
            'niveau_id'=>$inputs['niveau_id'],
            'nom'=>$inputs['nom'],
            'quantite'=>$inputs['quantite'],
            'standing'=>$inputs['standing'],
            'superficie_salon'=>$inputs['superficie_salon'],
            'prix'=>$inputs['prix'],
            'image_1'=>$inputs['image_1'],

        ]);
        return $appartement;

    }
    public function update(Array $inputs){
        $appartementUpdate = Appartement::where('id', $inputs['appartement_id'])->update([
            'nom'=>$inputs['nom'],
            'quantite'=>$inputs['quantite'],
            'standing'=>$inputs['standing'],
            'prix'=>$inputs['prix'],
        ]);
        return $appartementUpdate;

    }
}