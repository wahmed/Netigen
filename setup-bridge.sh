#!/bin/bash

# BRING UP ETHERNET BRIDGE

#ETH0="ens35u1"
ETH0="ens33"
ETH1="ens38"

# Add interfaces to bridge
brctl addbr br0
brctl addif br0 $ETH0
brctl addif br0 $ETH1

# Bring up interfaces

ifconfig $ETH0 up
ifconfig $ETH1 up
ifconfig br0 up

# If you want the machine to appear on the network as well as be bridged
# dhclient br0



#show bridge
brctl show
brctl showstp br0
