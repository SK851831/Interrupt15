#include <stdio.h>
int main(void) 
{
    int t=1;
    while(t--)
    {
        int n=2,b,k,l;
        b=n/10;
        k=n%10;
        if(k!=0)
        {
        printf("%d",b+1);
        }
        else
        {
            printf("%d",b+0);
        }
    }
 return 0;
}