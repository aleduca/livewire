<div>
  <div x-data="showText" x-on:showtext.window="toggle">
    <ul>
      <template x-for="product in products" :key="product.id">
        <li x-text="product.title"></li>
      </template>
    </ul>
    <template x-if="show">
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatem iste, quia exercitationem quos veniam laudantium debitis qui ex, sunt minus, sequi veritatis eveniet! Omnis id optio sint distinctio ratione?</div>
    </template>
  </div>
</div>
