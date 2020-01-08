<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart)
	{
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id)
	{

		if ($item->Giakhuyenmai == 0) {
			$giohang = ['qty' => 0, 'price' => $item->Giatien, 'item' => $item];
		} else {
			$giohang = ['qty' => 0, 'price' => $item->Giakhuyenmai, 'item' => $item];
		}

		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		if ($item->Giakhuyenmai == 0) {
			$giohang['price'] = $item->Giatien * $giohang['qty'];
		} else {
			$giohang['price'] = $item->Giakhuyenmai * $giohang['qty'];
		}

		$this->items[$id] = $giohang;
		$this->totalQty++;
		if ($item->Giakhuyenmai == 0) {
			$this->totalPrice += $item->Giatien;
		} else {
			$this->totalPrice += $item->Giakhuyenmai;
		}
	}
	//xóa 1
	public function reduceByOne($id)
	{
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if ($this->items[$id]['qty'] <= 0) {
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id)
	{
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
