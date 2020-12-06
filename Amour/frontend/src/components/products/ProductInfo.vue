<template>
  <div class="product">
    <div class="left-column">
      <img v-bind:src="product.image">
    </div>

    <div class="right-column">
      <div class="product-description">
        <h1>{{ product.name }}</h1>
        <p>{{product.info}}</p>
      </div>

      <div class="product-configuration">
        <div class="product-color">
          <span>Цвет</span>

          <div class="color-choose">
            <div>
              <input
                data-image="beige"
                type="radio"
                id="beige"
                name="color"
                value="beige"
                checked
              />
              <label for="beige"><span></span></label>
            </div>
            <div>
              <input
                data-image="grey"
                type="radio"
                id="grey"
                name="color"
                value="grey"
              />
              <label for="grey"><span></span></label>
            </div>
            <div>
              <input
                data-image="black"
                type="radio"
                id="black"
                name="color"
                value="black"
              />
              <label for="black"><span></span></label>
            </div>
          </div>
        </div>

        <div class="cable-config">
          <span>Размер</span>

          <div class="cable-choose">
            <button class="mr-1">S</button>
            <button class="mr-1">M</button>
            <button>L</button>
          </div>
        </div>
      </div>

      <div class="product-price">
        <span>{{ product.price }} ₽</span>
        <a class="btn btn-secondary" href="#" role="button">Купить</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ProductInfo",
    props: ['product']
  }
</script>