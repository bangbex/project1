<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kategoriartikel Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property int $lft
 * @property int $rght
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Kategoriartikel $parent_kategoriartikel
 * @property \App\Model\Entity\Artikel[] $artikel
 * @property \App\Model\Entity\Kategoriartikel[] $child_kategoriartikel
 */
class Kategoriartikel extends Entity
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
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'name' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'parent_kategoriartikel' => true,
        'artikel' => true,
        'child_kategoriartikel' => true
    ];
}
