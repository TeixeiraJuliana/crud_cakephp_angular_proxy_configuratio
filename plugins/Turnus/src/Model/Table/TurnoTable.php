<?php
namespace Turnus\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turno Model
 *
 * @method \Turnus\Model\Entity\Turno get($primaryKey, $options = [])
 * @method \Turnus\Model\Entity\Turno newEntity($data = null, array $options = [])
 * @method \Turnus\Model\Entity\Turno[] newEntities(array $data, array $options = [])
 * @method \Turnus\Model\Entity\Turno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Turnus\Model\Entity\Turno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Turnus\Model\Entity\Turno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Turnus\Model\Entity\Turno[] patchEntities($entities, array $data, array $options = [])
 * @method \Turnus\Model\Entity\Turno findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TurnoTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('turnos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('shift_name')
            ->maxLength('shift_name', 255)
            ->requirePresence('shift_name', 'create')
            ->notEmptyString('shift_name');

        $validator
            ->time('start_work_shift')
            ->requirePresence('start_work_shift', 'create')
            ->notEmptyTime('start_work_shift');

        $validator
            ->time('end_work_shift')
            ->requirePresence('end_work_shift', 'create')
            ->notEmptyTime('end_work_shift');

        $validator
            ->scalar('type_')
            ->maxLength('type_', 55)
            ->requirePresence('type_', 'create')
            ->notEmptyString('type_');

        $validator
            ->scalar('update')
            ->maxLength('update', 255)
            ->requirePresence('update', 'create')
            ->notEmptyString('update');

        $validator
            ->scalar('delete')
            ->maxLength('delete', 255)
            ->requirePresence('delete', 'create')
            ->notEmptyString('delete');

        return $validator;
    }
}
