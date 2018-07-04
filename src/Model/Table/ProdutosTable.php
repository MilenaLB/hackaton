<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutosTable extends Table
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

        $this->setTable('produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 30)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('unidade')
            ->maxLength('unidade', 10)
            ->requirePresence('unidade', 'create')
            ->notEmpty('unidade');

        $validator
            ->scalar('valor_unitario')
            ->maxLength('valor_unitario', 15)
            ->requirePresence('valor_unitario', 'create')
            ->notEmpty('valor_unitario');

        $validator
            ->scalar('quantidade')
            ->maxLength('quantidade', 255)
            ->requirePresence('quantidade', 'create')
            ->notEmpty('quantidade');

        $validator
            ->scalar('acuracidade_item')
            ->maxLength('acuracidade_item', 30)
            ->requirePresence('acuracidade_item', 'create')
            ->notEmpty('acuracidade_item');

        $validator
            ->scalar('valor_total')
            ->maxLength('valor_total', 30)
            ->requirePresence('valor_total', 'create')
            ->notEmpty('valor_total');

        $validator
            ->scalar('codigo_barra')
            ->maxLength('codigo_barra', 30)
            ->requirePresence('codigo_barra', 'create')
            ->notEmpty('codigo_barra');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 30)
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        return $validator;
    }
}
