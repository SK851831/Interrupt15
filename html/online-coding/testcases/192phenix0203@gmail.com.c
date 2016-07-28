
#include<stdio.h>
int mina(int b);
int findMin(int q);
int main(){
int i,b,n,c,inp[1000];
scanf("%d",&n);
for(i=0;i<n;i++)
scanf("%d",&inp[i]);
for(i=0;i<n;i++)
  {
  b=inp[i];
  c=mina(b);
printf("%d\n",c);}
}
mina(int b)
{int c=0,d=0,e=0,f=0,g;
if(b>=10)
{c=b/10;
b=b%10;
}
if(b>=7)
{d=b/7;
b=b%7;
}
if(b>=5)
{
 e=b/5;
 b=b%5;
}
if(b>=1)
{
   f=b/1;

}
g=c+d+e+f;
return g;
}

