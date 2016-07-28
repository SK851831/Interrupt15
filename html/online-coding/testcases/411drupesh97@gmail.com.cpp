#include <iostream>
#define ll long long

using namespace std;

const int maxn=1000006;
int dp[maxn];

void pre(){
	dp[0]=0;
	for(int i = 1;i < maxn; i++){
		dp[i]=1000000000;
		if(i>0)
		dp[i]=min(dp[i],dp[i-1]+1);
		if(i>4){
			dp[i]=min(dp[i],dp[i-5]+1);
		}
		if(i>6){
			dp[i]=min(dp[i],dp[i-7]+1);
		}
		if(i>9){
			dp[i]=min(dp[i],dp[i-10]+1);
		}
	}
	//
}

void solve(int time){
	int n;
	cin>>n;
	cout<<dp[n]<<"\n";
}

int main(){
    int t=1;
    cin>>t;
    pre();
    for(int i=1;i<=t;i++)solve(i);
}