<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout | NovaShop</title>
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
    </div>
  </header>

  <main class="page-hero">
    <div class="container">
      <div class="notice">Pedido simulado com sucesso. Ajuste este fluxo para conectar ao seu backend real.</div>
      <div class="checkout-grid" style="margin-top:18px">
        <section class="page-panel">
          <h2>Finalizar compra</h2>
          <form id="checkoutForm" class="list">
            <div class="grid-3">
              <label>Nome completo<input required type="text" placeholder="Seu nome" /></label>
              <label>Email<input required type="email" placeholder="voce@email.com" /></label>
              <label>Telefone<input required type="text" placeholder="(11) 99999-9999" /></label>
            </div>
            <label>Endereco<input required type="text" placeholder="Rua, numero e complemento" /></label>
            <div class="grid-3">
              <label>Cidade<input required type="text" /></label>
              <label>Estado<select><option>SP</option><option>RJ</option><option>MG</option></select></label>
              <label>CEP<input required type="text" /></label>
            </div>
            <div class="grid-3">
              <label>Forma de pagamento<select><option>Cartao de credito</option><option>Pix</option><option>Boleto</option></select></label>
              <label>Numero do cartao<input type="text" placeholder="0000 0000 0000 0000" /></label>
              <label>Validade<input type="text" placeholder="12/28" /></label>
            </div>
            <button class="btn btn-primary" type="submit">Confirmar pedido</button>
          </form>
        </section>

        <aside class="summary">
          <h3>Resumo</h3>
          <div class="summary-row"><span>2 itens</span><strong>R$ 809,80</strong></div>
          <div class="summary-row"><span>Desconto</span><strong>R$ 40,00</strong></div>
          <div class="summary-row"><span>Total final</span><strong>R$ 769,80</strong></div>
          <p class="small">Checkout demonstrativo em front-end puro. Ideal para integrar com API, gateway de pagamento e painel admin.</p>
        </aside>
      </div>
    </div>
  </main>
</body>
</html>
