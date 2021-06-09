<?php

namespace Etionic\Inventory\Models;

use Etionic\Inventory\Traits\InventoryTransactionTrait;
use Etionic\Inventory\Interfaces\StateableInterface;

class InventoryTransaction extends BaseModel implements StateableInterface
{
    use InventoryTransactionTrait;

    /**
     * The belongsTo stock relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(InventoryStock::class, 'stock_id', 'id');
    }

    /**
     * The hasMany histories relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function histories()
    {
        return $this->hasMany(InventoryTransactionHistory::class, 'transaction_id', 'id');
    }
}
