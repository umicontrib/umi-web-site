<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 17:32
 */

namespace App\Repositories;


use App\Reservation;


class ReservationRepository implements ReservationRepositoryInterface
{
    protected $reservation;
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function  listReservation(){
       return Reservation::all();
    }

    public  function store( Array $inputs)
    {
        $reservation = Reservation::create([
            'date_reservation' => $inputs['date_reservation'],
            'nom' => $inputs['nom'],
            'prenom' => $inputs['prenom'],
            'telephone_1' => $inputs['telephone_1'],
            'telephone_2' => $inputs['telephone_2'],
            'numero_cni' => $inputs['numero_cni'],
            'etat_reservation' => $inputs['etat_reservation'],
            'email' => $inputs['email'],
            'duree_sejour' => $inputs['duree_sejour'],
            'date_debut_sejour' => $inputs['date_debut_sejour'],
        ]);
        return $reservation;
    }

    public function update(Array $inputs)
    {

    }
    public function getPaginate($n)
    {

    }
}