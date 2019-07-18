<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 09/11/2018
 * Time: 10:32
 */
namespace App\Repositories;
use App\Hotel;
use App\Repositories\HotelRepositoryInterface;

class HotelRepository implements HotelRepositoryInterface{

    protected $hotel;
    public  function  __construct(Hotel $hotel)
    {
        $this->hotel = $hotel;
    }

    public function  listHotel(){
        $hotels = Hotel::all();
        return $hotels;
    }

    public  function store(Array $inputs){
        $hotel = Hotel::create([
            'nom'=>$inputs['nom'],
            'ville'=>$inputs['ville'],
            'telephone_1'=>$inputs['telephone_1'],
            'telephone_2'=>$inputs['telephone_2'],
            'email'=>$inputs['email'],
            'fax'=>$inputs['fax'],
            'site_web'=>$inputs['site_web'],
            'longitude'=>$inputs['longitude'],
            'latitude'=>$inputs['latitude'],
            'standing'=>$inputs['standing'],
            'image_1'=>$inputs['image_1']
        ]);
        return $hotel;
    }

    public function update(Array $inputs){
        $hotelierUpdate = Hotelier::where('id',$inputs['hotelier_id'])->update([
            'numero_cni'=>$inputs['numero_cni'],
        ]);
        return $hotelierUpdate;


    }
    public function getPaginate($n){

    }

    //mise à jour les images
    public  function  ajouterImage($name, $value){

    }
    public  function  modifierImage($name, $value){

    }

    //mise à jour des attributs booleen
    public function updateBooleanAttribute($value){

    }
    public function updateBooleanAttributes(Array $inputs){

    }

    //mise à jour des attributs textuels
    public function updateTextAttribute($value){

    }
    public function updateTextAttributes(Array $inputs){

    }

    //mise à jour des attributs numeriques
    public function updateNumberAttribute($value){

    }
    public function updateNumberAttributes(Array $inputs){

    }
}