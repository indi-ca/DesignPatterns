#import <Foundation/Foundation.h>
#import "strategy_client.h"
#import "duck.h"
#import "FlyWithWings.h"

int main (int argc, const char * argv[])
{
	NSAutoreleasePool *pool = [[NSAutoreleasePool alloc] init];
	NSLog(@"Running Strategy client");
	
	FlyWithWings *flywithwings = [[FlyWithWings alloc] init];
	
	Duck *duck = [[Duck alloc] initWithStrategy : flywithwings];
	[duck fly];
	
	[pool drain];
	return 0;
}
