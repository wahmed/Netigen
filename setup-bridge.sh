#!/bin/bash

# BRING UP ETHERNET BRIDGE

# Add interfaces to bridge
brctl addbr br0
brctl addif br0 eth0
brctl addif br0 eth1

# Bring up interfaces

ifconfig eth0 up
ifconfig eth1 up
ifconfig br0 up

# If you want the machine to appear on the network as well as be bridged
# dhclient br0



#show bridge
brctl show
