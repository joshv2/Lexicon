<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Word Entity
 *
 * @property int $id
 * @property string $spelling
 * @property string $etymology
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Dictionary[] $dictionaries
 * @property \App\Model\Entity\Origin[] $origins
 * @property \App\Model\Entity\Region[] $regions
 * @property \App\Model\Entity\Type[] $types
 */
class Word extends Entity
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
        'spelling' => true,
        'etymology' => true,
        'notes' => true,
        'created' => true,
        'dictionaries' => true,
        'origins' => true,
        'regions' => true,
        'types' => true,
    ];
}
