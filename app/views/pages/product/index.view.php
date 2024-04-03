<h1>
    Aqui estará el administrdor de productos

    <form id="productForm" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Nombre del producto">
        <textarea name="description" placeholder="Descripción del producto"></textarea>
        <input type="number" name="price" placeholder="Precio del producto">
        <input type="number" name="stock" placeholder="Cantidad en stock">
        <input type="file" name="image" accept="image/*">
        <button type="submit">Agregar producto</button>
    </form>

    <script src="<?= PAGE_PRODUCT ?>/add.js"></script>
</h1>