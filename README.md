# Tema Portal do Cliente - Versão Final: Este tema foi desenvolvido para o Teste Wordpress Action Labs.

>> Link para demonstração ao vivo: https://dayanags.page.gd

## Estrutura de Arquivos Principal

* **front-page.php**: Gerencia a Home Page. Exibe um grid de 3 colunas com posts em ordem ascendente (do 1º ao último).
* **single.php**: Layout dos posts internos com efeito de sobreposição (overlap) e ícones personalizados.
* **page-sobre-nos.php**: Modelo de página com tipografia de destaque (64px/40px).
* **functions.php**: Responsável pelo carregamento de fontes do Google, suporte a miniaturas e versionamento automático de CSS.

## Ajustes Finos Realizados

### 1. Sistema de Cache
Implementei um sistema de versionamento automático no `functions.php` usando a função `time()`. Isso força o navegador a carregar o CSS novo em cada atualização, evitando que o layout antigo fique "preso" no cache.

### 2. Responsividade Mobile
* Grid da Home passa de 3 para 1 coluna em telas menores.
* Remoção de margens negativas na página "Sobre Nós" para evitar sobreposição com o header.
* Ajuste de `flex-wrap` nas tags do post para evitar que o conteúdo "vaze" para fora da tela.

### 3. Ordem dos Cards
A query da Home foi modificada (`'order' => 'ASC'`) para que o primeiro post publicado seja sempre o primeiro a aparecer no topo da lista.

### 4. Logo Cliente
A logo possui bordas dinâmicas via `display: inline-block`, garantindo que o contorno branco acompanhe apenas o tamanho do texto, sem sobras indesejadas no desktop ou mobile.

## Como instalar novos recursos
Caso precise adicionar novos ícones ou imagens, utilize a pasta:
`assets/imagens/`

---
