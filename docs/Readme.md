**Shopping Cart**

Caio Garbin Silva - 1988521
João Vitor Alves - 1993855

**Funcionalidades**

**Adicionar item ao carrinho.**

Verifica se o produto existe e possui estoque suficiente.
Diminui o estoque do produto e adiciona ao carrinho com quantidade e subtotal.

**Remover item do carrinho.**

Verifica se o item está no carrinho.
Remove o item e devolve a quantidade ao estoque.

**Listar itens do carrinho.**

Exibe os produtos adicionados, mostrando nome, quantidade, subtotal e total.

**Calcular total do carrinho.**

Soma todos os subtotais dos itens adicionados.
Aplica desconto se houver.

**Aplicar desconto.**

Aceita o cupom DESCONTO10, aplicando 10% de desconto no valor final.

**Regras de Negócio**

Um produto não pode ser adicionado além da quantidade disponível em estoque.
O estoque é reduzido quando o produto é adicionado ao carrinho.
O estoque é restaurado quando o produto é removido do carrinho.
O desconto só é aplicado se o cupom informado for válido (DESCONTO10).
Apenas um cupom pode ser aplicado por vez.

# Como rodar o projeto

- Inicie o Xampp
  
- **Clique em "Start" no Apache**
Status muda de vermelho para verde
PID (Process ID) é atribuído
Portas ficam ativas

- **Teste o PHP:**
Digite: http://localhost/dashboard
Verifique informações do sistema

**A pasta C:\xampp\htdocs\ é onde você deve colocar o projeto**

**Abra o navegador**
. Digite na barra de endereço: http://localhost/shopping_cart/
. Resultado: Sua página PHP deve ser carregada e exibida
