<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pesadas Model
 *
 * @property \App\Model\Table\FrutosTable|\Cake\ORM\Association\BelongsTo $Frutos
 * @property \App\Model\Table\AlbaranesTable|\Cake\ORM\Association\BelongsTo $Albaranes
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\Pesada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pesada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pesada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pesada|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pesada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pesada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pesada findOrCreate($search, callable $callback = null, $options = [])
 */
class PesadasTable extends Table
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

        $this->setTable('pesadas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Frutos', [
            'foreignKey' => 'fruto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Albaranes', [
            'foreignKey' => 'albarane_id',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->decimal('bruto')
            ->requirePresence('bruto', 'create')
            ->notEmpty('bruto');

        $validator
            ->decimal('tara')
            ->requirePresence('tara', 'create')
            ->notEmpty('tara');

        $validator
            ->decimal('neto')
            ->requirePresence('neto', 'create')
            ->notEmpty('neto');

        $validator
            ->decimal('euroskg')
            ->requirePresence('euroskg', 'create')
            ->notEmpty('euroskg');

        $validator
            ->decimal('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

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
        $rules->add($rules->existsIn(['fruto_id'], 'Frutos'));
        $rules->add($rules->existsIn(['albarane_id'], 'Albaranes'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
