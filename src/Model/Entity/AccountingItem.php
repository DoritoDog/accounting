<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingItem Entity
 *
 * @property int $id
 * @property string $entries_per_month
 * @property string $taxpayer_price
 * @property string $non_taxpayer_price
 * @property string|null $type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class AccountingItem extends Entity
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
        'entries_per_month' => true,
        'taxpayer_price' => true,
        'non_taxpayer_price' => true,
        'type' => true,
        'created' => true,
        'modified' => true,
    ];
}
