<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Order;
use function GuzzleHttp\Psr7\str;

class OrderController extends Controller
{
    public function index() {
        $cart = CartController::getCart();

        return view('order.index', compact('cart'));
    }

    public function create() {
        $order = request()->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required'
        ]);

        $dividedOrders = $this->divideOrderByOwner($order);
        $this->saveOrders($dividedOrders);
        CartController::clearCart();
        return redirect(route('shop.index'));
    }

    private function saveOrders($userOrders) {
        foreach ($userOrders AS $userOrder) {
            $orderDetails = (object) $userOrder[0]["order"];

            $products = array();
            foreach ($userOrder AS $entry) {
                array_push($products, (object) $entry["product"]);
            }

            $order = [
                'name' => $orderDetails->first_name,
                'surname' => $orderDetails->surname,
                'address' => $orderDetails->address,
                'city' => $orderDetails->city,
                'zip_code' => $orderDetails->zip_code,
                'user_id' => $products[0]->user_id
            ];

            $order = Order::create($order);
        }
    }

    private function divideOrderByOwner($order) {
        $cart = CartController::getCart();

        $orders = array();

        foreach ($cart as $record) {
            $userID = $record['entry']['product']->user_id;
            if (!array_key_exists($userID, $orders)) {
                $orders += [$userID => array()];
            }

            array_push($orders[$userID], [
                'order' => $order,
                'product' => $record['entry']['product'],
                'amount' => $record['entry']['amount']
            ]);
        }
        return $orders;
    }
}
