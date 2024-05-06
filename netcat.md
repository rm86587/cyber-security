# CYBERSECURITY FOR DEV 💻👾
## NETCAT

### Instalando
```
apt install netcat
```

### Iniciando um servidor python
```
python3 -m http.server 8080
```

### Verificando os métodos que o servidor aceita
```
GET / HTTP/1.0
```

### Contornando a restrição do APACHE
```
printf "GET / HTTP/1.0\r\n\r\n" | nc 10.20.23.127 80
```
