# Send-Email-using-php_localhost
note: No Need Of Downloading PhpMailer! :)
"First of all mofily two file in your xampp directory"
1. xampp/php/php.ini! 
:[mail function]
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = officemails3019@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
3. xampp/sendmail/sendmail.eni!
:[sendmail]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=officemails3019@gmail.com
auth_password=PasswordHERE
force_sender=officemails3019@gmail.com

after this if it does not work. then go to your gmail and on it. https://myaccount.google.com/lesssecureapps?

and you're Done. 
Enjoy!
