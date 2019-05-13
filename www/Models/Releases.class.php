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
     * @param $border
     */
    public function __construct($id, $name, $releaseDate, $code) {
        $this->id = $id;
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->code = $code;
    }

    public static function getReleaseId(): integer {
        
    }


}