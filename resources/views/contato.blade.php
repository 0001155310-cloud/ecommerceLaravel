<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato | NovaShop</title>
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
      <div class="notice">Mensagem enviada com sucesso. Personalize este formulario para integrar com email ou CRM.</div>
      <div class="contact-grid" style="margin-top:18px">
        <section class="page-panel">
          <span class="kicker">Contato comercial</span>
          <h2>Fale com a NovaShop</h2>
          <p>Use esta pagina para atendimento, duvidas, suporte e formulários comerciais.</p>
          <p><strong>Email:</strong> contato@novashop.com</p>
          <p><strong>Telefone:</strong> +55 11 4000-0000</p>
          <p><strong>Endereco:</strong> Av. Exemplo, 1200 - Sao Paulo</p>
        </section>

        <section class="page-panel">
          <form id="contactForm" class="list">
            <label>Nome<input required type="text" placeholder="Seu nome" /></label>
            <label>Email<input required type="email" placeholder="voce@email.com" /></label>
            <label>Assunto<input required type="text" placeholder="Como podemos ajudar?" /></label>
            <label>Mensagem<textarea required placeholder="Escreva sua mensagem"></textarea></label>
            <button class="btn btn-primary" type="submit">Enviar mensagem</button>
          </form>
        </section>
      </div>
    </div>
  </main>
</body>
</html>
