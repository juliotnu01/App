<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccion Entity
 *
 * @property int $id
 * @property int $productor_id
 * @property string $direccion
 * @property int $codigopostal
 * @property int $poblacion
 * @property int $provincia
 * @property int $tipo
 *
 * @property \App\Model\Entity\Productor $productor
 */
class Direccion extends Entity
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
        '*' => true,
        'id' => false
    ];
}
