# SSH

## VERIFICAR SE A PORTA 22 ESTA ABERTA
```ss -nltp```

## ACESSANDO A PASTA DE USERS
```
cd home 
ls 
```

## ACESSANDO VIA SSH
### 1a forma de acessar:
``` ssh aluno@192.168.1.30```
#### ip da placa enp0s8 

1. Yes
2. Digitar a senha do usuario

### 2a forma de acessar:
#### atraves de chaves publicas e privadas
- entrando no usuario aluno
``` su aluno```
``` ls -la```
- criando as chaves publicas e privadas
``` ssh-keygen -t rsa ```
- vai ser criado uma pasta oculta .ssh e o arquivo id_rsa
- ignore o passo de colcoar senha
- entre na pasta .ssh e la estarao as chaves
``` cd .ssh ```
- id_rsa (privada)
- id_rsa.pub (publica)

#### fazer o mesmo no kali (cliente)

### Enviando a chave publica do cliente par ao servidor
```ssh-copy-id aluno@192.168.1.30```
- colocar a senha do usuario aluno
#### apos rodar esse comando sera criada uma pasta com as chaves autorizadas
- agora e possivel conectar sem a necessidade de por a senha
```ssh aluno@192.168.1.30```

## VUNERABILIDADES
- *Porta padrao do ssh e a 22*
- Por obrigacao trocar a porta padrao!!!

## Forma de transferir arquivos
### 1a utilizando os metodos anteriores de conexao
### 2a SCp (Security copy)
```scp nome_arquivo aluno@192.168.1.30:/home/aluno/doidera```

## SEGURANÇA
### Alterando a porta padrao
#### Arquivo padrao de configuracao do ssh
- precisar estar como root
- nano/etc/ssh/sshd_config
- descomente Port e altere o numero
- reinicie o servico:
```service ssh restart```
- conferir as portas:
```ss -nltp```
- agora para conectar precisa passar a nova porta:
```ssh aluno@192.168.1.30 -p 2244```

## Usando HYDRA para BruteForce
1ª forma:
Sabendo o usuário
```hydra -l aluno -P senhas.txt```
2ª forma:
```hydra -L usuarios.txt -P senhas.txt```

### Acessando a wordlist de senhas vazadas
```
   cd /usr/share/wordlist
   ls
   cat rockyou.txt | grep  sua_senha
```
caso esteja compactado
```
gzip -d arquivo.gz
```



# CHECKPOINT 1
- Acessar uma pagina web que esta em um servidor com uma faixa de ip diferenta da do ssh
