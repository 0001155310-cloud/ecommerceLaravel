<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produto | NovaShop</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script defer src="assets/js/script.js"></script>
</head>
<body>
  <header class="topbar">
    <div class="container nav">
      <a class="brand" href="index"><span class="brand-badge">N</span><span>NovaShop</span></a>
      <nav class="nav-links">
        <a href="catalogo">Catalogo</a>
        <a href="produto">Produto</a>
        <a href="carrinho">Carrinho</a>
        <a href="checkout">Checkout</a>
        <a href="contato">Contato</a>
      </nav>
      <div class="nav-actions"><a class="btn btn-light" href="carrinho">Ir para carrinho</a></div>
    </div>
  </header>

  <main class="page-hero">
    <div class="container page-panel product-grid">
      <div class="card"><img src="assets/img/product1.svg" alt="Tenis Urban"></div>
      <div>
        <span class="tag">Moda urbana</span>
        <h1>Tenis Urban Edition</h1>
        <p>Modelo versatil com pegada premium, visual limpo e proposta ideal para vitrine principal de um ecommerce de moda.</p>
        <div class="price" data-price="289.9" data-unit-price="289.9"></div>
        <p class="small">Parcelamento em ate 12x sem juros. Frete gratis para capitais.</p>

        <div class="list">
          <label>Cor<select><option>Branco</option><option>Preto</option><option>Areia</option></select></label>
          <label>Tamanho<select><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option></select></label>
          <label>Quantidade<input id="qty" type="number" min="1" value="1" /></label>
        </div>

        <div class="cta-row">
          <a class="btn btn-primary" href="carrinho">Adicionar ao carrinho</a>
          <a class="btn btn-light" href="checkout">Comprar agora</a>
        </div>

        <div class="summary" style="margin-top:22px;position:static">
          <div class="summary-row"><strong>Total estimado</strong><strong data-product-total></strong></div>
          <div class="summary-row"><span>Disponibilidade</span><span class="badge">Em estoque</span></div>
          <div class="summary-row"><span>SKU</span><span>NS-URBAN-001</span></div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
