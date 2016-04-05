<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Designer Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $about
 * @property string $email
 * @property string $url
 * @property string $mobile
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $project_id
 * @property \App\Model\Entity\Project[] $projects
 */
class Designer extends Entity
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
        '*' => true,
        'id' => false,
    ];
}