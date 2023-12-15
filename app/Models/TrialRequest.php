<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TrialRequest extends Model
{
    // use HasFactory;
    protected $fillable = [
        'firstname', 'lastname', 'corporate_email', 'job_title', 'company_name', 'industry', 'phone_number', 'agree',
    ];

    public static function saveWithRawSQL($data)
    {
        // Simpan data ke database menggunakan raw SQL
        DB::statement("
            INSERT INTO trial_requests
            (firstname, lastname, corporate_email, job_title, company_name, industry, phone_number, agree, created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
        ", [
            $data['firstname'],
            $data['lastname'],
            $data['corporate_email'],
            $data['job_title'],
            $data['company_name'],
            $data['industry'],
            $data['phone_number'],
            $data['agree'],
        ]);
    }
}
