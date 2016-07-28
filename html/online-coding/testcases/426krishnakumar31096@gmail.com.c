#include<stdio.h>
void main()
{
  int m,n,l,k,a[100][100],i,j;
  scanf("%d%d",&m,&n);
  for(i=0;i<m;i++)
  {
    for(j=0;j<n;j++)
    {
      scanf("%d",&a[i][j]);
    }
  }
  l=m-1;
  k=n-1;
  for(i=0;i<n;i++)
         {
          printf("%d ",a[l][i]);
           }
           l--;
   for(i=l;i>=0;i--)
           {
             printf("%d ",a[i][k]);
                    }
                    k--;
      for(i=k;i>0;i--)
                    {
                      printf("%d ",a[0][i]);
                             }
                             l--;
           for(i=k;i<n-1;i++)
                             {
                               printf("%d ",a[m-2][i]);
           }
  
  k++;
  for(i=k;i>=1;i--);
  {
    printf("%d ",a[l][i]);
  }
}
      
      