# TUTORIAL INICIALIZAÇÃO DE PROJETO LARAVEL

## Requisitos

Antes da instalação *Laravel*, é necessário de outros componentes. Você precisa ter instalado:
-[*PHP*](https://php.net/)
-[*Composer*](https://getcomposer.org/)
-[*instalador do Laravel*](https://github.com/laravel/installer) 

Também será necessário o *[Node e o NPM](https://nodejs.org/)* ou [*Bundle*](https://bun.sh/) para compilar os recursos front-end do seu aplicativo.

Caso não possua instalado, comandos para instalação ⬇️

**Comando para Windows PowerShell:**
    
    #Run as administrator...
    Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))

**Comando para macOS:**

    /bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"

**Comando para Linux:**

    /bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

Apos a execução do comando, reinicie o terminal para executar o próximo código que é uma instalação do *Laravel* via *composer*.

**Instalação do Laravel**

    composer global require laravel/installer

Com todos preparativos instalados, está pronto para criação do APP *Laravel*.

## Criação e Iniciação do aplicativo 

Codigos:

    laravel new example-app

O *Instalador do Laravel* perguntará qual seu *FrameWork de Teste*, *Banco de Dados* e *Kit Inicial Preferido*, selecione suas preferências.
Após criar o aplicativo, já pode acessar servidor de desenvolvimento do *Laravel* usando a sequência de codigos a seguir:

> **Atenção**: *Cada linha do código deve ser executado **INDIVIDUALMENTE!***
> **ATENÇÃO**: *EXECUTE INDIVIDUALMENTE CADA LINHA DE CÓDIGO*

    cd example-app
    npm install
    npm run build
    composer run dev

 Pronto, projeto criado e iniciado com sucesso, estará localizado em http://localhost:0000/, para abrir pressione o *Crtl* e clique com mouse para acessar