<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;
    public function addUser($data) {
        $this->mail_address = $data['mail_address'];
        $this->password = Hash::make($data['password']);
        $this->name = $data['name'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
        $this->save();
    }
    public function getAllUser() {
        return User::orderBy('mail_address','asc')->paginate(20);
    }
}
