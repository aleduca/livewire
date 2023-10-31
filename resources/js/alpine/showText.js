export default function showText(){
  return {
    show:false,
    products: [],
    toggle(){
      this.show = !this.show
    },
    init(){
      this.fetchProducts();
    },
    async fetchProducts() {
      try {
          const response = await fetch('https://fakestoreapi.com/products');
          if (!response.ok) {
              throw new Error("Erro ao buscar produtos");
          }
          this.products = await response.json();
      } catch (error) {
          console.error("Erro ao buscar produtos:", error);
      }
  }
  }
}