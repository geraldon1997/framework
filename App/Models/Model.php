<?php
namespace App\Models;

use App\Core\DbConnection;

class Model
{
    public static function insert(string $table, array $values)
    {
        //
    }

    public static function delete(string $table, int $id)
    {
        $sql = "DELETE FROM $table WHERE id = '$id' ";
        return DbConnection::init()->query($sql);
    }

    public static function create(string $table, string $values)
    {
        $sql = "CREATE TABLE IF NOT EXISTS $table ($values)";
        return DbConnection::init()->query($sql);
    }

    public static function update(string $table, array $values)
    {
        //
    }

    public static function all(string $table)
    {
        //
    }

    public static function find(string $table)
    {
        //
    }

    public static function where(string $table, string $query)
    {
        $sql = "SELECT * FROM $table WHERE $query";
        return DbConnection::init()->query($sql);
    }
}
