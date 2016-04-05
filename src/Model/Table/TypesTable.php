<?php
namespace App\Model\Table;

use App\Model\Entity\Type;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Types Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Families
 * @property \Cake\ORM\Association\HasMany $ServiceCenters
 */
class TypesTable extends Table
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

        $this->table('types');
        $this->displayField('type');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Families', [
            'foreignKey' => 'family_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ServiceCenters', [
            'foreignKey' => 'type_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

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
        $rules->add($rules->existsIn(['family_id'], 'Families'));
        $rules->add($rules->isUnique(['type','family_id']));
        return $rules;
    }
    
}
