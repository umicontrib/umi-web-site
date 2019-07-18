<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 15/11/2018
 * Time: 14:57
 */

namespace App\Repositories;


use App\Appartement;
use App\Chambre;
use App\Disponibilite;
use App\Salleceremonie;

class DisponibiliteRepository implements DisponibiliteRepositoryInterface
{
    public function listerDisponibilite()
    {
        // TODO: Implement listerDisponibiliteParHotel() method.
        $disponibilites = Disponibilite::all();
        return $disponibilites;
    }

    public function creerDisponibilitePourElement(Array $inputs)
    {
        // TODO: Implement creerDisponibilitePourHotel() method.
        if($inputs['type'] == "chambre"){
            $chambre = Chambre::find($inputs['element']);
            if($chambre->quantite >= $inputs['quantite']){
                Chambre::where('id', $inputs['element'])->update([
                    'quantite'=>($chambre->quantite - $inputs['quantite']),
                ]);
                return true;
            }else{
                return false;
            }
        }
        if($inputs['type'] == "appartement"){
            $appartement = Appartement::find($inputs['element']);
            if($appartement->quantite >= $inputs['quantite'] ){
                Appartement::where('id', $inputs['element'])->update([
                    'quantite'=>($appartement->quantite - $inputs['quantite']),
                ]);
                return true;
            }else{
                return false;
            }
        }
        if($inputs['type'] == "salleceremony"){
            $salleceremony = Salleceremonie::find($inputs['element']);
            if($salleceremony->quantite >= $inputs['quantite'] ){
                Salleceremonie::where('id', $inputs['element'])->update([
                    'quantite'=>$inputs['quantite'],
                ]);
                return true;
            }else{
                return false;
            }
        }
    }

    public function store(Array $inputs)
    {
        if($inputs['type'] == "chambre"){
            $disponibilite = Disponibilite::create([
                'hotel_id'=>$inputs['hotel_id'],
                'chambre_id'=>$inputs['element'],
                'commentaire'=>$inputs['commentaire'],
                'date_fin'=>$inputs['date_fin'],
                'date_debut'=>$inputs['date_debut'],
                'prix'=>$inputs['prix'],
                'localisation'=>$inputs['localisation'],
                'quantite'=>$inputs['quantite'],
            ]);
            return $disponibilite;
        }
        if($inputs['type'] == "appartement"){
            $disponibilite = Disponibilite::create([
                'hotel_id'=>$inputs['hotel_id'],
                'appartement_id'=>$inputs['element'],
                'commentaire'=>$inputs['commentaire'],
                'date_fin'=>$inputs['date_fin'],
                'date_debut'=>$inputs['date_debut'],
                'prix'=>$inputs['prix'],
                'localisation'=>$inputs['localisation'],
                'quantite'=>$inputs['quantite'],
            ]);
            return $disponibilite;
        }
        if($inputs['type'] == "salleceremony"){
            $disponibilite = Disponibilite::create([
                'hotel_id'=>$inputs['hotel_id'],
                'salleceremonie_id'=>$inputs['element'],
                'commentaire'=>$inputs['commentaire'],
                'date_fin'=>$inputs['date_fin'],
                'date_debut'=>$inputs['date_debut'],
                'prix'=>$inputs['prix'],
                'localisation'=>$inputs['localisation'],
                'quantite'=>$inputs['quantite'],
            ]);
            return $disponibilite;
        }
    }

    public function update(Array $inputs)
    {
        // TODO: Implement update() method.

    }

    public function rechercheDisponibilite()
    {
        // TODO: Implement rechercheDisponibilite() method.
         return Disponibilite::all();
    }
}