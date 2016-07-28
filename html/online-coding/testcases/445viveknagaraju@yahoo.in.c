#include <iostream>
using namespace std;

int main() {
	
	int i,j,a[300][300],r,c,m,n,x,y;
	// your code goes here
   cin>>n>>m;
   for(i=0;i<n;i++)
   {
   	for(j=0;j<m;j++)
   	{
   		cin>>a[i][j];
   	}
   }
   
    r=n-1,c=0;
    x=0,y=0;
   while(r>=0&&c<=m-1)
   {
   	    for(i=c;i<m;i++)
   	    {
   	    	cout<<a[r][i]<<" ";
   	    }
   	    r--;
   	 for(i=r;i>=x;i--)
   	 {
   	 	cout<<a[i][m-1]<<" ";
   	 }
   	 m--;
   	 
   	 for(i=m-1;i>=c;i--)
   	 {
   	 	cout<<a[x][i]<<" ";
   	 }
   	 x++;
   	 
   	 for(i=x;i<=r;i++)
   	 {
   	 	cout<<a[i][c]<<" ";
   	 }
   	 c++;
   	    
   }
   
   return 0;
}

