<?php
namespace Classes;

use Classes\TaskOne;

class ViewTaskOne extends TaskOne {

    public function showTaskOne() {
        $data = $this->getTaskOne();
        return $data;
    }
}