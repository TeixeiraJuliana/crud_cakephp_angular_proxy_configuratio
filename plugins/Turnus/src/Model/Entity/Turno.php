<?php
namespace Turnus\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turno Entity
 *
 * @property int $id
 * @property string $work
 * @property string $shift_name
 * @property \Cake\I18n\FrozenTime $start_work_shift
 * @property \Cake\I18n\FrozenTime $end_work_shift
 * @property string $type_
 * @property \Cake\I18n\FrozenTime $created
 * @property string $update
 * @property string $delete
 */
class Turno extends Entity
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
        'shift_name' => true,
        'start_work_shift' => true,
        'end_work_shift' => true,
        'type_' => true,
        'created' => true,
        'update' => true,
        'delete' => true,
    ];
}
