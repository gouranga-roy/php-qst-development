<?php
/**
 * Data store
 */
function store(string $table, array $data) {

    // get all cols
    $colList = array_keys($data);
    $colsName = implode(', ', $colList);

    // get dada values
    $dataValues = array_values($data);

    $sql = "INSERT INTO $table($colsName) VALUES(?, ?, ?, ?, ?)";
    $statement = connect()->prepare($sql);
    $statement->execute($dataValues);
}

?>