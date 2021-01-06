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
    // total: 0,
    // id: null,
    // userId: null,
    // productId: null,
    // price: null,
    add(order) {
        // localStorage.setItem('order', JSON.stringify(data))
        // this.id = data.id
        // this.userId = data.userId
        // this.productId = data.productId
        // this.price = data.price
        this.load()
        this.orders.push(order)
        this.count++
        // this.total += order.price
        this.save()
    },
    remove(order) {
        // localStorage.removeItem('order')
        // this.id = null
        // this.userId = null
        // this.productId = null
        // this.price = null
        this.load()
        const index = this.orders.map((el) => {
            return el.id
        }).indexOf(order.id)

        this.orders.splice(index, 1)
        this.count--
        // this.total -= order.price
        this.save()
    },
    load() {
        // let data = localStorage.getItem('order')
        // if (data !== null) {
        //     data = JSON.parse(data)
        //     this.id = data.id
        //     this.userId = data.userId
        //     this.productId = data.productId
        //     this.price = data.price
        // }
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
            // total: this.total,
        }))
    }
}