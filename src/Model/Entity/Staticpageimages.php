<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staticpageimages Entity
 *
 * @property int $id
 * @property int $staticpage_id
 * @property string $filename
 * @property string $relative_path
 * @property string $dir
 * @property string $type
 * @property string $size
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Staticpage $staticpage
 */
class Staticpageimages extends Entity
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
        'staticpage_id' => true,
        'filename' => true,
        'relative_path' => true,
        'dir' => true,
        'type' => true,
        'size' => true,
        'created' => true,
        'modified' => true,
        'staticpage' => true
    ];
}
