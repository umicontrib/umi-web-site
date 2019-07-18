<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 12:51
 */

namespace App\Repositories;


use App\Chambre;

class ChambreRepository implements ChambreRepositoryInterface
{
    protected $chambre;
    public  function __construct(Chambre $chambre)
    {
        $this->chambre = $chambre;
    }

    public function listChambre(){
        return Chambre::all();
    }
    public function store(Array $inputs){
        $chambre = Chambre::create([
            'hotel_id'=>$inputs['hotel_id'],
            'niveau_id'=>$inputs['niveau_id'],
            'nom'=>$inputs['nom'],
            'quantite'=>$inputs['quantite'],
            'superficie'=>$inputs['superficie'],
            'standing'=>$inputs['standing'],
            'prix'=>$inputs['prix'],
            'image_1'=>$inputs['image_1'],
        ]);
        return $chambre;
    }
    public function update(Array $inputs){
        $chambreUpdate = Chambre::where('id', $inputs['chambre_id'])->update([
                'nom'=>$inputs['nom'],
                'quantite'=>$inputs['quantite'],
                'standing'=>$inputs['standing'],
                'prix'=>$inputs['prix'],
            ]);
        return $chambreUpdate;
    }
}