## login to the server
# local $ ssh root@<serverip>

## run updates
sudo apt update
sudo apt-get upgrade

## add user & grant sudo privlages
adduser imadmin
usermod -aG sudo imadmin

## switch to the new user
su - imadmin

## add keys for the new user
mkdir ~/.ssh && \
chmod 700 ~/.ssh && \
vim ~/.ssh/authorized_keys

## paste key from local machine to ~/.ssh/authorized_keys, save & exit

chmod 600 ~/.ssh/authorized_keys

## close the connection to the server
exit

## login to the server
# local $ ssh root@<serverip>

sudo vim /etc/ssh/sshd_config

## change
# PasswordAuthentication no -> PasswordAuthentication yes
## & add the following
# PubkeyAuthentication yes
# ChallengeResponseAuthentication no
## save

sudo systemctl reload sshd

## close the connection to the server
exit

## test the connection for the new user
# local $ ssh imadmin@<serverip>

## setup & enable firewall
sudo ufw app list
## Output
## Available applications:
##   OpenSSH

sudo ufw allow OpenSSH && \
sudo ufw enable && \
sudo ufw status
## Output
## Status: active
##
## To                         Action      From
## --                         ------      ----
## OpenSSH                    ALLOW       Anywhere
## OpenSSH (v6)               ALLOW       Anywhere (v6)

exit
