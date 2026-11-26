<?php
declare(strict_types=1);
final class CartController
{
    public function __construct(private CartService $cart) {}
    public function index(): array { return ['title'=>'Корзина','lines'=>$this->cart->lines(),'total'=>$this->cart->total()]; }
    public function add(): array { $this->cart->add((int)($_POST['product_id']??0)); $this->redirect(); }
    public function update(): array { $this->cart->update((int)($_POST['product_id']??0),(int)($_POST['quantity']??0)); $this->redirect(); }
    public function remove(): array { $this->cart->remove((int)($_POST['product_id']??0)); $this->redirect(); }
    private function redirect(): never { header('Location: /cart'); exit; }
}
