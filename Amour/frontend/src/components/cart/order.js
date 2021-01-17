/**
 * Корзина.
 *
 * order {
 *     id: 1,
 *     userId: 1,
       productId: 1,
 *     price: 3000
 * }
 */
export default {
    orders: [],
    count: 0,
    add(order) {
        this.load()
        this.orders.push(order)
        this.count++
        this.save()
    },
    remove(order) {
        this.load()
        const index = this.orders.map((el) => {
            return el.id
        }).indexOf(order.id)

        this.orders.splice(index, 1)
        this.count--
        this.save()
    },
    load() {
        let data = localStorage.getItem('order')
        if (data !== null) {
            data = JSON.parse(data)
            this.orders = data.orders
            this.count = data.count
        }
    },
    save() {
        localStorage.setItem('order', JSON.stringify({
            orders: this.orders,
            count: this.count,
        }))
    }
}