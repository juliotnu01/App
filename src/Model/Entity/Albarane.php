<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Albarane Entity
 *
 * @property int $id
 * @property string $numeroalba
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $productor_id
 * @property int $fruto_id
 * @property int $facturado
 *
 * @property \App\Model\Entity\Productor $productor
 * @property \App\Model\Entity\Fruto $fruto
 * @property \App\Model\Entity\Pesada[] $pesadas
 */
class Albarane extends Entity
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
