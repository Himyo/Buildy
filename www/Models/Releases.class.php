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
    public function init(array $release , bool $set = false) {
        $dbRelease = $this->basesql->findOne($this, $release);
        if(!$dbRelease) {
            $this->basesql->insert($this, $release);
            if($set) {
                $this->id = $this->basesql->pdo->lastInsertId();
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