#include<stdio.h>

void spiral(int m,int n,int a[][n])
{
  int i,k,l;
  m--;n--;
  k=m;l=n;
  while(k>=0 && l>=0)
  {
    for(i=0;i<=k;i++)
      printf("%d",a[k][i]);
    k--;
    for(i=k;i>=0;i--)
      printf("%d",a[i][n]);
    n--;
    if(m>=k)
    {
      for(i=l;i>=0;i--)
        printf("%d",a[m][i]);
      m--;
      for(i=m;i<=k;i++)
        printf("%d",a[i][l]);
      l++;
    }
    printf("\n");
  }
}

int main(void)
{
  int arr[20][20],r,c,i,j;
  scanf("%d %d",&r,&c);
  for(i=0;i<r;i++)
    for(j=0;j<c;j++)
      scanf("%d",&arr[i][j]);
  spiral(r,c,arr);
  return 0;
}
