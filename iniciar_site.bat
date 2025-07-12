@echo off

cd /d "Seu Diretório dos Arquivos"
REM Navega até o diretório do projeto.

start http://localhost:8000
REM Abre o navegador padrão e acessa o site local.

php -S localhost:8000
REM Inicia o servidor embutido do PHP.
