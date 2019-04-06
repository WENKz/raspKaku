raspKaku
========

Control your KAKU with Raspberry


=======================================================================================================================

These files make it possible that if you follow the tutorial that is on tweak blog about turning on and off lights 
with 433 mhz to use the new kaku (system). And I also added the possibility to send the adress instead of hardcoded.

Leave a comment i you change or add shizzle

:)

good luck, have fun


     g++ -o newkaku newkaku.cpp -I/usr/local/include -L/usr/local/lib -lwiringPi

now you can control the Action 433mhz remote flamingo wall socket
./newkaku A 1 on
./newkaku A 1 off
