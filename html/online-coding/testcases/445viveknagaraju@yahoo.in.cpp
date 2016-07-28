#include <iostream>
using namespace std;
int a[1000][1000];
int main() {
	
	int i,j,r,c,m,n,x,y;
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
   while(r>x&&c<m)
   {
   	    for(i=c;i<m;i++)
   	    {
   	    	cout<<a[r][i];
   	    }
   	    r--;
   	 for(i=r;i>=x;i--)
   	 {
   	 	cout<<a[i][m-1];
   	 }
   	 m--;
   	 
   	 for(i=m-1;i>=c;i--)
   	 {
   	 	cout<<a[x][i];
   	 }
   	 x++;
   	 
   	 for(i=x;i<=r;i++)
   	 {
   	 	cout<<a[i][c];
   	 }
   	 c++;
   	    
   }
   
   return 0;
}

