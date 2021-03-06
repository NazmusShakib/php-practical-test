<?php

class TaskOne extends DB {

    protected function getTaskOne() {
        $sql =  "SELECT name AS 'Category Name', COUNT(itemnumber) AS 'Total Items'
        FROM category AS cat LEFT OUTER JOIN Item_category_relations AS icr
        ON icr.categoryid=cat.id
        GROUP BY cat.id,name ORDER BY 2 DESC;";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0 ) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}