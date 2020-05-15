<?php

class ViewTaskOne extends TaskOne {

    public function showTaskOne() {
        $data = $this->getTaskOne();
        return $data;
    }
}