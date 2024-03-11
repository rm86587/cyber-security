# Comandos
## Vendo as redes
- ip -br -c a

### Configurando a placa de rede
- cd /etc/network
- cp interfaces interfaces.old (copiando o arquivo de interfaces)
- nano interfaces (editando o arquivo interfaces)
- allow-hotplug = placa ativa (plug n play)
---
### Ativando a placa de rede
- allow-hotplug (nome da placa)
- iface (nome da placa) inet static
- address (ip da placa)
- service networking restart (reiniciando os serviços de rede do linux)
- init 6 (reinicia a máquina)
---
### Instalando o servidor
- apt update
- apt install apache2
- apt install net-tools
---
### Portas
- Apache: 80
 --- 
### Vendo o ip com net-tools
- ifconfig
---
### Vendo conexões ativas (sem servidores)
- netstat -nltp
---
### Parando e reiniciando o servidor
- Parar: systemctl stop ssh / systemctl stop apache2
- Reiniciar: systemctl start ssh / systemctl start apache2
---
