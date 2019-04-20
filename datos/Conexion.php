<?php

class Conexion{

  /**
   * Conexion a la base de Datos
   * @return PDO
   */

  public static function conectar(){

    try{
      $conn = new PDO('mysql:host=localhost;dbname=pruebas','root','');

      return $conn;

    }catch (PDOException $e) {
      die($e->getMessage());
    } 

  }

}

Conexion::conectar();