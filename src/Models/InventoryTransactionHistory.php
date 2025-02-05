<?php

namespace Etionic\Inventory\Models;

use Etionic\Inventory\Traits\InventoryTransactionHistoryTrait;

class InventoryTransactionHistory extends BaseModel
{
    use InventoryTransactionHistoryTrait;

    /**
     * The belongsTo transaction relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo(InventoryTransaction::class);
    }
}
