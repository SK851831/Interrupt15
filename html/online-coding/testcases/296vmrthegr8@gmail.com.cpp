#include<iostream>
#include<algorithm>
#include<vector>
#include<climits>

using namespace std;
int main()
{
  int t;
  cin>>t;
  while(t--)
  {
    int i,j,k,n;
    cin>>n;
    int arr[4]={1,5,7,10};
   	int dp[n+1];
    for(i=0;i<=n;i++)
      dp[i]=INT_MAX;
    dp[0]=1;
    for(i=1;i<=n;i++)
    {
      for(j=0;j<4;j++)
      {
        if(i>=arr[j]&&dp[i-arr[j]]!=INT_MAX)
          dp[i]=min(dp[i],1+dp[i-arr[j]]);
      }
    }
    cout<<dp[n]<<"\n";
  }
  return 0;
}