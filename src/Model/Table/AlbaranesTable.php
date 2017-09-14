<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Albaranes Model
 *
 * @property \App\Model\Table\ProductorsTable|\Cake\ORM\Association\BelongsTo $Productors
 * @property \App\Model\Table\FrutosTable|\Cake\ORM\Association\BelongsTo $Frutos
 * @property \App\Model\Table\PesadasTable|\Cake\ORM\Association\HasMany $Pesadas
 *
 * @method \App\Model\Entity\Albarane get($primaryKey, $options = [])
 * @method \App\Model\Entity\Albarane newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Albarane[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Albarane|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Albarane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Albarane[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Albarane findOrCreate($search, callable $callback = null, $options = [])
 */
class AlbaranesTable extends Table
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

        $this->setTable('albaranes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Productors', [
            'foreignKey' => 'productor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Frutos', [
            'foreignKey' => 'fruto_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pesadas', [
            'foreignKey' => 'albarane_id'
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
            ->scalar('numeroalba')
            ->requirePresence('numeroalba', 'create')
            ->notEmpty('numeroalba')
            ->add('numeroalba', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('facturado')
            ->allowEmpty('facturado');

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
        $rules->add($rules->isUnique(['numeroalba']));
        $rules->add($rules->existsIn(['productor_id'], 'Productors'));
        $rules->add($rules->existsIn(['fruto_id'], 'Frutos'));

        return $rules;
    }
}
