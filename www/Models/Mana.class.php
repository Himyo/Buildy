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
        $dbMana = $this->basesql->findOne($this, ['mana_cost' => $mana['mana_cost']]);
        if(!$dbMana) {
            $parsedMana =  $this->parseManaCost($mana['mana_cost']);
            $parsedMana['mana_cost'] = $mana['mana_cost'];
            $parsedMana['cmc'] = $mana['cmc'];
            //TODO: Probably prevent multiple query
            // Make transaction for execution
            $this->basesql->insert($this, $parsedMana);
            if($set) {
                $this->id = $this->basesql->pdo->lastInsertId();
            }
        }
        else {
            $this->id = $dbMana[0];
        }
    }

    public function parseManaCost(string $mC): array
    {
        $result = [
            'R' => 0,
            'U' => 0,
            'G' => 0,
            'W' => 0,
            'B' => 0,
            'C' => 0,
            'X' => 0,
            '' => 0
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
            return [
                'red' => $result['R'],
                'blue' => $result['U'],
                'green' => $result['G'],
                'white' => $result['W'],
                'black' => $result['B'],
                'colorless' => $result['C'],
                'x' => $result['X'],
                'void' => $result['']
            ];
    }

    public function findMana() {
        $qb = QueryBuilder::getQueryBuilder();
        $qb->select(['id'])
            ->where(['cmc' => $this->cmc])
            ->andWhere(['mana_cost'=>$this->manaCost]);
    }

    public function getId() {
        return $this->id;
    }
}