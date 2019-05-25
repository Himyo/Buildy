<?php
namespace MVC\Models;

use MVC\Core\BaseSQL;
use MVC\Lib\Supplier;

class Releases extends BaseSQL {

    use Supplier;
    private $id;
    private $name;
    private $code;
    private $releaseDate;
    private $gameId = 1;

    /**
     * Set constructor.
     * @param $id
     * @param $name
     * @param $releaseDate
     */
    public function __construct() {
        parent::__construct();
    }

    public function init(array $release , bool $set = false) {
        $dbRelease = $this->findOne($release);
        if(!$dbRelease) {
            $this->insert($release);
            if($set) {
                $this->id = $this->lastInsertedId();
            }
        }
        else {
            $this->id = $dbRelease[0];
        }
    }

    public function getId() {
        return $this->id;
    }
}