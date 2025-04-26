# Consulta ao Signo do Zodíaco

Este é um projeto simples desenvolvido para consulta ao signo do zodíaco a partir da data de nascimento do usuário. O sistema recebe a data inserida, processa as informações e retorna o signo correspondente.

## Tecnologias Utilizadas

- **PHP:** para o processamento dos dados e manipulação do arquivo XML.
- **XML:** para armazenar as informações de cada signo, como intervalos de datas e descrição.
- **JavaScript:** utilizado para validação do formulário e exibição de mensagens de alerta quando a data não é inserida corretamente.
- **Bootstrap:** framework para estilização responsiva do layout.
- **HTML5 e CSS:** para criação da estrutura e design das páginas.

## Funcionalidade

1. O usuário preenche um formulário com a sua data de nascimento.
2. A aplicação processa a data e consulta o signo correspondente a partir de um arquivo XML.
3. Caso o usuário não insira uma data válida, um modal de alerta é exibido, solicitando que ele preencha o campo.
4. O resultado é exibido em uma nova página, mostrando o signo e uma breve descrição.

## Estrutura de Pastas
```bash
├── assets/
│   └── css/
│       └── style.css         
├── layouts/
│   └── header.php          
├── index.php                 
├── modal.php                
├── show_zodiac_sign.php      
└── signos.xml                
