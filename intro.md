# CYBERSECURITY FOR DEV 💻👾
### na prova lembrar de mudar o MAC address!!!
# Aula 11/03/2024
## CONFIGURANDO AS PORTAS DA VM:
- Adapter 1 : NAT
- Adapter 2 : Bridge
- Adapter 3 : Internal (name: fiap)
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
- Iniciar service apache2 start
- Parar: systemctl stop ssh / systemctl stop apache2 || service apache2 stop
- Reiniciar: systemctl start ssh / systemctl start apache2  || service apache2 restart

# Aula 18/03/2024
### Acessando a pasta www:
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

# Aula 25/02/2024
### Corrigindo falha de segurança
- cd /etc/apache2
- nano apache2.conf
- achar a opção diretório <Directory /var/www>
- apagar Indexes

### Acessando arquivo de configuração de segurança
- cd /etc/apache2/conf-enabled
- nano security.conf
  - limitando o acesso a informações sobre o SO:
    - ServerTokens Prod
  - limitando o acesso a informações sobre o ip e a porta:
    - ServerSignature Off
# 
### Acessando log
- cd /var/log/apache2
- cat access.log| wc -l (conta as linhas do log)
- head /etc/passwd (retorna as 10 primeiras linhas)
- head -n n /etc/passwd (retorna n primeiras linhas)
- tail /etc/passwd (retorna  10 ultimas linhas)
- tail -n n /etc/passwd (retorna n ultimas linhas)
