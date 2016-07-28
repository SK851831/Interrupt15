#include <iostream>
#include<cstdio>



int main()
{
    long int f,b,t,fd,bd,time,T,x,y;
    std::cin>>T;
    while(T--)
    {
        time=0;
        std::cin>>f>>b>>t>>fd>>bd;
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
            printf("%ld F \n",time);
        else
            printf("%ld B \n",time);
    }
    return 0;
}
