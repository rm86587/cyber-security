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

### Criando um chat simples

#### Abrindo a conexão do server
```
nc -lvp 1234
```
#### Conectando com o cliente
```
nc -v 10.20.23.127 1234
```

### Transferindo arquivos entre máquinas
#### Verificando o hash do arquivo criado
```
md5sum aulacp.txt
```
#### enviando o arquivo que está no servidor para o cliente
```
cat aulacp.txt | nc -lvp 1234
```
#### Recebendo o arquivo do servidor no cliente
- aqui pode-se colocar qualquer nome e extensão para se receber o arquivo, o importante é o hash do arquivo original ser igual ao do arquivo que o cliente recebeu.
```
nc -v 10.20.23.127 1234 > video.avi
```
```
md5sum video.avi
```

