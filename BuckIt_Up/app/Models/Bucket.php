<?php
namespace App\Models;

use DB;

class Bucket extends Model {
    protected static $table = 'bucket';

    public function delete() {
        DB::delete('delete from bucket where id = ?' [$this->id]);
    }

}