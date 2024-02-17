<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable 
{
    use HasFactory, Notifiable, searchableTrait, HasRoles;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [];

    protected $searchable = [
        'columns' => [
            'users.full_name' => 10,
            // 'users.username' => 10,
            'users.email' => 10,
            'users.phone' => 10,
        ],
    ];

    const ROLE_USER = 3;
    const ROLE_DOCTOR = 2;

    public function isAdminOrSupervisor()
    {
        return auth()->user()->hasRole('admin') || auth()->user()->hasRole('supervisor');
    }

    /*27jul23*/
    public function isUser()
    {
        return auth()->user()->hasRole('user');
    }

    public function isAffiliate() 
    {

        return auth()->user()->hasRole('affiliate');
        
    }
    /*27jul23*/

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function ordersPaid(): HasMany
    {
        return $this->hasMany(Order::class)
            ->whereIn('order_status', [Order::PAID]);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function getStatusAttribute()
    {
        return $this->attributes['status'] == 1 ? 'Active' : 'Inactive';
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function rated(Product $product)
    {
        return $this->ratings->where('product_id', $product->id)->isNotEmpty();
    }

    public function productRating(Product $product)
    {
        return $this->rated($product) ? $this->ratings->where('product_id', $product->id)->first() : NULL;
    }

    public function ratedPurches()
    {
        return $this->belongsToMany(Product::class)->withPivot(['is_paid'])->wherePivot('id_paid', true);

    }

    public function favProduct()
    {
        return $this->belongsToMany(Product::class, 'favorites')->withTimestamps();
    }
    public function deliveryAddress()
    {
        return $this->hasOne(Delivery_address::class, 'user_id','id');
    }

    // public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
    // { 
    //     return 'TEST 23234';
    // }

    // public function addresss()
    // {
    //     return $this->hasOne(UserAddress::class, 'user_id', 'id');
    // }
    public function addresss(){
        return $this->hasOne(UserAddress::class,'user_id','id');
      }

}
