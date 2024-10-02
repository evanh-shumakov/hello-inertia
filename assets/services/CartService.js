import { reactive } from 'vue';

/**
 * @typedef {Object} CartItem
 * @property {number} id
 * @property {string} name
 * @property {string} description
 * @property {string} image
 * @property {float} price
 */

class CartService {
    constructor() {
        this._key = 'cart';
        this._items = reactive(this._loadItems());
    }

    /**
     * @return {CartItem[]}
     */
    getItems() {
        return this._items;
    }

    /**
     * @return float
     */
    getTotalPrice() {
        return this._items.reduce((total, pizza) => total + pizza.price, 0).toFixed(2);
    }

    /**
     * @param {CartItem} item
     */
    addItem(item) {
        this._items.push(item)
        this._saveItems(this.items);
    }

    clearCart() {
        this._items.length = 0;
        localStorage.removeItem(this._key);
    }

    /**
     * @return {CartItem[]}
     */
    _loadItems() {
        const items = localStorage.getItem(this._key);
        return items ? JSON.parse(items) : [];
    }

    _saveItems() {
        localStorage.setItem(this._key, JSON.stringify(this._items));
    }
}

export const cartService = new CartService();