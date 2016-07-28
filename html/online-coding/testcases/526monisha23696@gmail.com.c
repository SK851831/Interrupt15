#include<stdio.h>
#include<Conio.h>
int main()
{
 int a[10][10],s;
  int m,i,j=0;num,p;
  printf("enter the matrix value");
  scanf("%d",&s);
  printf("matrixvalue is%d%d",s,s);
  printf("enter the value for matrix");
  for(int i=0;i<s;i++)
  {
    for(int j=0;j<s;j++)
      scanf("%d",&a[i][j]);
  }
  p=s;
  for(int i=p-1;i>0;i--;j++)
  {
   for(num=j;num<i;num++)
     printf("%d",a[j][num]);
    for(num=j;num<i;num++)
      printf("%d",a[num][j]);
    for(num=i;num>j;num--)
      printf("%d",a[i][num]);
    for(num=i;num>j;num--)
      printf("%d",a[j][num]);
  }
  m=(p-1)/2;
  if(p%2==1)
    printf("%d",a[m][n]);
  getch();
}
}