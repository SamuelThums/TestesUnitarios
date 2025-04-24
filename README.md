# Testes Unitários com PHPUnit

Este repositório foi feito para Testes Unitarios da materia de Engenharia de Software ensinada pelo professor Roberson Junior Fernandes Alves.

Dupla: Samuel F B Thums e Leonardo M B Thums

## 📋 Descrição

# Testes Unitários PHP com PHPUnit

Projeto demonstrando testes unitários para funções básicas em PHP utilizando PHPUnit. Inclui:

- **Funções testadas**:
  - Verificação de número par/ímpar
  - Cálculo de fatorial (com tratamento de erro para negativos)
  - Detecção de palíndromos (ignorando caracteres especiais e case)
  - Conversão Fahrenheit para Celsius
  - Cálculo de descontos (com validação de valores negativos)

- **Características**:
  - Testes cobrem casos válidos e inválidos
  - Verificação de exceções esperadas
  - Exemplos práticos de asserções PHPUnit

## 🚀 Como executar

1. Clone o repositório:
```bash
git clone https://github.com/SamuelThums/TestesUnitarios
```

2. Instale as dependências:
```bash
composer
```

3. Execute os testes:
```bash
./vendor/bin/phpunit tests
```

## 📂 Estrutura do projeto
```
testes-unitarios-php/
├── src/
│   └── Funcoes.php          # Código fonte das funções testadas
├── tests/
│   └── FuncoesTest.php      # Testes unitários
├── vendor/                  # Dependências (gerado pelo composer)
├── composer.json            # Configuração do projeto (o composer)
└── README.md                # Este arquivo
```
