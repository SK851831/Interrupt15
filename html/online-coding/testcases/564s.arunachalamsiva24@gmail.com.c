#include<stdio.h>
void main()
{
  int i,j,a[10][10];
  for(i=0;i<3;i++)
  {
    for(j=0;j<3;j++)
    {
      scanf("%d",&a[i][j]);
    }
  }
    for(i=2;i>=0;i--)
  {
    for(j=0;j<3;j++)
    {
      printf("%d\t",a[i][j]);
    }
    }    
}
    
  