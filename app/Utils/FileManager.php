<?php
namespace App\Utils;
use File;
class FileManager{
  // Fonction pour uploader un fichier dans un répertoire du serveur
  public function uploadImage($file, $dest_folder)
  {
    if(isset($file)){
      $fileName = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $destinationPath = public_path() . '/assets/img/'.$dest_folder;
      $extensions_valides = array( 'ai','eps','psd','jpg' , 'gif' , 'tif','png','svg' );

      // Generer aleatoirement le nom du fichier (à revoir avec l'utilisation du SSIUD)
      //$safeName  = str_random(10).'.'.$extension;

      //Vérifions que le dossier $dest_folder existe sinon on le crée
      if ( !in_array(strtolower($extension),$extensions_valides) )
      {
        $extension = 'png';
      }
      if (!is_dir($destinationPath))
      {
        //Permettons l'accès complet sur ce dossier: lecture, écriture et suppression
        mkdir($destinationPath, 0777, true);
      }
      //Créer un identifiant difficile à deviner
      $safeName = md5(uniqid(rand(), true)).'.'.$extension;
      // Deplacer le fichier à sa destination
      $file->move($destinationPath, $safeName);
      return $safeName;
    }
    else {
      return " ";
    }

  }

  // Fonction pour uploader un fichier dans un répertoire du serveur
  public function uploadFichier($file, $dest_folder)
  {

    $fileName = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $destinationPath = public_path() . '/assets/img/'.$dest_folder;
    $extensions_valides = array( 'ai','eps','psd','jpg' , 'gif' , 'tif','png','svg','jpg' ,
    'jpeg' , 'gif' , 'png','pdf','mp4','mp3','docx','doc','odt' );

    // Generer aleatoirement le nom du fichier (à revoir avec l'utilisation du SSIUD)
    //$safeName  = str_random(10).'.'.$extension;

    //Vérifions que le dossier $dest_folder existe sinon on le crée
    if ( !in_array(strtolower($extension),$extensions_valides) )
    {
      $extension = 'png';
    }
    if (!is_dir($destinationPath))
    {
      //Permettons l'accès complet sur ce dossier: lecture, écriture et suppression
      mkdir($destinationPath, 0777, true);
    }
    //Créer un identifiant difficile à deviner
    $safeName = md5(uniqid(rand(), true)).'.'.$extension;
    // Deplacer le fichier à sa destination
    $file->move($destinationPath, $safeName);
    return $safeName;
  }
}
