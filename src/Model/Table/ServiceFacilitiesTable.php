<?php
namespace App\Model\Table;

use App\Model\Entity\ServiceFacility;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceFacilities Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Types
 * @property \Cake\ORM\Association\BelongsTo $Regions
 */
class ServiceFacilitiesTable extends Table
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

        $this->table('service_facilities');
        $this->displayField('facility_name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Families', [
            'foreignKey' => 'family_id'
        ]);

        $this->belongsTo('Types', [
            'foreignKey' => 'type_id'
        ]);
        $this->belongsTo('Regions', [
            'foreignKey' => 'region_id'
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
            ->requirePresence('family_id', 'create')
            ->notEmpty('family_id')
            ->add('family_id', 'valid', [
                'rule' => 'numeric', 
                'message' => 'Family cannot be empty']);
        
        $validator
            ->requirePresence('type_id', 'create')
            ->notEmpty('type_id')
            ->add('type_id', 'valid', ['rule' => 'numeric', 
                'message' => 'Type cannot be empty']);
        
        $validator
            ->requirePresence('facility_name', 'create')
            ->notEmpty('facility_name');
        
        $validator
            ->allowEmpty('website_url');
        
        $validator->add('website_url', [
            'valid_url' => ['rule' => 'url']
            ]);
        $validator
            ->requirePresence('full_address', 'create')
            ->notEmpty('full_address');

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
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['region_id'], 'Regions'));
        $rules->add($rules->existsIn(['family_id'], 'Families'));
        return $rules;
    }
}
