# dovecot_ident

Plugin para Roundcube =<1.4

Plugin que usa o IP real ao fazer login no roundcube. Passar algumas informações de log para o servidor imap remoto.

Isso pode ser usado com, por exemplo, dovecot para registrar o endereço IP de conexão real em vez do endereço do servidor da web.

Para usar isso no dovecot, verifique se a rede do servidor da web foi adicionada a login_trusted_networks no dovecot.conf. Edite: /etc/dovecot/dovecot.conf login_trusted_networks = 127.0.0.1 ::1

Base: https://github.com/corbosman/dovecot_ident
