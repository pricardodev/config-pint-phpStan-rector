![Laravel Logo](https://picperf.io/https://laravelnews.s3.amazonaws.com/images/phpstan.jpg)

# Ferramentas de Análise de Código no Laravel

Este repositório contém as configurações e explicações sobre como usar três ferramentas poderosas para manter seu código Laravel limpo, eficiente e seguro: **Laravel Pint**, **Laravel Stan** e **Rector**.

---

## 1. Laravel Pint: Formatação de Código Consistente

### Descrição
O **Laravel Pint** é uma ferramenta para formatação de código baseada no **PHP-CS-Fixer**. Ele aplica regras de formatação para garantir que seu código siga padrões consistentes, melhorando a legibilidade e a manutenção.

### Como Usar
1. Instale o Pint via Composer:
   ```bash
   composer require laravel/pint --dev
   ```

2. Execute o comando para formatar o código:
   - Para formatar todo o projeto:
     ```bash
     ./vendor/bin/pint
     ```
   - Para formatar um diretório específico:
     ```bash
     ./vendor/bin/pint /dir
     ```

### O que Acontece no Código?
- Ajusta a indentação, alinhamento de operadores, espaçamento entre as linhas e outras regras de estilo.
- **Não altera a lógica do código**, apenas a aparência.

---

## 2. Laravel Stan: Análise Estática de Código

### Descrição
O **Laravel Stan** é uma ferramenta de análise estática que detecta problemas de código antes de você executá-lo. Ele verifica tipos de dados, erros de tipagem e outras falhas no código, ajudando a evitar bugs.

### Como Usar
1. Instale o Laravel Stan via Composer:
   ```bash
   composer require "larastan/larastan:^3.0" --dev
    ```

2. Execute o comando para analisar o código:
   - Para analisar todo o projeto (cuidado: consome muita memória):
     ```bash
     ./vendor/bin/phpstan analyse .
      ```
   - Para analisar um diretório específico:
     ```bash
     ./vendor/bin/phpstan analyse /dir
     ```
   - Para definir um limite de memória (exemplo: 2GB):
     ```bash
     ./vendor/bin/phpstan analyse /dir --memory-limit=2G
     ```

### Contras
- Pode gerar muitos alertas se o código não seguir boas práticas de tipagem.
- Requer configuração cuidadosa para evitar falsos positivos.

### O que Acontece no Código?
- Verifica erros de tipagem, uso incorreto de métodos e práticas de codificação inseguras.
- **Não altera o código**, mas gera relatórios detalhados para correções.

---

## 3. Rector: Refatoração Automática de Código

### Descrição
O **Rector** é uma ferramenta de refatoração automática que aplica padrões consistentes e corrige problemas em seu código, como métodos obsoletos e melhorias de tipagem de parâmetros. Ele também pode ajudar a atualizar seu código para versões mais recentes do PHP ou Laravel.

### Como Usar
1. Instale o Rector via Composer e a pacote especifico para laravel:
   ```bash
   composer require rector/rector --dev
   composer require rector/rector-laravel --dev
   ```

2. Execute o comando para refatorar o código:
   - Para refatorar um diretório específico:
     ```bash
     ./vendor/bin/rector process /dir
     ```

### Contras
- O uso excessivo pode gerar mudanças inesperadas no código, por isso, é importante revisar as alterações.
- A configuração das regras pode ser complexa para quem não está familiarizado com a ferramenta.

### O que Acontece no Código?
- Aplica mudanças automáticas para melhorar a qualidade do código.
- Pode adicionar ou melhorar a tipagem, corrigir métodos obsoletos e alterar o formato do código, dependendo das regras definidas.
