<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fcpconfigs Model
 *
 * @property \App\Model\Table\FrutosTable|\Cake\ORM\Association\BelongsTo $Frutos
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\Fcpconfig get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fcpconfig newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fcpconfig[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fcpconfig|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fcpconfig patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fcpconfig[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fcpconfig findOrCreate($search, callable $callback = null, $options = [])
 */
class FcpconfigsTable extends Table
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

        $this->setTable('fcpconfigs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Frutos', [
            'foreignKey' => 'fruto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
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
            ->integer('unicarelacion')
            ->requirePresence('unicarelacion', 'create')
            ->notEmpty('unicarelacion')
            ->add('unicarelacion', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('preciokg')
            ->requirePresence('preciokg', 'create')
            ->notEmpty('preciokg');

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
        $rules->add($rules->isUnique(['unicarelacion']));
        $rules->add($rules->existsIn(['fruto_id'], 'Frutos'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
