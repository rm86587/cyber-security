observações
• Adapter 1:  NAT
• Adapter 2: Bridged Intel
• Adapter 3: Internal (name: fiap)
• 192.168.1.10 - servidor
• 192.168.1.20 - cliente
• > = overwrite
• >> = append

ver redes
1. ip -br -c a

configurar as placas de redes
1. cd /etc/network
2. nano interfaces
3. allow-hotplug {placa} / iface {placa} inet static / address 192.168.1.10
4. service networking restart
5. init 6

ligar ou desligar placas de rede
1. ifup {placa} OU ifdown {placa}

instalar o apache
1. apt update
2. apt install apache2
3. apt install net-tools ???

checar ip com net-tools
1. ifconfig ??? ("ip a" já faz isso)

conexoes ativas
1. netstat -nltp

reiniciar servidores
1. service apache2 start/stop/restart OU systemctl start/stop/restart apache2

arquivos do server
1. cd /var/www

configurações do apache2

1. cd /etc/apache2
2. nano apache2.conf (fazer backup)
3. remover "Indexes" dentro de Directory www em apache2.conf (oculta a indexacao dos arquivos para o cliente)
4. service apache2 restart

1. cd /etc/apache2/conf-enabled
2. nano security.conf (fazer backup)
3. trocar ServerTokens para "Prod" e ServerSignature para "Off"
4. service apache2 restart

escrever em arquivo
1. echo "texto" >> {arquivo}

contar linhas de um arquivo
1. cat {arquivo} | wc -l
apenas 10 primeiras ou últimas linhas
1. cat {arquivo} | head/tail OU head/tail {arquivo}
apenas x linhas
1. cat {arquivo} | head/tail -n x OU head/tail -n 2 {arquivo}

ver logs do apache2
1. cd /var/log/apache2
2. head -n 4 access.log


apt install netcat

python3 -m http.server 8080

GET / HTTP/1.0

printf "GET / HTTP/1.0\r\n\r\n" | nc 10.20.30.127 80

ABRIR CHAT
nc -lvp 1234

CONECTAR
nc -v 10.20.23.127 1234

md5sum aulacp.txt

cat aulacp.txt | nc -lvp 1234

nc -v 10.20.23.127 1234 > video.avi