<?php

namespace Etionic\Inventory\Models;

use Etionic\Inventory\Traits\InventorySkuTrait;

class InventorySku extends BaseModel
{
    use InventorySkuTrait;

    /**
     * The belongsTo item trait.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id', 'id');
    }
}
