#include<iostream.h>

void main()
{
   int a[][];
   int m,n,k=0,l=0;
   cin>>m>>n;
   for(int i=0;i<m;i++)
     for(int j=0;j<n;j++)
       cin>>a[i][j];
  cout<<"Sample Input";
   for(int i=0;i<m;i++)
     for(int j=0;j<n;j++)
       cout<<a[i][j];
   for(int i=m;i<m;i++)
     for(int j=0;j<n;j++)
  while((k<m)&&(l<n))
  {
    for(i=m;i>=0;i--)
     for(int j=0;j<n;j++)  
     { 
       cout<<a[i][j];
       m--;
     }
    for(i=0;i<=m;i++)
     for(int j=n;j>=0;j--)  
     { 
       cout<<a[i][j];
       n--;
     }
    for(i=m;i>=0;i--)
     for(int j=n;j>=0;j--)  
     { 
       cout<<a[i][j];
       m--;
     }
    for(i=0;i<m;i++)
     for(int j=0;j<n;j++)  
     { 
       cout<<a[i][j];
       n--;
     }
  }
}  