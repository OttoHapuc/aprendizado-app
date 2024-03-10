#!/bin/bash

# Função para excluir uma linha contendo um termo espec�fico
excluir_linha() {
    arquivo="$1"
    termo="$2"

    sed -i "/$termo/d" "$arquivo"
    echo "Linha contendo '$termo' exclu�da do arquivo $arquivo."
}

# Função para alterar um termo antigo por um novo em uma linha
alterar_termo() {
    arquivo="$1"
    termo_antigo="$2"
    termo_novo="$3"

    sed -i "s/$termo_antigo/$termo_novo/" "$arquivo"
    echo "Termo '$termo_antigo' alterado para '$termo_novo' no arquivo $arquivo."
}

alterar_termo .env "DB_CONNECTION=mysql" "DB_CONNECTION=pgsql"
alterar_termo .env "DB_HOST=127.0.0.1" "DB_HOST=postgres"
alterar_termo .env "DB_PORT=3306" "DB_PORT=5432"
alterar_termo .env "DB_DATABASE=laravel" "DB_DATABASE=ead"
alterar_termo .env "DB_USERNAME=root" "DB_USERNAME=postgres"
alterar_termo .env "DB_PASSWORD=" "DB_PASSWORD=root-aprendizado"
