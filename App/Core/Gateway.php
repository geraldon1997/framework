<?php
namespace App\Core;

use App\Core\DB;

class Gateway
{
  public static function create()
  {
    $create = DB::init()->query($sql);
    if ($create->affected_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public static function insert()
  {
    $sql = "INSERT INTO $table ($cols) VALUES ($vals)";
    $insert = DB::init()->query($sql);
    if ($insert) {
      return 'inserted';
    } else {
      return false;
    }
  }

  public static function all()
  {
	$sql = "SELECT * FROM $table";
    $all = DB::init()->query($sql);
    if ($all->num_rows > 0) {
      return $all;
    } else {
      return false;
    }
  }

  public static function find()
  {
    $sql = "SELECT * FROM $table WHERE $col = '$col'";
    $find = DB::init()->query($sql);
    if ($find->num_rows > 0) {
      return $find;
    } else {
      return false;
    }
  }

  public static function check()
  {
    $sql = "SELECT * FROM $table WHERE $col = '$val' LIMIT 1";
    $check = DB::init()->query($sql);
    if ($check->num_rows > 0) {
      return true;
    } else {
      return false;
    }
  }

  public static function allAsc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col ASC";
    $allAsc = DB::init()->query($sql);
    if ($allAsc->num_rows > 0) {
      return $allAsc;
    } else {
      return false;
    }
  }

  public static function allDesc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col DESC";
    $allDesc = DB::init()->query($sql);
    if ($allDesc->num_rows > 0) {
      return $allDesc;
    } else {
      return false;
    }
  }

  public static function paginateAll()
  {
    $sql = "SELECT * FROM $table LIMIT $num";
    $pAll = DB::init()->query($sql);
    if ($pAll->num_rows > 0) {
      return $pAll;
    } else {
      return false;
    }
  }

  public static function paginateAllAsc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col ASC LIMIT $num";
    $pAllAsc = DB::init()->query($sql);
    if ($pAllAsc->num_rows > 0) {
      return $pAllAsc;
    } else {
      return false;
    }
  }

  public static function paginateAllDesc()
  {
    $sql = "SELECT * FROM $table ORDER BY $col DESC LIMIT $num";
    $pAllDesc = DB::init()->query($sql);
    if ($pAllDesc->num_rows > 0) {
      return $pAllDesc;
    } else {
      return false;
    }
  }

  public static function update()
  {
    $sql = "UPDATE $table SET $set WHERE $col = '$val'";
    $update = DB::init()->query($sql);
    if ($update->affected_rows > 0) {
      return 'updated';
    } else {
      return false;
    }
  }

  public static function getId()
  {
    $sql = "SELECT * FROM $table WHERE $col = '$val' LIMIT 1";
    $getId = DB::init()->query($sql);
    if ($getId->num_rows > 0) {
      foreach ($getId as $val) {
        return $val['id'];
      }
    } else {
      return false;
    }
  }

  public function getFirstId()
  {
    $sql = "SELECT * FROM $table WHERE $col = $val ORDER BY `id` ASC LIMIT 1";
    $getFirstId = DB::init()->query($sql);
    if ($getFirstId->num_rows > 0) {
      foreach ($getFirstId as $val) {
        return $val['id'];
      }
    } else {
      return false;
    }
  }

  public static function getLastId()
  {
    $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 1";
    $result = DB::init()->query($sql);
    if ($result->num_rows > 0) {
    	foreach ($result as $val) {
      		return $val['id'];
    	}
    } else {
      return false;
    }
}
