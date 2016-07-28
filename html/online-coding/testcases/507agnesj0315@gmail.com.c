#include <stdio.h>




int main()
{
    int f,b,t,fd,bd,time,T,x,y;
    scanf("%d",&T);
    while(T--)
    {
        time=0;
        scanf("%d%d%d%d%d",&f,&b,&t,&fd,&bd);
        if(fd-f>0&&bd-b>0&&f==b)
             {printf("No Ditch \n"); break;}
        else
        while(fd!=0&&bd!=0)
        {
            if((fd-f)>0)
            {
                fd-=f;
                bd+=f;
                time+=t*f;
            }else
            {
                time+=fd*t;
                fd=0;
                break;
            }


            if((bd-b)>0)
            {
                bd-=b;
                fd+=b;
                time+=t*b;
            }else
            {
                time+=bd*t;
                bd=0;
                break;
            }
        }



        if(fd==0)
            printf("%d F\n",time);
        else
            printf("%d B\n",time);
    }
    return 0;
}
