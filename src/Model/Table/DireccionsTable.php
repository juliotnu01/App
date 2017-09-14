<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direccions Model
 *
 * @property \App\Model\Table\ProductorsTable|\Cake\ORM\Association\BelongsTo $Productors
 *
 * @method \App\Model\Entity\Direccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion findOrCreate($search, callable $callback = null, $options = [])
 */
class DireccionsTable extends Table
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

        $this->setTable('direccions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productors', [
            'foreignKey' => 'productor_id',
            'joinType' => 'INNER'
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
            ->scalar('direccion')
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->integer('codigopostal')
            ->requirePresence('codigopostal', 'create')
            ->notEmpty('codigopostal');

        $validator
            ->integer('poblacion')
            ->requirePresence('poblacion', 'create')
            ->notEmpty('poblacion');

        $validator
            ->integer('provincia')
            ->requirePresence('provincia', 'create')
            ->notEmpty('provincia');

        $validator
            ->integer('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

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
        $rules->add($rules->existsIn(['productor_id'], 'Productors'));

        return $rules;
    }
}
