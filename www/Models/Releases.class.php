<?php
namespace MVC\Models;

use MVC\Core\BaseSQL;
use MVC\Lib\Supplier;

class Releases {

    use Supplier;
    private $id;
    private $name;
    private $code;
    private $releaseDate;
    private $gameId = 1;

    public $basesql;

    /**
     * Set constructor.
     * @param $id
     * @param $name
     * @param $releaseDate
     */
    public function __construct(BaseSQL $bsql)
    {
        $this->basesql = $bsql;
    }

    public function init($id, $name, $releaseDate, $code) {
        $this->id = $id;
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->code = $code;
    }

    public static function getReleaseId(): integer {
        
    }


}