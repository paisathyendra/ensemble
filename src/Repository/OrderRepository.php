<?php

namespace Ensemble\Repository;

use PDO;

class OrderRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * OrderRepository constructor
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    /**
     * Fetch Orders
     * @return array
     */
    public function getOrders(){
        $sql = 'SELECT * FROM orders';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    /**
     * Fetch Order By Id
     * @param $id
     * @return mixed
     */
    public function getOrderById($id){
        $sql = 'SELECT * FROM orders WHERE order_id = :order_id';
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':order_id' => $id));
        return $statement->fetch();
    }

    public function create() {
    }
}