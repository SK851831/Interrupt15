#include<stdio.h>
#include<limits.h>


int main()
{
  int t;
  scanf("%d",&t);
  while(t--)
  {
    int i,j,k,n;
    scanf("%d",&n);
    int arr[4]={1,5,7,10};
   	int dp[n+1];
    for(i=0;i<=n;i++)
      dp[i]=INT_MAX;
    dp[0]=0;
    for(i=1;i<=n;i++)
    {
      for(j=0;j<4;j++)
      {
        if(i>=arr[j]&&dp[i-arr[j]]!=INT_MAX)
        {
          if(dp[i]>=1+dp[i-arr[j]])
            dp[i]=1+dp[i-arr[j]];
        }
      }
    }
    printf("%d\n",dp[n]);
  }
  return 0;
}