<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Almacenes Model
 *
 * @property \App\Model\Table\FrutosTable|\Cake\ORM\Association\BelongsTo $Frutos
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\AlmacenajesTable|\Cake\ORM\Association\HasMany $Almacenajes
 *
 * @method \App\Model\Entity\Almacene get($primaryKey, $options = [])
 * @method \App\Model\Entity\Almacene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Almacene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Almacene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Almacene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Almacene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Almacene findOrCreate($search, callable $callback = null, $options = [])
 */
class AlmacenesTable extends Table
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

        $this->setTable('almacenes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Frutos', [
            'foreignKey' => 'fruto_id'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id'
        ]);
        $this->hasMany('Almacenajes', [
            'foreignKey' => 'almacene_id'
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
            ->scalar('nombre')
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre')
            ->add('nombre', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->decimal('max')
            ->requirePresence('max', 'create')
            ->notEmpty('max');

        $validator
            ->decimal('cantidad')
            ->allowEmpty('cantidad');

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
        $rules->add($rules->isUnique(['nombre']));
        $rules->add($rules->existsIn(['fruto_id'], 'Frutos'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
