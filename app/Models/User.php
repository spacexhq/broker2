<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use App\Models\Settings;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * Send the email verification notification.
     *
     * @return void
     */

    public function sendEmailVerificationNotification()
    {
        $settings = Settings::where('id', 1)->first();

        if ($settings->enable_verification == 'true') {
            $this->notify(new VerifyEmail);
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'l_name', 
        'email', 
        'phone', 
        'country', 
        'username'
    ];

    /**
     * The attributes that are NOT mass assignable.
     * These critical fields should only be updated through explicit methods.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'password',
        'ref_by',
        'status',
        'taxtype',
        'taxamount',
        'email_verified_at',
        'account_bal',
        'roi',
        'bonus',
        'ref_bonus',
        'withdrawotp',
        'taxcode',
        'withdrawal_code',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function dp()
    {
        return $this->hasMany(Deposit::class, 'user');
    }

    public function wd()
    {
        return $this->hasMany(Withdrawal::class, 'user');
    }

    public function tuser()
    {
        return $this->belongsTo(Admin::class, 'assign_to');
    }

    public function dplan()
    {
        return $this->belongsTo(Plans::class, 'plan');
    }

    public function plans()
    {
        return $this->hasMany(User_plans::class, 'user', 'id');
    }

    public static function search($search): \Illuminate\Database\Eloquent\Builder
    {
        if (empty($search)) {
            return static::query();
        }
        
        // Sanitize search input to prevent SQL injection
        $sanitizedSearch = filter_var($search, FILTER_SANITIZE_STRING);
        $sanitizedSearch = trim($sanitizedSearch);
        
        // Use parameter binding for safe searching
        return static::query()->where(function($query) use ($sanitizedSearch) {
            $query->where('id', 'like', '%' . $sanitizedSearch . '%')
                  ->orWhere('name', 'like', '%' . $sanitizedSearch . '%')
                  ->orWhere('username', 'like', '%' . $sanitizedSearch . '%')
                  ->orWhere('email', 'like', '%' . $sanitizedSearch . '%');
        });
    }
}
