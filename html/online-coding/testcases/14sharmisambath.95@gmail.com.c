#include<stdio.h>
int main()
{
  int n,a,b[4]={1,5,7,10};
  int i,s;
  scanf("%d",&n);
  
  while(n--)
  {
    scanf("%d",&a);
    s=0;
    for(i=3;i>=0;i--)
    {
      s+=a/b[i];
      a=a%b[i];
    }
    printf("%d\n",s);
 }

  return 0;
}
