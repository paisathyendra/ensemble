<?php

namespace Ensemble\Controllers;

use Http\Request;
use Http\Response;
use PDO;
use Ensemble\Repository\OrderRepository;

class OrderController
{
    /**
     * @var Request
     */
	private $request;

    /**
     * @var Response
     */
	private $response;

    /**
     * @var PDO
     */
	private $pdo;

    /**
     * @var OrderRepository
     */
	private $orderRepo;

    /**
     * Order constructor.
     * @param Request $request
     * @param Response $response
     * @param OrderRepository $orderRepo
     * @param PDO $pdo
     */
	public function __construct(Request $request, Response $response, OrderRepository $orderRepo, PDO $pdo){
		$this->request = $request;
        $this->response = $response;
        $this->orderRepo = $orderRepo;
        $this->pdo = $pdo;
	}

    /**
     * Fetch Orders
     */
	public function fetchOrders() {
        $orders = $this->orderRepo->getOrders();
        $this->response->setContent(json_encode($orders));
    }

    /**
     * Fetch Order By Id
     */
    public function fetchOrderById($params) {
        $order = $this->orderRepo->getOrderById($params['id']);
        $this->response->setContent(json_encode($order));
    }

    public function insertOrder() {
        print_r($this->request);exit;
    }

}