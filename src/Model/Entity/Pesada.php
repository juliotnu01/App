<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pesada Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $fruto_id
 * @property int $albarane_id
 * @property int $categoria_id
 * @property float $bruto
 * @property float $tara
 * @property float $neto
 * @property float $euroskg
 * @property float $total
 *
 * @property \App\Model\Entity\Fruto $fruto
 * @property \App\Model\Entity\Albarane $albarane
 * @property \App\Model\Entity\Categoria $categoria
 */
class Pesada extends Entity
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
