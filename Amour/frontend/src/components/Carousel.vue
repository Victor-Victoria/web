<template>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/c3.jpg" alt="Carousel1" />
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Смотреть все модели Amour</h1>
            <p>Сравнить и выбрать</p>
            <p>
              <router-link
                v-bind:to="{ name: 'Catalog' }"
                class="btn btn-lg btn-light"
                role="button">Перейти в каталог</router-link>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/c3.jpg" alt="Carousel2" />
        <div class="container">
          <div class="carousel-caption">
            <h1>NEW! Боди Amour</h1>
            <p>Доступно к заказу</p>
            <p>
              <router-link
                v-bind:to="{ name: 'Product', params: { url: 'bodi-s-otkrytoj-spinoj' } }"
                class="btn btn-lg btn-light"
                role="button">Смотреть</router-link>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/c3.jpg" alt="Carousel3" />
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>О нас</h1>
            <p>История бренда Amour</p>
            <p>
              <a class="btn btn-lg btn-light" href="#about" role="button"
                >Подробнее</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#myCarousel"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#myCarousel"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</template>

<script>
export default {
  name: "Carousel",
};
</script>