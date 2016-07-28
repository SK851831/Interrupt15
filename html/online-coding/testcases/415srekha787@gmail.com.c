#include <stdio.h>


 


int main(void) {


    int t;


    scanf("%d",&t);


    while(t--)


    {


        int n,b,k,l;


        scanf("%d",&n);


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


    // your code goes here


    return 0;


}


 