<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IngredientesRecetas Model
 *
 * @property \App\Model\Table\IngredientesTable|\Cake\ORM\Association\BelongsTo $Ingredientes
 * @property \App\Model\Table\RecetasTable|\Cake\ORM\Association\BelongsTo $Recetas
 *
 * @method \App\Model\Entity\IngredientesReceta get($primaryKey, $options = [])
 * @method \App\Model\Entity\IngredientesReceta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IngredientesReceta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta findOrCreate($search, callable $callback = null, $options = [])
 */
class IngredientesRecetasTable extends Table
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

        $this->setTable('ingredientes_recetas');
        $this->setDisplayField('ingrediente_id');
        $this->setPrimaryKey(['ingrediente_id', 'receta_id']);

        $this->belongsTo('Ingredientes', [
            'foreignKey' => 'ingrediente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Recetas', [
            'foreignKey' => 'receta_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['ingrediente_id'], 'Ingredientes'));
        $rules->add($rules->existsIn(['receta_id'], 'Recetas'));

        return $rules;
    }
}
