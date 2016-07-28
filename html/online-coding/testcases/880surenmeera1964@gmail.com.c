#include<stdio.h>
 int main()
{
    int N;
   
 
    int F, B, BD, FD, T,cur,time,i;
    scanf("%d",&N);
    for (i = 0; i < N; ++i)
    {
        scanf("%d %d %d %d %d",&F,&B,&BD,&FD,&T);
         
        if(FD <= F)
        {
            printf("%dF\n",(FD*T));
        }
 
        else
        {
            if(F > B)
            {
                 cur = 0;
                time = 0;
                while(cur + F < FD)
                {
                    time += (F + B)*T;
                    cur += (F - B);
                }
                time += (FD - cur)*T;
                printf("%dF\n",time);
            }   
 
            else if(B > F)
            {
                 cur = 0;
                time = 0;
                while(cur + B - F < BD)
                {
                    time += (F + B)*T;
                    cur += (B - F);
                }
                time += (BD - cur)*T + 2*F*T;
                printf("%dB\n",time);
            } 
 
            else
            {
                printf("No Ditch\n");
            }
        }
    }
   return 0;
}