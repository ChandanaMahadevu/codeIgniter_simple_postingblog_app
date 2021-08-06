<?php namespace App\Models;

use CodeIgniter\Model;

class Blogmodel extends Model {
    protected $table = 'posts';
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getposts($slug = null) {
        if (!$slug) {
           return $this->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }
}
