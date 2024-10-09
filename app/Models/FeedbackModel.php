<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';
    protected $allowedFields = ['feedback'];
    protected $returnType = 'array';
    protected $useTimestamps = false;  // Adjust based on your table's design
}
