# Aula 11/03/2024
## Vendo as redes
- ip -br -c a

## Configurando as redes
- cd /etc/network
- cp interfaces interfaces.old (copiando o arquivo de interfaces)
- nano interfaces (editando o arquivo interfaces)
- allow-hotplug = placa ativa (plug n play)

## Configurando o servidor


### Ativando a placa de rede
- allow-hotplug (nome da placa)
- iface (nome da placa) inet static
- address (ip da placa)
- service networking restart (reiniciando os serviços de rede do linux)
- init 6 (reinicia a máquina)

### Instalando o servidor
- apt update
- apt install apache2
- apt install net-tools

### Portas
- Apache: 80

### Vendo o ip com net-tools
- ifconfig

### Vendo conexões ativas (sem servidores)
- netstat -nltp

### Parando e reiniciando o servidor
- Parar: systemctl stop ssh / systemctl stop apache2 || service apache2 stop
- Reiniciar: systemctl start ssh / systemctl start apache2

# Aula 18/03/2024
### acessando a pasta www:
- cd /var/www
  #### movendo o index.html (mostrando erro e vunerabilidade ao mover o arquivo padrão do projeto)
  - Todo projeto deve ter um arquivo de segurança!
  - mv index.html ..
  ### Falhas:
  É mostrado na tela:
  - Versão do servidor;
  - Distribuição;
  - IP;
  - Porta do servidor
  - Todos arquivos de configuração
