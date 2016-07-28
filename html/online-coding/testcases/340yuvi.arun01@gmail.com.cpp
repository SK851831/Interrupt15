#include<iostream>
using namespace std;
//int l,m;
int main()
{
	int r=3,c=3,l,m,i,e,j,h,k=0;
int a[r][c];
//char aa[4]={'r','u','l','d'};
cin>>r;
  cout<<"\t";
 cin>>c;
j=r;
h=r-1;

l=r-1;
m=-1;
for(i=0;i<r;i++)
{
if(2*i==r){e=i;}
else if(2*i-1==r){e=i;}
for(j=0;j<c;j++)
{
cin>>a[i][j];
cout<<"\t";

}
cout<<"\n";
}
for(k=0;k<e;k++)
{

for(i=0;i<j;i++)
{m++;
  if(r%2!=0)
{
if(l==r/2&&m==c/2)
{
cout<<a[l][m]<<"\t";
return 0;
}}
if(i!=j-1){
cout<<a[l][m]<<"\t";

}
else
{
cout<<a[l][m]<<"\t";

}

}
for(i=0;i<h;i++)
{
--l;
cout<<a[l][m]<<"\t";

}

for(i=0;i<h;i++)
{--m;
if(r%2==0)
{
if(l==r/2-1&&m==c/2-1)
{
cout<<a[l][m]<<"\t";
return 0;
}}
cout<<a[l][m]<<"\t";
}
h=h-2;
j=j-2;
//cout<<"value of jis:"<<j;
//cout<<"value of h is:"<<h;
for(i=0;i<j;i++)
{++l;
cout<<a[l][m]<<"\t";

}

++m;
}

}
