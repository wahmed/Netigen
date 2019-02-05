**Video Quality of Experience - Benchmark video delivery over Internet

**Tool Explanation
This tools is designed to benchmark OTT Video delivery Apps, and has two components. 

1- Player Benchmark - Popular use-case of this tool is to test different video players inside iOS/Android/Tizen Apps and see how they cope with real world network conditions. 

2- Network Impairment Generator - script and create real-world difficult network conditions which make even the most tuned Apps such as Netflix and Amazon Prime video struggle.

**Installation Instructions

    1. Install LAMP stack.
    2. Add username to to sudoers list – The PHP webpages need to run root level scripts to function
Add this line at the bottom of the /etc/sudoers
ALL		ALL = (ALL) NOPASSWD: ALL
    3. Install Linux Bridiging utilities: 
#sudo apt-get install bridge-utils
    4. Install Wavemon
    5. Follow instrustions in the download file to run the program. 
