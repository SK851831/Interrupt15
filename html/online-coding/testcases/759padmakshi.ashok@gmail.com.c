#include<stdio.h>

void main()
{
  int a[5][5],i,j,n;
  printf("enter the matrix rangei,j");
  scanf("%d%d",&i,&j);
  for(i=0;i<4;i++)
  {
    for(j=0;j<4;j++)
    {
      scanf("%d",&a[i][j]);
    }
  }
  for(i=0;i<4;i++)
    {
      printf("%d",a[i][4]);
  }
  for(i=0;i<4;i++)
  {
    printf("%d",a[i][3]);
  }
    for(j=3;j<0;j--)
    {
        printf("%d",a[1][j]);
    }
  
  printf("%d",a[2][0]);
  for(i=0;i<3;i++)
  {
          printf("%d",a[i][3]);
    }
  for(i=3;i<n-3;i--)
  {
          printf("%d",a[i][2]);
    }
  
}