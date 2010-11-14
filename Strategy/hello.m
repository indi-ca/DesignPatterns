#import <Foundation/Foundation.h>
#import "hello.h"

int main (int argc, const char * argv[])
{
	NSAutoreleasePool *pool = [[NSAutoreleasePool alloc] init];
	NSLog(@"hello cocoa world");
	[pool drain];
	return 0;
}
