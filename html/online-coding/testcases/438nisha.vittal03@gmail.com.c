#include<stdio.h>
int main()
{
int n,k,a[n][k],i,j;
printf("\n enter the no of rows");
scanf("%d",&n);
printf("\n enter the no of columns");
scanf("%d",&k);
for(i=0;i<n;i++)
{
for(j=0;j<k;j++)
{
scanf("%d",&a[i][j]);
}
}
for(i=0;i<n;i++)
{
for(j=0;j<k;j++)
{
printf("%d",a[i][j]);
printf("\t\n");
}
}
return 0;
}