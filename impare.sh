#!/bin/bash

ORIGINAL_PATH=$PATH

#echo $ORIGINAL_PATH

export PATH="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/game"

#echo $PATH	
CTOSINTERFACE=eth1	# EGRESS interface on Bridge, facing the SERVER
STOCINTERFACE=eth0	# EGGRES interface on Bridge, facing the CLIENT

# Client To Server
CDELAY=$1	
CJITTER=$2
CLOSS=$3
CDUPLICATE=$4
CCORRUPT=$5
CREORDER=$6

# Server to Client
SDELAY=$7
SJITTER=$8
SLOSS=$9
SDUPLICATE=$10
SCORRUPT=$11
SREORDER=$12

#in kbps (bits, remember!) -WA
UPLINKRATE=$13
DOWNLINKRATE=$14

#DOWNLINKRATE=$13
#UPLINKRATE=$14

	
# Clear Latency/Loss/Jitter
/sbin/tc qdisc del root dev $CTOSINTERFACE 2>/dev/null
/sbin/tc qdisc del root dev $STOCINTERFACE 2>/dev/null

# Client to Server Imparements (on Bridge)
/sbin/tc qdisc add dev $CTOSINTERFACE root netem delay ${CDELAY}ms ${CJITTER}ms loss $CLOSS% duplicate ${CDUPLICATE}% corrupt ${CCORRUPT} reorder ${CREORDER}% limit 10000000 2>&1 >/dev/null rate $UPLINKRATE
/sbin/tc qdisc add dev $STOCINTERFACE root netem delay ${SDELAY}ms ${SJITTER}ms loss $SLOSS% duplicate ${SDUPLICATE}% corrupt ${SCORRUPT} reorder ${SREORDER}% limit 10000000 2>&1 >/dev/null rate $DOWNLINKRATE
#kbit
#$PATH=$ORIGINAL_PATH
export PATH=$ORIGINAL_PATH
#echo $PATH
