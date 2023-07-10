<template>
    <section id="home-area">
        <div class="container-fluid">
            <div class="row">
                <aside class="col-lg-9">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(cart, index) in cartList" :key="index">
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img :src="'/images/'+cart.product.image_name" class="img-sm" style="height: 100px"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{ cart.product.name }}</a>
<!--                                                <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p>-->
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" :value="cart.qty">
                                    </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">{{ cart.price * cart.qty | formatPrice }}</var> <small class="text-muted"> {{ cart.price | formatPrice }} each </small> </div>
                                    </td>
                                    <td class="text-right d-none d-md-block">
                                        <a href="" class="btn btn-light" data-abc="true" style="color: #ffffff;background-color: #F44336;border-color: #f8f9fa;font-size: 12px"> Remove</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group"> <label>Have coupon?</label>
                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Sub Total:</dt>
                                <dd class="text-right ml-3">{{ subtotal | formatPrice }}</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Estimated Shipping:</dt>
                                <dd class="text-right text-danger ml-3"> $2.95</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b ml-3"><strong>{{ total | formatPrice }}</strong></dd>
                            </dl>
                            <hr> <a href="/checkout" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Checkout </a> <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Cart",
    data() {
        return {
            subtotal: ''
        }
    },
    props: {
        cartList: {
            required: true,
            type: Object
        }
    },
    mounted () {
        let sum = 0
        for(let i = 0; i < this.cartList.length; i++) {
            sum += this.cartList[i].price * this.cartList[i].qty;
        }
        this.subtotal = sum
    },
    computed: {
        total() {
            return this.subtotal + 2.95
        }
    }
};

</script>

<style scoped>

</style>

