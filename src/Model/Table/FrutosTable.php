<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Frutos Model
 *
 * @property \App\Model\Table\AlbaranesTable|\Cake\ORM\Association\HasMany $Albaranes
 * @property \App\Model\Table\AlmacenajesTable|\Cake\ORM\Association\HasMany $Almacenajes
 * @property \App\Model\Table\AlmacenesTable|\Cake\ORM\Association\HasMany $Almacenes
 * @property \App\Model\Table\FcpconfigsTable|\Cake\ORM\Association\HasMany $Fcpconfigs
 * @property \App\Model\Table\PesadasTable|\Cake\ORM\Association\HasMany $Pesadas
 *
 * @method \App\Model\Entity\Fruto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fruto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fruto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fruto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fruto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fruto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fruto findOrCreate($search, callable $callback = null, $options = [])
 */
class FrutosTable extends Table
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

        $this->setTable('frutos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Albaranes', [
            'foreignKey' => 'fruto_id'
        ]);
        $this->hasMany('Almacenajes', [
            'foreignKey' => 'fruto_id'
        ]);
        $this->hasMany('Almacenes', [
            'foreignKey' => 'fruto_id'
        ]);
        $this->hasMany('Fcpconfigs', [
            'foreignKey' => 'fruto_id'
        ]);
        $this->hasMany('Pesadas', [
            'foreignKey' => 'fruto_id'
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
            ->scalar('variedad')
            ->requirePresence('variedad', 'create')
            ->notEmpty('variedad')
            ->add('variedad', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['variedad']));

        return $rules;
    }
}
