<?php


namespace MVC\VO;
use MVC\Core\QueryBuilder;

class Mana
{
    private $id;
    private $manaCost;
    private $cmc;

    public function __construct(array $mana)
    {
        $this->manaCost = $mana['manaCost'];
        $this->cmc = $mana['cmc'];
    }

    //TODO: Insert the VO in the corresponding table if not
    // : already in there
    // : Then return the id of the inserted element

    public function parseManaCost(): array
    {
        $result = [
            'R' => 0,
            'U' => 0,
            'G' => 0,
            'W' => 0,
            'B' => 0,
            'C' => 0
        ];
        $manaCost = $this->manaCost;
        $manaCost = trim($manaCost, '}');
        $manaCost = trim($manaCost, '{');

        $manaCost = explode($manaCost, '}{');
        foreach($manaCost as $color) {
            //Colorless is not equal to a char but a number
            // I insert it directly
            if((int) $color){
                $result['C'] = (int) $color;
            }
            //Bi-color card need a particular treatment
            // ex: {W/G}
            elseif (strstr($color, '/')) {
                $tmp = explode($color, '/');
                $result[$tmp[0]]++;
                $result[$tmp[1]]++;
            }
            else {
                $result[$color]++;
            }
        }
        return $result;
    }

    public function findMana(): integer {
        $qb = new QueryBuilder();
        $qb->select(['id'])
            ->where(['convert_mana_cost' => $this->cmc])
            ->andWhere(['mana_cost'=>$this->manaCost]);

    }
}