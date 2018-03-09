<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staticpage Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $menu_id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property bool $is_published
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Menu $menu
 * @property \App\Model\Entity\Staticpageimages[] $staticpageimages
 */
class Staticpage extends Entity
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
        'user_id' => true,
        'menu_id' => true,
        'title' => true,
        'slug' => true,
        'body' => true,
        'is_published' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'menu' => true,
        'staticpageimages' => true
    ];
}
