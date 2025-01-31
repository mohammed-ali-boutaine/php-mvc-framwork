<?php

namespace App\Models;

use Core\Model;
use PDO;

class User extends Model {
    public static function getAll() {
        $stmt = self::db()->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
