<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 15:27
 */

namespace App\Repositories;


use App\Salleceremonie;

class SalleceremonieRepository implements SalleceremonieRepositoryInterface
{
    public function listSalleceremonie(){
        return Salleceremonie::all();
    }
    public function store(Array $inputs){
        $salleceremonie = Salleceremonie::create([
            'nom'=> $inputs['nom'],
            'standing'=> $inputs['standing'],
            'prix'=> $inputs['prix'],
            'nbre_places'=> $inputs['nbre_places'],
            'niveau_id'=> $inputs['niveau_id'],
            'hotel_id'=> $inputs['hotel_id'],
            'image_1'=> $inputs['image_1'],
            'quantite'=> $inputs['quantite'],
            'superficie'=> $inputs['superficie'],

        ]);
        return $salleceremonie;
    }
    public function update(Array $inputs){
        $salleceremonyUpdate = Salleceremonie::where('id', $inputs['salle_id'])->update([
            'nom'=>$inputs['nom'],
            'quantite'=>$inputs['quantite'],
            'standing'=>$inputs['standing'],
            'prix'=>$inputs['prix'],
        ]);
        return $salleceremonyUpdate;

    }

}