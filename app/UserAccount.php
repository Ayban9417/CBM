<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class UserAccount extends Model
{
    // use EncryptedAttribute;
    
    protected $table = "user_accounts";

    protected $guarded = ['id'];

    // protected $encryptable = [
    //     'account_no'

    // ];

    
}
