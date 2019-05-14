<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity
 *
 * @property int $prefecture_id
 * @property string|null $name
 * @property string $citycode
 * @property \Cake\I18n\FrozenTime $update_datetime
 *
 * @property \App\Model\Entity\Prefecture $prefecture
 */
class City extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'prefecture_id' => true,
        'name' => true,
        'update_datetime' => true,
        'prefecture' => true
    ];
}
