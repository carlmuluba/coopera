<?php
namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orderers
 * @property \Cake\ORM\Association\BelongsTo $Designers
 * @property \Cake\ORM\Association\HasMany $Designer
 * @property \Cake\ORM\Association\HasMany $Orderer
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config = [])
    {
        parent::initialize($config);

        $this->table('projects');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orderers', [
            'foreignKey' => 'orderer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Designers', [
            'foreignKey' => 'designer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Designers', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('Orderers', [
            'foreignKey' => 'project_id'
        ]);

        $this->addBehavior('AuditStash.AuditLog', [
            'whitelist' => ['title', 'description', 'designr_id']
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('program');

        $validator
            ->allowEmpty('description');

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmpty('end_date');

        $validator
            ->integer('views')
            ->requirePresence('views', 'create')
            ->notEmpty('views');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['orderer_id'], 'Orderers'));
        $rules->add($rules->existsIn(['designer_id'], 'Designers'));
        return $rules;
    }
}
