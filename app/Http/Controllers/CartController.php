<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private Cart $cart;

    public function index()
    {
        $this->cart = CartController::createCart();

        return view('cart.index', ['cart' => $this->cart]);
    }

    public function addProduct(Product $product)
    {
        $cart = CartController::createCart();
        if (
            $this->getCartItems()->contains(function ($value, $key) use ($product) {
                return $value->product_id == $product->id;
            })
        ) {
            CartItem::where('product_id', $product->id)->where('cart_id', $cart->id)->first()->increment('quantity');

            return redirect()->route('cart.index');
        }

        CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        return redirect()->route('cart.index');
    }

    public function removeProduct(Product $product)
    {
        $cart = CartController::createCart();
        CartItem::where('product_id', $product->id)->where('cart_id', $cart->id)->first()->delete();

        return redirect()->route('cart.index');
    }

    public static function getCartItems(): Collection
    {
        $cart = CartController::createCart();

        return $cart->products;
    }

    public static function getCartTotal()
    {
        return CartController::getCartItems()->sum(function ($cartItem) {
            return $cartItem->product->regular_price * $cartItem->quantity;
        });
    }

    /**
     * Retrieves the count of items in the cart.
     *
     * @return int The number of items in the cart.
     */
    public function getCartCount(): int
    {
        $cart = CartController::createCart();

        return $this->getCartItems()->count();
    }

    public function checkout()
    {
        return redirect()->route('cart.index');
    }

    public function updateQuantity(Product $product, int $quantity)
    {
        $this->cart = CartController::createCart();
        if ($quantity < 1) {
            return redirect()->route('cart.index')->with('error', __('Quantity cannot be less than 1'));
        }
        CartItem::where('product_id', $product->id)->where('cart_id', $this->cart->id)->first()->update(['quantity' => $quantity]);

        return redirect()->route('cart.index');
    }

    /**
     * Creates a new or exist cart.
     */
    public static function createCart(): Cart
    {
        $cart = null;
        if (auth()->check()) {
            $user = auth()->user();
            $cart = Cart::with('products.product')->firstOrCreate(['user_id', $user->id])->first();
        } else {
            $user_id = session()->getId();
            $cart = Cart::with('products.product')->firstOrCreate(['session_id' => $user_id])->first();
        }

        return $cart;
    }

    public static function clearCartItems()
    {
        $cart = CartController::createCart();
        if (! is_null($cart)) {
            $cart->products()->delete();

            return true;
        }

        return false;
    }
}
