<?php

namespace Etionic\Inventory\Models;

use Etionic\Inventory\Traits\InventoryStockMovementTrait;

class InventoryStockMovement extends BaseModel
{
    use InventoryStockMovementTrait;

    protected $casts = [
        'serial' => 'array',
    ];

    /**
     * The belongsTo stock relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stock()
    {
        return $this->belongsTo(InventoryStock::class);
    }
}
