<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 12:49
 */

namespace App\Repositories;


use App\Niveau;

class NiveauRepository implements NiveauRepositoryInterface
{
    public function __construct(Niveau $niveau)
    {
        $this->niveau = $niveau;
    }

    /*ceci aura pour but de renvoyer la liste des niveau en fonction de l'hotel
    choisi*/
    public function  listNiveau(){
        $niveaux = Niveau::all();
        return $niveaux;
    }

    /* Stocker le niveau d'un element (chambre, appart, salle ceremonie*/
    public  function store(Array $inputs){
        $niveau = Niveau::create([
            'nom'=>$inputs['nom'],
            'numero_ordre'=>$inputs['numero_ordre'],
            'hotel_id'=>$inputs['hotel_id']
        ]);
        return $niveau;
    }

    public function update(Array $inputs){
        $niveauUpdate = Niveau::where('id', $inputs['niveau_id'])->update([
            'nom'=>$inputs['nom'],
            'numero_ordre'=>$inputs['numero_ordre']
        ]);
        return $niveauUpdate;

    }
    public function getPaginate($n){

    }

}