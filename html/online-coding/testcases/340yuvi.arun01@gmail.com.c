#include<stdio.h>

int main()
{
  int r,c,i,j,a[20][20],m,o,g,h,w,q,t,l,k;
  scanf("%d",&r);
  printf("\t");
  scanf("%d",&c);
  printf("\n");
  g=r;
  h=r-1;
  for(i=0;i<r;i++)
  {for(j=0;j<c;j++)
  {
    scanf("%d",&a[i][j]);
    printf("\t");
  }printf("\n");
  }
  printf("%d\t",a[0][c-1]);
  for(i=0;i<10;i++)
  {if(r%2==0){if(2*i==r)
  {
    break;
  }}
   else
   {if(2*i+1==r)
   {
     break;}
   }
  }
  for(k=0;k<i;k++)
  {
    for(t=0;t<g;t++)
    {
      printf("%d\t",a[l][m]);++m;}
    
      --l;
    g=g-2;
    for(o=0;o<h;o++)
    {
      printf("%d\t",a[l][m]);--l;}
    --m;
    for(q=0;q<h;q++)
    {if(l==r/2&&m==c/2)
    {printf("%d\t",a[l][m]);
     return 0;
    }
      printf("%d\t",a[l][m]);
      --m;
    h=h-2;}
    ++l;
    for(w=0;w<g;w++)
    {
      printf("%d\t",a[l][m]);
      ++l;
    }
    ++m;
  }
     
      
  }
  