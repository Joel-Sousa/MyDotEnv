<?php

    function createAndLoadEnv($path)
    {
        $envVars = "ENV=env\n";
        $envVars .= "ENV1=env\n";

        // Cria o .env.example se ele nao existir
        if(!file_exists('.env'))
            file_put_contents('.env', $envVars);

        if (!file_exists($path)) {
            throw new Exception(".env não encontrado: $path");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            // Ignorar comentários
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            // Quebrar chave=valor
            list($key, $value) = explode('=', $line, 2);

            $key = trim($key);
            $value = trim($value);

            // Retira as aspas duplas do valor
            $value = str_replace('"', '', $value);

            // Definir nas variáveis de ambiente
            putenv("$key=$value");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }

    createAndLoadEnv(dirname(__DIR__, 4).'/.env');
