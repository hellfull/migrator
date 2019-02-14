#!/bin/bash
# Gets External IP of this host and adds it into HOSTIP var
HOSTIP=$(curl https://ipinfo.io/ip);
# Changes the HOST_EXT_IP in .env file with the current Hosts external IP
sed -i "/HOST_EXT_IP/c\HOST_EXT_IP=$HOSTIP" ../.env 
