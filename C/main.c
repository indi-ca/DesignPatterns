#include <stdio.h>

main(int argc, const char* argv[])
{
    printf ("Hello World\n");

    int i;
    for (i = 0; i < argc; i++) {
        printf("arg %d: %s\n", i, argv[i]);
        //fprintf(log_file, "arg %d: %s\n", i, argv[i]);
    }
}
