#include<stdio.h>
int main()
{
int a[10][10];
int p=0,sq,n,nn,m,i,j,count=0;
scanf("%d%d",&n,&m);
  nn=m;

printf("\n");

for(i=0;i<n;i++)
for(j=0;j<m;j++)
scanf("%d",&a[i][j]);

i=0;
j=0;

sq=n*m;

while(1)
{
  while(j<nn)
  {
   printf("%d ",a[i][j]);
   count++;
   j++;
  }

  if(count>=sq)break;


	j--;
	i++;

  while(i<n)
  {
   printf("%d ",a[i][j]);
   count++;
   i++;
  }

  i--;
  j--;
   if(count>=sq)break;

  while(j>=p)
  {
   printf("%d ",a[i][j]);
   count++;
   j--;
  }
   if(	count>=sq)break;

  j++;
  i--;

  while(i>p)
  {
  printf("%d ",a[i][j]);
  count++;
  i--;
  }

   if(count>=sq)break;

  p++;
  i=j=p;
  nn--;
  }
  return 0;

  }
