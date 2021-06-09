<?php

namespace Etionic\Inventory\Models;

use Baum\Node;

class Location extends Node
{
    /**
     * The scoped location attributes.
     *
     * @var array
     */
    protected $scoped = ['belongs_to'];

    /**
     * The hasMany stocks relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stocks()
    {
        return $this->hasMany(InventoryStock::class, 'location_id', 'id');
    }

    /**
     * Override the "default" left column name.
     *
     * @return string
     */
    public function getDefaultLeftColumnName()
    {
      return 'lft';
    }

    /**
     * Override the "default" right column name.
     *
     * @return string
     */
    public function getDefaultRightColumnName()
    {
        return 'rgt';
    }
}
