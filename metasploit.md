# METASPLOIT

## Login:
  msfadmin
## Senha:
  msfadmin

- Alterar a placa de rede
### Metasploit:
```
placa interna 
ip: 192.168.100.10
netmask: 255.255.255.0
```
### Kali:
```
placa interna 
ip: 192.168.100.20
netmask: 255.255.255.0
```
- Reiniciar a maquina

## Usando o nmap para verificar as portas
### Usar o nmap na GS para achar o ip 
#### Na GS nao vamos saber o login da maquina
#### Colocar ambas as maquinas em modo bridge e rodar o nmap 
- ver todos os comandos:
```
nmap -h
```
- retorna a porta, status e o servico
- buscar pelo servico e versao e atraves do db exploit buscar a vunerabilidade
```
nmap 192.168.100.10
```
