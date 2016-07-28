#include<iostream>
using namespace std;
main()
{
	int m,n,i,j;
	cin>>m>>n;
	int a[m][n];
	for(i=0;i<m;i++)
	{
		cout<<endl;
		for(j=0;j<n;j++)
		{
			cin>>a[i][j];
		}
	}
	int l,k;
	l=m-1;
	k=n-1;
	
	
	for(i=0;i<=k;i++)
	cout<<"\t"<<a[l][i];
	m--;
	
	
	for(i=k+1;i>0;i--)
	cout<<"\t"<<a[i][k];
	n--;
	for(i=n-1;i>=0;i--)
	cout<<"\t"<<a[l][i];
	m++;
	for(i=m;m<n-1;i++)
	cout<<"\t"<<a[n][i];
	n++;
	for(i=n;i<=n-2;i++)
	cout<<a[m][i];
	m--;
	for(i=m;m>=1;m--)
	cout<<"\t"<<a[m][i];
}




