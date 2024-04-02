<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UnionMember extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'union_members';
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role',
    ];

    // Phương thức trả về tên trường chứa ID của người dùng
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    // Phương thức trả về ID của người dùng
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    // Phương thức trả về password của người dùng
    public function getAuthPassword()
    {
        return $this->password;
    }

    // (Optional) Phương thức kiểm tra xem một mật khẩu đã được mã hóa theo cách nào
    public function getAuthPasswordMethod()
    {
        return 'password';
    }

    // (Optional) Phương thức kiểm tra xem người dùng có được xác minh không
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    // (Optional) Phương thức set giá trị cho token ghi nhớ
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    // (Optional) Phương thức trả về tên của cột lưu trữ token ghi nhớ
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
