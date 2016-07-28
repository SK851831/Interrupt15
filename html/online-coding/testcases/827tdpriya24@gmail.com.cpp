#include<iostream>
using namespace std;
int main()
{
int a[10][10];
int dir=0;

int m,n,t=0,b,l=0,z=0,r,i,j;
cout<<"ENTER THE ROWS AND COLUMNS OF THE MATRIX ";
cin>>m>>n;
b=m-1;
r=n-1;
cout<<"ENTER THE ELEMENTS OF THE MATRIX :\n\n";

for( i=0;i<m;i++)
{
for( j=0;j<n;j++)
{

cin>>a[i][j];
}

}
cout<<"MATRIX IS :\n\n";
for(i=0;i<m;i++)
{
for( j=0;j<n;j++)
{
cout<<"\t"<<a[i][j];

}
cout<<"\n\n";
}

while(t<=b&&l<=r)
{
if(dir==0)
{
for(int k=l;k<=r;k++)
{
cout<<a[t][k];

}

t++;

}
else if(dir==1)
{
for(int k=t;k<=b;k++)
{
cout<<a[k][r];

}

r--;

}
else if(dir==2)
{
for(int k=r;k>=l;k--)
{

cout<<a[b][k];

}

b--;

}
else if(dir==3)
{

for(int k=b;k>=t;k--)
{

cout<<a[k][l];

}
l++;

}

dir=(dir+1)%4;

}

return 0;
}