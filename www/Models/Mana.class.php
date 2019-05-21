<?php


namespace MVC\Models;
use MVC\Core\BaseSQL;
use MVC\Core\QueryBuilder;

class Mana
{
    private $id;
    private $manaCost;
    private $cmc;

    public $basesql;

    public function __construct(BaseSQL $bsql)
    {
        $this->basesql = $bsql;
    }


    public function init(array $mana, bool $set = false) {
        $dbMana = $this->basesql->findOne($mana['manaCost']);
        if(!$dbMana) {
            $parsedMana =  $this->parseManaCost($mana['manaCost']);
            $data = [$parsedMana, $mana];
            //TODO: Probably prevent multiple query
            // Make transaction for execution
            var_dump($mana);
            $this->basesql->insert($this, $data);
            if($set) {
                $this->id = $this->basesql->pdo->lastInsertId();
            }
        }
    }

    public function parseManaCost($mC): array
    {
        $result = [
            'R' => 0,
            'U' => 0,
            'G' => 0,
            'W' => 0,
            'B' => 0,
            'C' => 0
        ];
        $manaCost = $mC;
        $manaCost = trim($manaCost, '}');
        $manaCost = trim($manaCost, '{');

        $manaCost = explode( '}{', $manaCost);
        foreach($manaCost as $color) {
            //Colorless is not equal to a char but a number
            // I insert it directly
            if((int) $color){
                $result['C'] = (int) $color;
            }
            //Bi-color card need a particular treatment
            // ex: {R}{U}{W/G}
            elseif (strstr($color, '/')) {
                $tmp = explode($color, '/');
                $result[$tmp[0]]++;
                $result[$tmp[1]]++;
            }
            else {
                $result[$color]++;
            }
        }
        $mapedResult = array_map(function($result) {
            return [
                'red' => $result['R'],
                'blue' => $result['U'],
                'green' => $result['G'],
                'white' => $result['W'],
                'black' => $result['B'],
                'colorless' => $result['C']
            ];
        }, $result);
        return $mapedResult;
    }

    public function findMana(): integer {
        $qb = QueryBuilder::getQueryBuilder();
        $qb->select(['id'])
            ->where(['convert_mana_cost' => $this->cmc])
            ->andWhere(['mana_cost'=>$this->manaCost]);
    }

    public function getId(): integer {
        return $this->id;
    }
}