strategy_client: strategy_client.h strategy_client.m FlyBehaviour.h FlyBehaviour.m FlyWithWings.m FlyWithWings.h duck.h duck.m
	gcc `gnustep-config --objc-flags` -lgnustep-base strategy_client.m duck.m FlyWithWings.m -o strategy_client

clean:
	rm strategy_client	
	rm *.d

environment:
	. /usr/share/GNUstep/Makefiles/GNUstep.sh
