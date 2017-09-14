<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fruto Entity
 *
 * @property int $id
 * @property string $variedad
 *
 * @property \App\Model\Entity\Albarane[] $albaranes
 * @property \App\Model\Entity\Almacenaje[] $almacenajes
 * @property \App\Model\Entity\Almacene[] $almacenes
 * @property \App\Model\Entity\Fcpconfig[] $fcpconfigs
 * @property \App\Model\Entity\Pesada[] $pesadas
 */
class Fruto extends Entity
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