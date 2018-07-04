<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $unidade
 * @property string $valor_unitario
 * @property string $quantidade
 * @property string $acuracidade_item
 * @property string $valor_total
 * @property string $codigo_barra
 * @property string $codigo
 */
class Produto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'unidade' => true,
        'valor_unitario' => true,
        'quantidade' => true,
        'acuracidade_item' => true,
        'valor_total' => true,
        'codigo_barra' => true,
        'codigo' => true
    ];
}
