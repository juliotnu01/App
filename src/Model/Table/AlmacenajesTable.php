<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Almacenajes Model
 *
 * @property \App\Model\Table\AlmacenesTable|\Cake\ORM\Association\BelongsTo $Almacenes
 * @property \App\Model\Table\FrutosTable|\Cake\ORM\Association\BelongsTo $Frutos
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\Almacenaje get($primaryKey, $options = [])
 * @method \App\Model\Entity\Almacenaje newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Almacenaje[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Almacenaje|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Almacenaje patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Almacenaje[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Almacenaje findOrCreate($search, callable $callback = null, $options = [])
 */
class AlmacenajesTable extends Table
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

        $this->setTable('almacenajes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Almacenes', [
            'foreignKey' => 'almacene_id',
            'joinType' => 'INNER'
        ]);
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
            ->date('fechallegada')
            ->requirePresence('fechallegada', 'create')
            ->notEmpty('fechallegada');

        $validator
            ->date('fechaalmacen')
            ->requirePresence('fechaalmacen', 'create')
            ->notEmpty('fechaalmacen');

        $validator
            ->decimal('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmpty('cantidad');

        $validator
            ->scalar('lote')
            ->requirePresence('lote', 'create')
            ->notEmpty('lote');

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
        $rules->add($rules->existsIn(['almacene_id'], 'Almacenes'));
        $rules->add($rules->existsIn(['fruto_id'], 'Frutos'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
