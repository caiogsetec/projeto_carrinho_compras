<?php

class Cart
{
    private array $items = [];
    private float $discount = 0;

    public function addItem(Product $product, int $quantity): string
    {
        if (!$product->reduceStock($quantity)) {
            return "Estoque insuficiente do {$product->getName()}.\n";
        }

        $subtotal = $product->getPrice() * $quantity;

        $this->items[$product->getId()] = [
            'product' => $product,
            'quantity' => $quantity,
            'subtotal' => $subtotal
        ];

        return "{$product->getName()} adicionado ao carrinho.\n";
    }

    public function removeItem(int $productId): string
    {
        if (!isset($this->items[$productId])) {
            return "Produto não encontrado no carrinho.\n";
        }

        $item = $this->items[$productId];
        $item['product']->increaseStock($item['quantity']);
        unset($this->items[$productId]);

        return "Produto removido do carrinho.\n";
    }

    public function listItems(): void
    {
        echo "Itens no carrinho:\n";
        foreach ($this->items as $item) {
            echo "- {$item['product']->getName()} | Qty: {$item['quantity']} \n";
        }
        echo "Total: \$" . $this->calculateTotal() . "\n";
    }

    public function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['subtotal'];
        }

        if ($this->discount > 0) {
            $total *= (1 - $this->discount);
        }

        return $total;
    }

    public function applyDiscount(string $coupon): string
    {
        if ($coupon === "DESCONTO10") {
            $this->discount = 0.10;
            return "Cupom aplicado com sucesso!\n";
        }
        return "Cupom invalido.\n";
    }
}

