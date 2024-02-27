<?php
declare(strict_types=1);

namespace Jrpikong\SmartAccounting\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jrpikong\SmartAccounting\Enum\AccountType;
use Jrpikong\SmartAccounting\Enum\StatusFlow;

class SubmissionFlow extends Model
{

    protected $guarded = ['id'];

    protected $casts = [
        'title' => StatusFlow::class,
        'type'  => AccountType::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
