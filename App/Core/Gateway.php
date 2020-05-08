<?php
namespace App\Core;

use App\Core\DB;

class Gateway extends DB
{
  public static function create()
  {
    DB::init()->query($sql);
  }

  public static function insert()
  {
    $sql = "INSERT INTO $table ($cols) VALUES ($vals)";
    DB::init()->query($sql);
  }

  public static function all()
  {
	$sql = "SELECT * FROM $table"
  }

  public static function find()
  {
    $sql = "SELECT * FROM $table WHERE $col = '$col'";
  }

  public static function check()
  {
    $sql = "SELECT * FROM $table WHERE $col = '$val' LIMIT 1";
  }

  public static function allAsc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col ASC";
  }

  public static function allDesc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col DESC";
  }

  public static function paginate()
  {
    $sql = "SELECT * FROM $table LIMIT $num";
  }

  public static function paginateAsc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col ASC LIMIT $num";
  }

  public static function paginateDesc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col DESC LIMIT $num";
  }

  public static function update()
  {
    $sql = "UPDATE $table SET $set WHERE $col = '$val'";
  }

  public static function getId()
  {
    $sql = "SELECT `id` FROM $table WHERE $col = '$val' LIMIT 1";
  }

  public static function getLastId()
  {
    $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";
    $result = DB::init()->query($sql);
    foreach ($result as $val) {
      return $val['id'];
    }
  }
}