<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Encurtador de Links</title>
</head>
<body>
  <h1>Encurtar Link</h1>
  <form id="form">
    <input type="url" id="url" placeholder="Cole sua URL aqui" required>
    <button type="submit">Encurtar</button>
  </form>
  <p id="resultado"></p>

  <script>
    document.getElementById('form').addEventListener('submit', async (e) => {
      e.preventDefault();
      const url = document.getElementById('url').value;

      const res = await fetch('/api/encurtar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ url })
      });

      const data = await res.json();
      document.getElementById('resultado').textContent = res.ok
        ? 'Link encurtado: ' + data.link_encurtado
        : 'Erro: ' + data.erro;
    });
  </script>
</body>
</html>
