<?php

namespace Core;

use PDO;

class Model {
    protected static function db() {
        return new PDO('mysql:host=localhost;dbname=mvctest;charset=utf8mb4', 'root', 'root');
    }
}
