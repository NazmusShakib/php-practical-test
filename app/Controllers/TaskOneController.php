<?php
namespace App\Controllers;;

use App\Models\TaskOne;

class TaskOneController extends TaskOne {

    public function showTaskOne() {
        $data = $this->getTaskOne();
        return $data;
    }
}