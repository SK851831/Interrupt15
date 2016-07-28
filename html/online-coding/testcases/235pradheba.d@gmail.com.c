#include<stdio.h>
void main()
{
int n,li[100],count=0,i;
scanf("%d",&n);
for(i=0;i<n;i++)
scanf("%d",&li[i]);
for(i=0;i<n,li[i]>=0;i++)
{
if(li[i]>=10)
{
count=count+1;
li[i]=li[i]-10;
}
else if(li[i]<10 && li[i]>=7)
{
count=count+1;
li[i]=li[i]-7;
}
else if(li[i]<7&&li[i]>=5)
{
count=count+1;
li[i]=li[i]-5;
}
else if(li[i]<5&&li[i]>=1)
{
count=count+1;
li[i]=li[i]-1;
}
printf("%d\n",count);
}
}