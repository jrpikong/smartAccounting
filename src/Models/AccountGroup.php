<?php
declare(strict_types=1);
namespace Jrpikong\SmartAccounting\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class AccountGroup extends Model
{
    use HasRoles, SoftDeletes;

    protected $guarded = ['id'];

    /**
     * @return HasMany
     */
    public function account(): HasMany
    {
        return $this->hasMany(Account::class);
    }
}
