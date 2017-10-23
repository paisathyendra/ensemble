<?php

return [
    ['GET', '/orders', ['Ensemble\Controllers\OrderController', 'fetchOrders']],
    ['GET', '/orders/{id:\d+}', ['Ensemble\Controllers\OrderController', 'fetchOrderById']],
    ['POST', '/orders', ['Ensemble\Controllers\OrderController', 'insertOrder']],
];
