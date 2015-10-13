#!/bin/bash

# Close the bridge

#1 Put the interfaces down

ifconfig eth0 down
ifconfig eth1 down
ifconfig br0 down

# Add interfaces to bridge
brctl delbr br0

# Bring up interfaces

ifconfig eth0 up
ifconfig eth1 up
#ifconfig br0 up
